<?php

namespace App\Http\Livewire\ProductOrder;

use App\Models\BuyProduct;
use App\Models\Company_branch;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllExecuteProductOrders extends Component
{
    use WithPagination;
    use SendNotification;
    use WithFileUploads;

    public $searchOrder, $orderId, $admin_file;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();

        if ($this->searchOrder == null) {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 6)->latest('id')->paginate(30);
        } else {
            $data['allProductOrders'] = BuyProduct::where('order_status_id', 6)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->latest('id')->paginate(5);
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

    protected $rules = [
        'admin_file' => 'required|file|max:102400',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitSendStoreModal()
    {
        $this->validate();
        $order = BuyProduct::findOrFail($this->orderId);
        $admin_file = Storage::disk('uploads')->put('files', $this->admin_file);
        $order->update([
            'admin_file' => $admin_file,
            'order_status_id' => 7,
        ]);
        $this->sendUserNotification($order->user_id, 7, $order->order_id);
        $this->sendAdminNotification(5, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
    }
}
