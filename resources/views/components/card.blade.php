@props(['type' => 'info', 'product'=>""])
<div class="card bg-gray-100 m-3 p-3 rounded-xl">
    <h1>name : {{$product->name}}</h1>
    <h1>price : {{$product->price}} $</h1>
    <h1>created_at : {{$product->created_at}}</h1>
    {{ $slot }}

</div>