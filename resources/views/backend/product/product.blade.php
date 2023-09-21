<x-app-layout>
    <section class='d-flex flex-column justify-content-center align-items-center mt-4'>
        <div>
            @include('backend.product.components.create')
        </div>
        <div>
            @include('backend.product.components.products_table')
        </div>
    </section>
</x-app-layout>
