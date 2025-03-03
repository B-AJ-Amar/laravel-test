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
    
            <x-card :product="$product" >
                <h1 class=" bold">Description :</h1>
                <p>
                    {{$product->description}}
                </p>
                
            </x-card>
            
    </x-layout>
    
    
</div>
