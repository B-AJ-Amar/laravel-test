@props(['type' => 'info', 'iname'=>"No Name"])
<div class="card">
    <h4>{{$iname}}</h4>
    {{ $slot }}
    <a href="">details</a>

</div>