<!--================Category Product Area =================-->
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a class="{{ request()->is('shop') ? 'text-danger' : '' }}"
                                        href={{ route('shop.index') }}>All</a>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <a class="{{ str_contains(url()->current(), $category->id) ? 'text-danger' : '' }}"
                                            href={{ route('shop.index', ['sort' => 'none', 'category' => $category->id]) }}>{{ $category->name }}</a>
                                        <span>({{ count($category->products) }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span>{{ count($products) }} </span> Product Found</p>
                            </div>
                            <div style="gap: 5px" class="single_product_menu d-flex justify-content-between align-items-center">
                                <h5>Sort by : </h5>
                                @if ((url()->current() == 'http://localhost:8000/shop') || (url()->current() == 'http://localhost:8000/shop/name') || (url()->current() == 'http://localhost:8000/shop/price') || (url()->current() == 'http://localhost:8000/shop/created_at'))   
                                <a class="{{ str_contains(url()->current(), 'name') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'name']) }}>name</a>
                                <a class="{{ str_contains(url()->current(), 'price') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'price']) }}>price</a>
                                <a class="{{ str_contains(url()->current(), 'created_at') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'created_at']) }}>product</a>
                                @else
                                <a class="{{ str_contains(url()->current(), 'name') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'name', 'category' => substr(url()->current(), -1)]) }}>name</a>
                                <a class="{{ str_contains(url()->current(), 'price') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'price', 'category' => substr(url()->current(), -1)]) }}>price</a>
                                <a class="{{ str_contains(url()->current(), 'created_at') ? 'text-danger' : 'text-secondary' }}" href={{ route('shop.index', ['sort' => 'created_at', 'category' => substr(url()->current(), -1)]) }}>product</a>
                                @endif
                            </div>
                            {{-- <div class="single_product_menu d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search"
                                        aria-describedby="inputGroupPrepend">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="row align-items-center latest_product_inner">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src={{ asset("storage/img/products/$product->img_url") }} alt="">
                                <div class="single_product_text">
                                    <h4 style="white-space: nowrap">{{ mb_strimwidth($product->name, 0, 20, '...') }}
                                    </h4>
                                    <h3>${{ $product->price }}</h3>
                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->