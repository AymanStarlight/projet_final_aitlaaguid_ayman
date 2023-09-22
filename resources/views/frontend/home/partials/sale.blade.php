<!-- sale start-->
<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                @php
                    
                    $product = $products->first();
                    
                @endphp
                <div class="offer_img">
                    <img src={{ asset("storage/img/products/$product->img_url") }} alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>
                    <form action={{ route('newsletter.store') }} method="POST" id="newsletterform">
                        <div class="input-group">
                            @csrf
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
                            <div class="input-group-append">
                                <a href="#" onclick="submitForm()" class="input-group-text btn_2"
                                    id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sale end-->

<script>
    function submitForm() {
        document.getElementById(`newsletterform`).submit();
    }
</script>
