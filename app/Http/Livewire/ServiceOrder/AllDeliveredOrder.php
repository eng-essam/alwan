<?php

namespace App\Http\Livewire\ServiceOrder;

use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\Service;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllDeliveredOrder extends Component
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
            $data['allServiceOrders'] = BuyService::where('order_status_id', 8)->paginate(30);
        } else {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 8)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->paginate(5);
        }
        return view('livewire.service-order.all-delivered-order')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function deleteOrder($orderId)
    {
        $this->orderId = $orderId;
    }

    public function submitDeleteOrderModal()
    {
        $order = BuyService::findOrFail($this->orderId);
        Storage::disk('uploads')->delete($order->user_file);
        Storage::disk('uploads')->delete($order->admin_file);
        $order->delete();
        toastr()->success(__('lang.deleted_successfully'));
        $this->dispatchBrowserEvent('closeOrderModal');
        $this->cacheClear();
    }
}
