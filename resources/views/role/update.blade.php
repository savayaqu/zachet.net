<x-layout>
    <x-slot:title>Edit role</x-slot:title>
    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Name Role</label>
            <input class="form-control" id="name" name="name" value="{{$role->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="code">Code Role</label>
            <input class="form-control" id="code" name="code" value="{{$role->code}}">
        </div>
        <div class="m-3">
            <button class="btn btn-primary">Data update</button>
        </div>
    </form>
</x-layout>
