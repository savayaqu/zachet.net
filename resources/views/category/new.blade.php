<x-layout>
    <x-slot:title>Add category</x-slot:title>
    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Name Category</label>
            <input class="form-control" id="name" name="name" value="">
        </div>
        <div class="m-3">
            <button class="btn btn-primary">Add update</button>
        </div>
    </form>
</x-layout>
