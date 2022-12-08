<?php

namespace App\Http\Livewire\Coupons;

use App\Models\Cobon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllCoupons extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $searchCoupon, $couponId;
    public $coupon, $discount_percentage;

    public function render()
    {
        if ($this->searchCoupon == null) {
            $data['allCoupons'] = Cobon::latest()->paginate(30);
        } else {
            $data['allCoupons'] = Cobon::where('cobon', 'like', '%' . $this->searchCoupon . '%')
                ->paginate(10);
        }
        return view('livewire.coupons.all-coupons')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function editeCoupon($couponId)
    {
        $this->cacheClear();
        $coupon = Cobon::findOrFail($couponId);
        $this->couponId = $coupon->id;
        $this->coupon = $coupon->cobon;
        $this->discount_percentage = $coupon->percentage;
    }

    public function deleteCoupon($couponId)
    {
        $this->cacheClear();
        $this->couponId = $couponId;
    }

    protected $rules = [
        'coupon' => 'required|string',
        'discount_percentage' => 'required|numeric',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitAddCoupon()
    {
        $this->validate();
        Cobon::create([
            'cobon' => $this->coupon,
            'percentage' => $this->discount_percentage,
        ]);
        $this->dispatchBrowserEvent('closeAddCoupon');
        toastr()->success(__('lang.add_successfully'));
        $this->cacheClear();
    }

    public function submitEditCoupon()
    {
        $this->validate();
        Cobon::findOrFail($this->couponId)->update([
            'cobon' => $this->coupon,
            'percentage' => $this->discount_percentage,
        ]);
        $this->dispatchBrowserEvent('closeEditCoupon');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitDeleteCoupon()
    {
        Cobon::findOrFail($this->couponId)->delete();
        $this->dispatchBrowserEvent('closeDeleteCoupon');
        toastr()->success(__('lang.deleted_successfully'));
        $this->cacheClear();
    }
}
