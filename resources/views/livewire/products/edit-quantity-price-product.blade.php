<div class="row">
    @php
        $allQuantityPrices=json_decode($product->product_quantity_price,true);
    @endphp
    @foreach($allQuantityPrices as $key => $oneQuantityPrice)
        <div class="col-md-4 mb-25">
            <label style="font-weight: bold">{{'- '. __('lang.quantity')}}</label>
            <input name="quantity[]"
                   value="{{$allQuantityPrices[$key]['quantity']}}"
                   class="form-control form-control-lg"
                   type="number">
            @error('quantity')
            <small style="color: red">{{ $message }}.</small>
            @enderror
        </div>

        <div class="col-md-4 mb-25">
            <label style="font-weight: bold">{{'- '. __('lang.price')}}</label>
            <input name="price[]" value="{{$allQuantityPrices[$key]['price']}}"
                   class="form-control form-control-lg"
                   type="number">
            @error('price[]')
            <small style="color: red">{{ $message }}.</small>
            @enderror
        </div>
        <div class="col-md-4 mb-25">
            <i style="margin-top: 40px" wire:click.prevent="provideNumberOfQuantityPrice"
               class="fas fa-plus-square la-2x"></i>
        </div>
    @endforeach
    @for($i = 1; $i < $numberOfQuantityPrice; $i++)
        <div class="col-md-4 mb-25">
            <label style="font-weight: bold">{{'- '. __('lang.quantity')}}</label>
            <input name="quantity[]" class="form-control form-control-lg"
                   type="number">
            @error('quantity[]')
            <small style="color: red">{{ $message }}.</small>
            @enderror
        </div>

        <div class="col-md-4 mb-25">
            <label style="font-weight: bold">{{'- '. __('lang.price')}}</label>
            <input name="price[]" class="form-control form-control-lg"
                   type="number">
            @error('price')
            <small style="color: red">{{ $message }}.</small>
            @enderror
        </div>
        <div class="col-md-4 mb-25">
            <i style="margin-top: 40px" wire:click.prevent="provideNumberOfQuantityPrice"
               class="fas fa-plus-square la-2x"></i>
        </div>
    @endfor
</div>


