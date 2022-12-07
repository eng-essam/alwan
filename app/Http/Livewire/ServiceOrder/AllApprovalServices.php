<?php

namespace App\Http\Livewire\ServiceOrder;

use App\Models\Address;
use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\Service;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllApprovalServices extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $orderId, $detailed_address, $region, $city;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allService'] = Service::get();
        if ($this->searchOrder == null) {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 3)->paginate(30);
        } else {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 3)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->paginate(5);
        }
        return view('livewire.service-order.all-approval-services')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function downloadFile($orderId)
    {
        $file = BuyService::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->user_file);
    }

    public function deleteOrder($orderId)
    {
        $this->orderId = $orderId;
    }

    public function paymentConfirmation($orderId)
    {
        $this->orderId = $orderId;
    }

    protected $rules = [
        'region' => 'required|string',
        'detailed_address' => 'required|string',
        'city' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitDeleteOrderModal()
    {
        $order = BuyService::findOrFail($this->orderId);
        Storage::disk('uploads')->delete($order->user_file);
        $order->delete();
        toastr()->success(__('lang.deleted_successfully'));
        $this->dispatchBrowserEvent('closeOrderModal');
        $this->cacheClear();
    }

    public function submitPaymentConfirmation()
    {
        $this->validate();
        $order = BuyService::findOrFail($this->orderId);
        $user_address = Address::create([
            'user_id' => $order->user_id,
            'city' => $this->city,
            'region' => $this->region,
            'fullAddress' => $this->detailed_address,
        ]);

        $order->update([
            'address_id' => $user_address->id,
            'order_status_id' => 5,
        ]);

        $this->sendUserNotification($order->user_id, 5, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
    }
}
