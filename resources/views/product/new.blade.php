<x-layout>
    <x-slot:title>Add product</x-slot:title>
    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Name Product</label>
            <input class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price Product</label>
            <input type="number" min="0" step="0.01" class="form-control" id="price" name="price" value="">
        </div>

        <div class="mb-3">
            <label class="form-label" for="quantity">Quantity Product</label>
            <input type="number" min="0" step="1" class="form-control" id="quantity" name="quantity" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description Product</label>
            <input class="form-control" id="description" name="description" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="category_id">Category</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="m-3">
            <button class="btn btn-primary">Add update</button>
        </div>
    </form>
</x-layout>
