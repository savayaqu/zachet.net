<x-layout>
    <x-slot:title>Information product</x-slot:title>

    <div class="m-4">
        <p>ID product: {{$product->id}}</p>
        <p>Name product: {{$product->name}}</p>
        <p>Price product: {{$product->price}}</p>
        <p>Quantity product: {{$product->quantity}}</p>
        <p>Description product: {{$product->description}}</p>
    </div>

</x-layout>
