<div class="w-[75vw]">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Added By</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @include('backend.product.components.product_row')
            @endforeach
        </tbody>
    </table>
</div>
