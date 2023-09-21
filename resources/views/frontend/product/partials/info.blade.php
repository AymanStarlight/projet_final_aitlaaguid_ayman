<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb={{ asset("storage/img/products/$product->img_url") }}>
                <img src={{ asset("storage/img/products/$product->img_url") }} />
              </div>
              <div data-thumb={{ asset("storage/img/products/$product->img_url") }}>
                <img src={{ asset("storage/img/products/$product->img_url") }} />
              </div>
              <div data-thumb={{ asset("storage/img/products/$product->img_url") }}>
                <img src={{ asset("storage/img/products/$product->img_url") }} />
              </div>
              <div data-thumb={{ asset("storage/img/products/$product->img_url") }}>
                <img src={{ asset("storage/img/products/$product->img_url") }} />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h3>{{ $product->name }}</h3>
            <h2>${{ $product->price }}</h2>
            <ul class="list">
              <li>
                <a class="active" href="">
                  <span>Category</span> : {{ $product->category->name }}</a>
              </li>
              <li>
                <a href=""> <span>Availibility</span> : In Stock({{ $product->stock }})</a>
              </li>
            </ul>
            <p>
              {{ $product->description }}
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="#" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->