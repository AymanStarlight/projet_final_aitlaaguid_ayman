<div class="w-[75vw]">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @include('backend.product.components.product_row')
            @endforeach
        </tbody>
    </table>
</div>
