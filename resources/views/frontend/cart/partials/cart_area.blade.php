<!--================Cart Area =================-->
<section class="cart_area padding_top">
    <div class="container">
        <div class="cart_inner">
            @if (count($products) > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                @php
                                                    $img_url = $product->product->img_url;
                                                @endphp
                                                <img width="140" src="{{ asset("storage/img/products/$img_url") }}"
                                                    alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>{{ $product->product->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>${{ $product->product->price }}</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <form action={{ route('cart.decrement', $product->product->id) }}"
                                                method="POST">
                                                <span class="input-number-decrement">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="reset-button">
                                                        <i class="ti-angle-down"></i>
                                                    </button>
                                                </span>
                                            </form>
                                            <input class="input-number" type="text" value="{{ $product->stock }}"
                                                min="0" max="{{ $product->product->stock }}"
                                                onKeyDown="return false">

                                            <form action={{ route('cart.increment', $product->product->id) }}"
                                                method="POST">
                                                <span class="input-number-increment">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="reset-button">
                                                        <i class="ti-angle-up"></i>
                                                    </button>
                                                </span>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>${{ intval($product->stock) * intval($product->product->price) }}</h5>
                                            <form action={{ route('cart.delete', $product->product->id) }} method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="reset-button"><i class="fa-solid fa-circle-xmark fa-lg" style="color: #ee0202;"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                  <h5>Subtotal</h5>
                                </td>
                                <td>
                                    @php
                                        $subtotal = 0;
                                        foreach ($products as $product) {
                                            $subtotal += intval($product->stock) * intval($product->product->price);
                                        }
                                    @endphp
                                  <h5>${{ $subtotal }}</h5>
                                </td>
                              </tr>
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="#">Continue Shopping</a>
                        <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                    </div>
                </div>
            @else
                <div class="d-flex justify-content-center">
                    <h1>Your Cart is Empty <i class="fa-solid fa-cloud fa-xl"></i></h1>
                </div>
            @endif
        </div>
</section>
<!--================End Cart Area =================-->

<style>
    .reset-button {
        background-color: transparent;
        border-width: 0;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        line-height: inherit;
        padding: 0;
    }
</style>
