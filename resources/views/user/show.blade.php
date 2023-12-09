<x-layout>
    <x-slot:title>Information user</x-slot:title>

    <div class="m-4">
        <p>ID user: {{$user->id}}</p>
        <p>Surname user: {{$user->surname}}</p>
        <p>Name user: {{$user->name}}</p>
        <p>Patronymic user: {{$user->patronymic}}</p>
        <p>Sex user: {{$user->sex}}</p>
        <p>Birthday user: {{$user->birthday}}</p>
        <p>Login user: {{$user->login}}</p>
        <p>Password user: {{$user->password}}</p>
        <p>Email user: {{$user->email}}</p>
        <p>Role user: {{$user->role}}</p>
    </div>

</x-layout>
