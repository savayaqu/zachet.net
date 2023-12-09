<x-layout>
    <x-slot:title>Добавление пользователя</x-slot:title>
    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="surname">Surname</label>
            <input class="form-control" id="surname" name="surname" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="patronymic">Patronymic</label>
            <input class="form-control" id="patronymic" name="patronymic" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="sex">Sex</label>
            <input type="number" min="0" step="1" max="1" class="form-control" id="sex" name="sex" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="birthday">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="login">Login</label>
            <input class="form-control" id="login" name="login" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="role_id">Role</label>
            <select class="form-select" id="role_id" name="role_id">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}"> {{ $role->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="m-3">
            <button class="btn btn-primary">Add update</button>
        </div>
    </form>
</x-layout>
