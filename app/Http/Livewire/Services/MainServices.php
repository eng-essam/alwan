<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use App\Models\Service_branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class MainServices extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $serviceName, $editeMainServiceId;
    public $name_en, $name_ar, $desc_ar, $desc_en, $Image;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        if ($this->serviceName == null) {
            $data['mainServices'] = Service_branch::latest()->paginate(30);
        } else {
            $data['mainServices'] = Service_branch::where('service_branch_name->ar', 'like', '%' . $this->serviceName . '%')->orWhere('service_branch_name->en', 'like', '%' . $this->serviceName . '%')->paginate(10);
        }
        return view('livewire.services.main-services')->with($data);
    }

    public function activeMainService($mainServiceId)
    {
        Service_branch::findOrFail($mainServiceId)->update(['active' => 1]);

        Service::where('service_branch_id ', $mainServiceId)->update(['active' => 1]);

        toastr()->success(__('lang.active_successfully'));


    }

    public function deactiveMainService($mainServiceId)
    {
        Service_branch::findOrFail($mainServiceId)->update(['active' => 0]);

        Service::where('service_branch_id', $mainServiceId)->update(['active' => 0]);

        toastr()->success(__('lang.deactive_successfully'));

    }

    public function deleteMainService($MainServiceId)
    {
        $this->deleteMainServiceId = $MainServiceId;
    }

    public function submitDeleteMainService()
    {
        $MainService = Service_branch::findOrFail($this->deleteMainServiceId);
        Storage::disk('uploads')->delete($MainService->service_branch_img);

        $allSubServices = Service::where('service_branch_id', $this->deleteMainServiceId)->get();
        foreach ($allSubServices as $subService) {
            Storage::disk('uploads')->delete($subService->main_img);
            Storage::disk('uploads')->delete($subService->sub_img);
            $subService->delete();
        }
        $MainService->delete();
        $this->deleteMainServiceId = null;
        toastr()->success(__('lang.deleted_successfully'));
    }

    protected $rules = [
        'name_ar' => 'required|string',
        'name_en' => 'required|string',
        'desc_ar' => 'required|string',
        'desc_en' => 'required|string',
        'serviceImage' => 'nullable|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function editeMainService($MainServiceId)
    {
        $MainService = Service_branch::findOrFail($MainServiceId);
        $this->editeMainServiceId = $MainServiceId;
        $this->name_ar = $MainService->service_branch_name('ar');
        $this->name_en = $MainService->service_branch_name('en');
        $this->desc_ar = $MainService->service_branch_desc('ar');
        $this->desc_en = $MainService->service_branch_desc('en');
    }

    public function submitEditeMainService(Request $request)
    {
        $MainService = Service_branch::findOrFail($this->editeMainServiceId);

        $this->validate();

        $imgPath = $MainService->service_branch_img;
        if ($this->serviceImage != null) {
            Storage::disk('uploads')->delete($imgPath);
            $imgPath = Storage::disk('uploads')->put('services', $this->serviceImage);
        }

        $MainService->update([
            'service_branch_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'service_branch_desc' => json_encode([
                'ar' => $this->desc_ar,
                'en' => $this->desc_en
            ]),
            'service_branch_img' => $imgPath
        ]);
        sleep(1);

        $this->dispatchBrowserEvent('closeEditMainServiceModal');
        toastr()->success(__('lang.edit_successfully'));

    }

    public function submitAddMainService()
    {
        $this->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'serviceImage' => 'required|image'
        ]);

        $imgPath = Storage::disk('uploads')->put('services', $this->serviceImage);
        Service_branch::create([
            'service_branch_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'service_branch_desc' => json_encode([
                'ar' => $this->desc_ar,
                'en' => $this->desc_en
            ]),
            'service_branch_img' => $imgPath
        ]);

        sleep(1);
        $this->dispatchBrowserEvent('closeAddMainServiceModal');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();

    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function showEditeMainServiceModal()
    {
        $this->dispatchBrowserEvent('showEditMainServiceModal');

    }

}

