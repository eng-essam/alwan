<?php

namespace App\Http\Livewire\ServiceOrder;

use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\Service;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllStorageOrder extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $orderId;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allService'] = Service::get();
        if ($this->searchOrder == null) {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 7)->latest('id')->paginate(30);
        } else {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 7)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->latest('id')->paginate(5);
        }
        return view('livewire.service-order.all-storage-order')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function sendReceive($orderId)
    {
        $this->cacheClear();
        $this->orderId = $orderId;
    }

    public function downloadAdminFile($orderId)
    {
        $file = BuyService::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->admin_file);
    }

    public function submitSendReceiveModal()
    {
        $order = BuyService::findOrFail($this->orderId);
        $order->update([
            'order_status_id' => 8,
        ]);
        $this->sendUserNotification($order->user_id, 8, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
    }
}
