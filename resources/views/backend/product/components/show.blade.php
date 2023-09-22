<div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#showModal{{ $product->id }}">
            <i class="fa-solid fa-bullseye fa-lg" style="color: #00becc;"></i>
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showModal{{ $product->id }}" tabindex="-1"
        aria-labelledby="showModal{{ $product->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="showModal{{ $product->id }}Label">{{ $product->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">

                    <img src={{ asset("storage/img/products/$product->img_url") }} width='200' alt="product Image">
                    <p>Category: {{ $product->category->name }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    <p>Stock: {{ $product->stock }}</p>
                    <p>{{ $product->description }}</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>
</div>
