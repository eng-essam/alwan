<?php

namespace App\Http\Livewire\ProductOrder;

use App\Models\BuyProduct;
use App\Models\Company_branch;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllExecuteProductOrders extends Component
{
    use WithPagination;
    use SendNotification;

    public $searchOrder, $orderId;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();

        if ($this->searchOrder == null) {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 6)->paginate(30);
        } else {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 6)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->paginate(5);
        }
        return view('livewire.product-order.all-execute-product-orders')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function downloadUserFile($orderId)
    {
        $file = BuyProduct::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->user_file);
    }

    public function downloadAdminFile($orderId)
    {
        $file = BuyProduct::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->admin_file);
    }

    public function sendStore($orderId)
    {
        $this->cacheClear();
        $this->orderId = $orderId;
    }

    public function submitSendStoreModal()
    {
        $order = BuyProduct::findOrFail($this->orderId);
        $order->update([
            'order_status_id' => 7,
        ]);
        $this->sendUserNotification($order->user_id, 7, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
    }
}
