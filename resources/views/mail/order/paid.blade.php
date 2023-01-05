<x-mail::message>
# Factura pagada

Gracias por la compra 
Aquí está su recíbo

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($order->items as $item)
        <tr>
            <td scope="row">{{$items as $item}}</td>
            <td>{{$item->pivot->quantity}}</td>
            <td>{{$item->pivot->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total : $ {{$order->total}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
