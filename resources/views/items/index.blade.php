
<x-layout>
    {{-- pass params to the layout --}}
    <x-slot:title>
        @if ($title)
            {{$title}}
        @else
            No Title
        @endif
    </x-slot>

    <ul>
        @foreach ($items as $item)
        <x-card :iname="$item['name']">
            
        </x-card>
        <li> <a href="/items/{{$item['id']}}">{{$item['name']}}</a></li>
        @endforeach
        
    </ul>
</x-layout>
