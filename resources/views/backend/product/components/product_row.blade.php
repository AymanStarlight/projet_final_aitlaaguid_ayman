<tr class="fs-5">
    <td class="d-flex justify-content-between">
        {{ $product->name }}
        <div class="d-flex justify-between items-center">
            @include('backend.product.components.show')
            @include('backend.product.components.edit')
            <form action={{ route('product.delete', $product->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link"><i class="fa-solid fa-circle-xmark fa-lg" style="color: #ff0000;"></i></button>
            </form>
        </div>

    </td>
</tr>