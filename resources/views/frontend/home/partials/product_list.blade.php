<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>awesome</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single_product_list_slider">
                    <div class="row align-items-center justify-content-between">
                        @foreach ($products->sortBy('created_at')->slice(-8)->reverse() as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <a href={{ route('product.show', $product->id) }}>
                                        <img src={{ asset("storage/img/products/$product->img_url") }} alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{ mb_strimwidth($product->name, 0, 19, '...') }}</h4>
                                        <h3>${{ $product->price }}</h3>
                                        <form action={{ route('cart.store', $product->id) }} method="POST" id="CSF{{ $product->id }}">
                                            @csrf
                                            <a href="#{{ $product->id }}" onclick="submitForm({{ $product->id }})" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            {{-- <button type="submit">Add</button> --}}
                                        </form>
                                        <script>
                                            function submitForm(id) {
                                                document.getElementById(`CSF${id}`).submit();
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->
