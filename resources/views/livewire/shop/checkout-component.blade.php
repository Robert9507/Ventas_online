<div>
    <div class="container">

        <div class="form-group">
            <label for="">Nombre completo</label>
            <input type="text" wire:model="fullname" class="form-control @error('fullname') is-invalid @enderror">
            @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="">Región</label>
            <input type="text" wire:model="state" class="form-control @error('state') is-invalid @enderror">
            @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div> 

        <div class="form-group">
            <label for="">Cuidad</label>
            <input type="text" wire:model="city" class="form-control @error('city') is-invalid @enderror">
            @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div> 

        <div class="form-group">
            <label for="">Zip</label>
            <input type="text" wire:model="zipcode" class="form-control @error('zipcode') is-invalid @enderror">
            @error('zipcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div> 

        <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" wire:model="address" class="form-control @error('address') is-invalid @enderror">
            @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div> 

        <div class="form-group">
            <label for="">Telefono</label>
            <input type="text" wire:model="phone" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div> 

        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" name="exampleRadios" id="exampleRadios1" value="cash_on_delivery" checked>
            <label class="form-check-label" for="exampleRadios1">
                cash_on_delivery
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" name="exampleRadios" id="exampleRadios2" value="paypal">
            <label class="form-check-label" for="exampleRadios2">
                paypal
            </label>
        </div>

        <!-- '','','stripe','card' -->

        <button type="button" wire:click="make_order()" class="btn btn-primary">Realizar pedido</button>

    </div>
</div>
