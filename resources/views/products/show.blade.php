<div  name="test" class=" w-full">
    <x-layout class=" m-20">
        {{-- pass params to the layout --}}
        <x-slot:title>
            @if ($title)
                {{$title}}
            @else
                No Title
            @endif
        </x-slot>
    
            <x-card :iname="$product->name" >
                
            </x-card>
            
    </x-layout>
    
    
</div>
