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

                <h1 class=" bold">Categories :</h1>
                @foreach ($product->categories as $category)
                    <button class=" bg-white p-1 rounded-xl">
                        {{$category->name}}
                    </button>
                @endforeach
                
            </x-card>
            
    </x-layout>
    
    
</div>
