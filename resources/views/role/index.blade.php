<x-layout>
    <x-slot:title>List Role</x-slot:title>
    <h2 class="m-4">List role:  </h2>
    <a class="btn btn-dark m-4" href="/roles/new">Add role</a>
    <table class="table m-4">
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Code</th>
        </tr>
        @foreach($roles as $role)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->code}}</td>
                <td>
                    <a class="btn btn-success" href="/roles/{{$role->id}}">Show</a>
                    <a class="btn btn-primary" href="/roles/{{$role->id}}/update">Update</a>
                    <a class="btn btn-danger" href="/roles/{{$role->id}}/delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
