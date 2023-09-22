<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Specification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Comments</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    Beryl Cook is one of Britain’s most talented and amusing artists
                    .Beryl’s pictures feature women of all shapes and sizes enjoying
                    themselves .Born between the two world wars, Beryl Cook eventually
                    left Kendrick School in Reading at the age of 15, where she went
                    to secretarial school and then into an insurance office. After
                    moving to London and then Hampton, she eventually married her next
                    door neighbour from Reading, John Cook. He was an officer in the
                    Merchant Navy and after he left the sea in 1956, they bought a pub
                    for a year before John took a job in Southern Rhodesia with a
                    motor company. Beryl bought their young son a box of watercolours,
                    and when showing him how to use it, she decided that she herself
                    quite enjoyed painting. John subsequently bought her a child’s
                    painting set for her birthday and it was with this that she
                    produced her first significant work, a half-length portrait of a
                    dark-skinned lady with a vacant expression and large drooping
                    breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
                </p>
                <p>
                    It is often frustrating to attempt to plan meals that are designed
                    for one. Despite this fact, we are seeing more and more recipe
                    books and Internet websites that are dedicated to the act of
                    cooking for one. Divorce and the death of spouses or grown
                    children leaving for college are all reasons that someone
                    accustomed to cooking for more than one would suddenly need to
                    learn how to adjust all the cooking practices utilized before into
                    a streamlined plan of cooking that is more efficient for one
                    person creating less
                </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Width</h5>
                                </td>
                                <td>
                                    <h5>128mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Height</h5>
                                </td>
                                <td>
                                    <h5>508mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Depth</h5>
                                </td>
                                <td>
                                    <h5>85mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Weight</h5>
                                </td>
                                <td>
                                    <h5>52gm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Quality checking</h5>
                                </td>
                                <td>
                                    <h5>yes</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Freshness Duration</h5>
                                </td>
                                <td>
                                    <h5>03days</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>When packeting</h5>
                                </td>
                                <td>
                                    <h5>Without touch of hand</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Each Box contains</h5>
                                </td>
                                <td>
                                    <h5>60pcs</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-6">
                    @if (count($product->comments) == 0)
                        <h4>There is no Comments for this product</h4>
                    @else
                        
                    @endif
                    @foreach ($product->comments as $comment)
                        <div class="comment_list">
                            <div class="review_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src={{ asset('storage/img/product/single-product/review-1.png') }}
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4>{{ $comment->user->name }}</h4>
                                        <h5>{{ $comment->created_at->format('jS M, Y \a\t h:i A') }}</h5>
                                    </div>
                                </div>
                                <p>
                                    {{ $comment->content }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        @auth
                            <div class="review_box">
                                <h4>Post a comment</h4>
                                <form action={{ route('comment.store', $product->id) }} method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" id="content" rows="10" cols="10" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn_3">
                                            Submit Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->
