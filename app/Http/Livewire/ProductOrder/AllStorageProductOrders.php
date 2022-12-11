<?php

namespace App\Http\Livewire\ProductOrder;

use App\Models\BuyProduct;
use App\Models\Company_branch;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllStorageProductOrders extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $orderId;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();

        if ($this->searchOrder == null) {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 7)->latest('id')->paginate(30);
        } else {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 7)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->latest('id')->paginate(5);
        }
        return view('livewire.product-order.all-storage-product-orders')->with($data);
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
        $file = BuyProduct::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->admin_file);
    }

    public function submitSendReceiveModal()
    {
        $order = BuyProduct::findOrFail($this->orderId);
        $order->update([
            'order_status_id' => 8,
        ]);
        $this->sendUserNotification($order->user_id, 8, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
    }
}
