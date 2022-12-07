<?php

namespace App\Http\Livewire\ProductOrder;

use App\Models\BuyProduct;
use App\Models\Company_branch;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllDeliveredProductOrders extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $orderId;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();

        if ($this->searchOrder == null) {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 8)->paginate(30);
        } else {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 8)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->paginate(5);
        }
        return view('livewire.product-order.all-delivered-product-orders')->with($data);
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
        $order = BuyProduct::findOrFail($this->orderId);
        Storage::disk('uploads')->delete($order->user_file);
        Storage::disk('uploads')->delete($order->admin_file);
        $order->delete();
        toastr()->success(__('lang.deleted_successfully'));
        $this->dispatchBrowserEvent('closeOrderModal');
        $this->cacheClear();
    }
}
