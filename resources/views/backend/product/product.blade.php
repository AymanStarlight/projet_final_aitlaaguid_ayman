<x-app-layout>
    <section class='d-flex flex-column justify-content-center align-items-center mt-4'>
        <div>
            @include('backend.product.components.create')
        </div>
        <div>
            @if (count($products) == 0)
                <h2>There is no Products</h2>
            @else
                @include('backend.product.components.products_table')
            @endif
        </div>

    </section>
</x-app-layout>
