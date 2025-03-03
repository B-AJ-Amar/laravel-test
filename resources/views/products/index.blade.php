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
    
        <ul>
            @foreach ($products as $product)
            <x-card :iname="$product['name']" >

                <a class=" bold  text-blue-800" href="{{route('products.show', $product->id)}}">details</a>
     
            </x-card>
            @endforeach
            
        </ul>
    </x-layout>
    
    
</div>
