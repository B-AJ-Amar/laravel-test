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
            <x-card :product="$product" >

                <div class=" my-3">
                    <a class=" p-1 rounded-xl text-amber-50 bg-blue-500" href="{{route('products.show', $product->id)}}">details</a>
                    <a class=" p-1 rounded-xl text-amber-50 bg-yellow-500" href="{{route('products.edit', $product->id)}}">update</a>
                    <form class=" inline" method="POST" action="{{route('products.destroy', $product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class=" p-1 rounded-xl text-amber-50 bg-red-500" type="submit">delete</button>
                    </form>
                </div>
            </x-card>
            @endforeach
            {{$products->links()}}
            
        </ul>
    </x-layout>
    
    
</div>
