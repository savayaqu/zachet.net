<x-layout>
    <x-slot:title>List products</x-slot:title>
    <h2 class="m-4">List products:  </h2>
    <a class="btn btn-dark m-4" href="/products/new">Add product</a>
    <table class="table m-4">
        <tr>
            <th>Number</th>
            <th>Name product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a class="btn btn-success" href="/products/{{$product->id}}">Show</a>
                    <a class="btn btn-primary" href="/products/{{$product->id}}/update">Update</a>
                    <a class="btn btn-danger" href="/products/{{$product->id}}/delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
