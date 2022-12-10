<?php

namespace App\Http\Livewire\CompanyBranche;

use App\Models\Company_branch;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CompanyBranches extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $searchCompany, $companyId;
    public $name_en, $name_ar, $address_ar, $address_en;

    public function render()
    {
        if ($this->searchCompany == null) {
            $data['allCompanyBranch'] = Company_branch::latest()->paginate(30);
        } else {
            $data['allCompanyBranch'] = Company_branch::where('company_name->ar', 'like', '%' . $this->searchCompany . '%')
                ->orWhere('company_name->en', 'like', '%' . $this->searchCompany . '%')->latest('id')->paginate(10);
        }
        return view('livewire.company-branche.company-branches')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function editeCompany($companyId)
    {
        $this->cacheClear();
        $company = Company_branch::findOrFail($companyId);
        $this->companyId = $company->id;
        $this->name_ar = $company->company_name('ar');
        $this->name_en = $company->company_name('en');
        $this->address_ar = $company->company_address('ar');
        $this->address_en = $company->company_address('en');
    }

    public function deleteCompany($companyId)
    {
        $this->cacheClear();
        $this->companyId = $companyId;
    }

    protected $rules = [
        'name_ar' => 'required|string',
        'name_en' => 'required|string',
        'address_ar' => 'required|string',
        'address_en' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitAddCompany()
    {
        $this->validate();
        Company_branch::create([
            'company_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'company_address' => json_encode([
                'ar' => $this->address_ar,
                'en' => $this->address_en
            ]),
        ]);
        $this->dispatchBrowserEvent('closeAddCompany');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();
    }

    public function submitEditCompany()
    {
        $this->validate();
        Company_branch::findOrFail($this->companyId)->update([
            'company_name' => json_encode([
                'ar' => $this->name_ar,
                'en' => $this->name_en
            ]),
            'company_address' => json_encode([
                'ar' => $this->address_ar,
                'en' => $this->address_en
            ]),
        ]);
        $this->dispatchBrowserEvent('closeEditCompany');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitDeleteCompany()
    {
        Company_branch::findOrFail($this->companyId)->delete();
        $this->dispatchBrowserEvent('closeDeleteCompany');
        toastr()->success(__('lang.deleted_successfully'));
        $this->cacheClear();
    }
}
