<x-layout>
    <x-slot:title>List category</x-slot:title>
    <h2 class="m-4">List category:  </h2>
    <a class="btn btn-dark m-4" href="/categories/new">Add category</a>
    <table class="table m-4">
        <tr>
            <th>Number</th>
            <th>Name category</th>
            <th>Operations</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a class="btn btn-success" href="/categories/{{$category->id}}">Show</a>
                    <a class="btn btn-primary" href="/categories/{{$category->id}}/update">Update</a>
                    <a class="btn btn-danger" href="/categories/{{$category->id}}/delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
