@php
    function splitStringAfterChars($string, $numChars) {
    if (strlen($string) <= $numChars) {
        return $string;  // Return the original string if it's shorter than numChars
    }

    $firstLine = substr($string, 0, $numChars);
    $secondLine = substr($string, $numChars);

    return $firstLine . "\n" . $secondLine;
}
@endphp

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    @foreach ($products->random(3) as $product)
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>{{ splitStringAfterChars(mb_strimwidth($product->name, 0, 18, '...'), 5) }}</h1>
                                            <p>{{ $product->description }}</p>
                                            <a href={{ route('product.show', $product->id) }} class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src={{ asset("storage/img/banner_img.png") }} alt="">
                                    {{-- <img src={{ asset("storage/img/products/$product->img_url") }} alt=""> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>
<!-- banner part end-->
