<!-- featured start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Featured Category</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            @foreach ($products->sortBy('created_at')->slice(-4)->reverse() as $product)
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Latest from {{ $product->category->name }}</p>
                        <h3 style="width: 42%">{{ $product->name }}</h3>
                        <a href={{ route('product.show', $product->id) }} class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img width="300" height="400" src={{ asset("storage/img/products/$product->img_url") }} alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- featured end-->
