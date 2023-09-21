<!-- Button trigger modal -->
<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}Modal">
        <i class="fa-brands fa-stumbleupon-circle fa-lg" style="color: #858585;"></i>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="edit{{ $product->id }}Modal" tabindex="-1"
    aria-labelledby="edit{{ $product->id }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit{{ $product->id }}ModalLabel">Edit a Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action={{ route('product.edit', $product->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required
                            value="{{ old('name', $product->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" min="1" required
                            value="{{ old('price', $product->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stock" min="1" required
                            value="{{ old('stock', $product->stock) }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category" required>
                            @foreach ($categories as $category)
                                @if ($product->category->id == $category->id)
                                    <option selected value={{ $category->id }}>{{ $category->name }}</option>
                                @else
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="img_file" class="form-label">Image File</label>
                        <input type="file" class="form-control" name="img_file">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" rows="3" maxlength="255" required>{{ old('description', $product->description) }}</textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>
