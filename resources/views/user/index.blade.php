<x-layout>
    <x-slot:title>List user</x-slot:title>
    <h2 class="m-4">List user:  </h2>
    <a class="btn btn-dark m-4" href="/users/new">Add user</a>
    <table class="table m-4">
        <tr>
            <th>Number</th>
            <th>Surname</th>
            <th>Name</th>
            <th>Patronymic</th>
            <th>Sex</th>
            <th>Birthday</th>
            <th>Login</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->patronymic}}</td>
                <td>{{$user->sex}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->login}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id}}</td>

                <td>
                    <a class="btn btn-success" href="/users/{{$user->id}}">Show</a>
                    <a class="btn btn-primary" href="/users/{{$user->id}}/update">Update</a>
                    <a class="btn btn-danger" href="/users/{{$user->id}}/delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
