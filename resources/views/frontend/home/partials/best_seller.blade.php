<!-- bestseller start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($products->where('stock', '<', 6) as $product)
                        <a href={{ route('product.show', $product->id) }}>
                            <div class="single_product_item">
                                <img src={{ asset("storage/img/products/$product->img_url") }} alt="">
                                <div class="single_product_text">
                                    <h4>{{ mb_strimwidth($product->name, 0, 22, '...') }} ({{ $product->stock }})</h4>
                                    <h3>${{ $product->price }}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bestseller end-->
