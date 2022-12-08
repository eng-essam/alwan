<?php

namespace App\Http\Livewire\ServiceOrder;

use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\Service;
use App\Traits\SendNotification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllSortingOrder extends Component
{
    use WithPagination;
    use SendNotification;
    use WithFileUploads;

    public $searchOrder, $orderId, $admin_file;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();
        $data['allService'] = Service::get();
        if ($this->searchOrder == null) {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 5)->paginate(30);
        } else {
            $data['allServiceOrders'] = BuyService::where('order_status_id', 5)->
            where('order_id', 'like', '%' . $this->searchOrder . '%')->paginate(5);
        }
        return view('livewire.service-order.all-sorting-order')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    protected $rules = [
        'admin_file' => 'required|file|max:102400',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendExecution($orderId)
    {
        $this->cacheClear();
        $this->orderId = $orderId;
    }

    public function downloadFile($orderId)
    {
        $file = BuyService::findOrFail($orderId);
        return Storage::disk('uploads')->download($file->user_file);
    }

    public function submitSendExecutionModal()
    {
        $this->validate();
        $admin_file = Storage::disk('uploads')->put('files', $this->admin_file);
        $order = BuyService::findOrFail($this->orderId);
        $order->update([
            'admin_file' => $admin_file,
            'order_status_id' => 6,
        ]);
        $this->sendUserNotification($order->user_id, 6, $order->order_id);
        $this->dispatchBrowserEvent('closeOrderModal');
        toastr()->success(__('lang.done_successfully'));
        $this->cacheClear();
        sleep(2);
    }
}