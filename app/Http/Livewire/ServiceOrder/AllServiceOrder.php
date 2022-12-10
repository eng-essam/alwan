<?php

namespace App\Http\Livewire\ServiceOrder;

use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\Service;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllServiceOrder extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $branchType, $serviceType, $orderId;
    public $price, $status_message_ar, $status_message_en;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allService'] = Service::get();

        if ($this->searchOrder == null) {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 1)->latest('id')->paginate(30);
        } else {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 1)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->latest('id')->paginate(5);
        }
        return view('livewire.service-order.all-service-order')->with($data);
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

    public function acceptOrder($orderId)
    {
        $this->orderId = $orderId;
    }

    public function refusalOrder($orderId)
    {
        $this->orderId = $orderId;
    }

    public function deleteOrder($orderId)
    {
        $this->orderId = $orderId;
    }

    protected $rules = [
        'price' => 'required|numeric',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitAcceptOrder()
    {
        $this->validate();

        $order = BuyService::findOrFail($this->orderId);
        $order->update([
            'service_price' => $this->price,
            'order_status_id' => 3
        ]);

        $this->sendUserNotification($order->user_id, 3, $order->order_id);
        toastr()->success(__('lang.accept_order_successfully'));
        $this->dispatchBrowserEvent('closeOrderModal');
        $this->cacheClear();
    }

    public function submitRefusalOrder()
    {
        $this->validate([
            'status_message_ar' => 'required|string',
            'status_message_en' => 'required|string',
        ]);

        $order = BuyService::findOrFail($this->orderId);
        $order->update([
            'order_status_message' => json_encode([
                'ar' => $this->status_message_ar,
                'en' => $this->status_message_en
            ]),
            'order_status_id' => 2
        ]);
        $this->sendUserNotification($order->user_id, 2, $order->order_id);
        toastr()->success(__('lang.refusal_order_successfully'));
        $this->dispatchBrowserEvent('closeOrderModal');
        $this->cacheClear();
    }

    public function submitDeleteOrderModal()
    {
        $order = BuyService::findOrFail($this->orderId);
        Storage::disk('uploads')->delete($order->user_file);
        $order->delete();
        toastr()->success(__('lang.deleted_successfully'));
        $this->cacheClear();
    }

}
