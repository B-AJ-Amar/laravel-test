@props(['type' => 'info', 'iname'=>"No Name",'ref'=>"#"])
<div class="card border-1 bg-gray-100 m-3 p-3 rounded-xl">
    <h1>name : {{$iname}}</h1>
    {{ $slot }}

</div>