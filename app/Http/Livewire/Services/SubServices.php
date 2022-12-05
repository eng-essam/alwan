<?php

namespace App\Http\Livewire\Services;

use App\Models\Company_branch;
use App\Models\Service;
use App\Models\Service_branch;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SubServices extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search, $branchType = null, $editServiceId;
    public $name_ar, $name_en, $desc1_ar, $desc1_en, $desc2_ar, $desc2_en,
        $mainImage, $subImage, $companyBranch, $mainService;

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allMainService'] = Service_branch::get();

        if ($this->search == null) {
            $data['services'] = Service::latest()->where(function ($q) {
                if ($this->branchType != null) {
                    $q->where('company_branch_id', $this->branchType);
                }
            })->paginate(30);
        } else {
            $data['services'] = Service::where(function ($q) {
                $q->where('service_name->ar', 'like', '%' . $this->search . '%')
                    ->orWhere('service_name->en', 'like', '%' . $this->search . '%');
            })->where(function ($q) {
                if ($this->branchType != null) {
                    $q->where('company_branch_id', $this->branchType);
                }
            })->paginate(10);

        }
        return view('livewire.services.sub-services')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function deleteService($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        Storage::disk('uploads')->delete($service->main_img);
        Storage::disk('uploads')->delete($service->sub_img);
        $service->delete();
        toastr()->success(__('lang.deleted_successfully'));
    }

    public function activeService($serviceId)
    {
        Service::findOrFail($serviceId)->update(['active' => 1]);
        toastr()->success(__('lang.active_successfully'));
    }

    public function deactiveService($serviceId)
    {
        Service::findOrFail($serviceId)->update(['active' => 0]);
        toastr()->success(__('lang.deactive_successfully'));
    }

    public function addServiceOffer($serviceId)
    {
        Service::findOrFail($serviceId)->update(['is_offer' => 1]);
        toastr()->success(__('lang.add_to_offers_successfully'));
    }

    public function removeServiceOffer($serviceId)
    {
        Service::findOrFail($serviceId)->update(['is_offer' => 0]);
        toastr()->success(__('lang.remove_from_offers_successfully'));
    }

    public function showServiceModal($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        $this->name_en = $service->service_name('ar');
        $this->name_ar = $service->service_name('en');
        $this->desc1_ar = $service->service_first_desc('ar');
        $this->desc1_en = $service->service_first_desc('en');
        $this->desc2_ar = $service->service_second_desc('ar');
        $this->desc2_en = $service->service_second_desc('en');
        $this->mainImage = $service->main_img;
        $this->subImage = $service->sub_img;
        $this->companyBranch = $service->company_branch->company_name();
        $this->mainService = $service->service_branch->service_branch_name();
    }

    protected $rules = [
        'name_ar' => 'required|string',
        'name_en' => 'required|string',
        'desc1_ar' => 'required|string',
        'desc1_en' => 'required|string',
        'desc2_ar' => 'required|string',
        'desc2_en' => 'required|string',
        'mainImage' => 'nullable|image',
        'subImage' => 'nullable|image',
        'companyBranch' => 'required|numeric|exists:company_branches,id',
        'mainService' => 'required|numeric|exists:service_branches,id',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitAddService()
    {
        $this->validate([
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'desc1_ar' => 'required|string',
            'desc1_en' => 'required|string',
            'desc2_ar' => 'required|string',
            'desc2_en' => 'required|string',
            'mainImage' => 'required|image',
            'subImage' => 'required|image',
            'companyBranch' => 'required|numeric|exists:company_branches,id',
            'mainService' => 'required|numeric|exists:service_branches,id',
        ]);

        $pathMainImage = Storage::disk('uploads')->put('subServices', $this->mainImage);
        $pathSubImage = Storage::disk('uploads')->put('subServices', $this->subImage);

        Service::create([
            'service_name' => json_encode([
                'en' => $this->name_en,
                'ar' => $this->name_ar
            ]),
            'service_first_desc' => json_encode([
                'en' => $this->desc1_en,
                'ar' => $this->desc1_ar,
            ]),
            'service_second_desc' => json_encode([
                'en' => $this->desc2_en,
                'ar' => $this->desc2_ar,
            ]),
            'company_branch_id' => $this->companyBranch,
            'service_branch_id' => $this->mainService,
            'main_img' => $pathMainImage,
            'sub_img' => $pathSubImage,
            'active' => 0,
            'is_offer' => 0
        ]);
        sleep(1);
        $this->dispatchBrowserEvent('closeAddServiceModal');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();
    }

    public function editService($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        $this->cacheClear();
        $this->editServiceId = $service->id;
        $this->name_ar = $service->service_name('ar');
        $this->name_en = $service->service_name('en');
        $this->desc1_ar = $service->service_first_desc('ar');
        $this->desc1_en = $service->service_first_desc('en');
        $this->desc2_ar = $service->service_second_desc('ar');
        $this->desc2_en = $service->service_second_desc('en');
        $this->companyBranch = $service->company_branch_id;
        $this->mainService = $service->service_branch_id;
    }

    public function submitEditService()
    {
        $service = Service::findOrFail($this->editServiceId);
        $this->validate();

        $pathMainImage = $service->main_img;
        $pathSubImage = $service->sub_img;

        if ($this->mainImage != null) {
            Storage::disk('uploads')->delete($pathMainImage);
            $pathMainImage = Storage::disk('uploads')->put('products', $this->mainImage);
        }
        if ($this->subImage != null) {
            Storage::disk('uploads')->delete($pathSubImage);
            $pathSubImage = Storage::disk('uploads')->put('products', $this->subImage);
        }
        $service->update([
            'service_name' => json_encode([
                'en' => $this->name_en,
                'ar' => $this->name_ar
            ]),
            'service_first_desc' => json_encode([
                'en' => $this->desc1_en,
                'ar' => $this->desc1_ar,
            ]),
            'service_second_desc' => json_encode([
                'en' => $this->desc2_en,
                'ar' => $this->desc2_ar,
            ]),
            'company_branch_id' => $this->companyBranch,
            'service_branch_id' => $this->mainService,
            'main_img' => $pathMainImage,
            'sub_img' => $pathSubImage,
        ]);
        sleep(1);
        $this->dispatchBrowserEvent('closeEditServiceModal');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

}
