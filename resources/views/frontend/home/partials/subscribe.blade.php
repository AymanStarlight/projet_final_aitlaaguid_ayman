<!-- subscribe part start-->
<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <form action={{ route('newsletter.store') }} method="POST" id="newsletterform2">
                        <div class="input-group">
                            @csrf
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
                            <div class="input-group-append">
                                <a href="#" onclick="submitForm2()" class="input-group-text btn_2"
                                    id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe part end::-->

<script>
    function submitForm2() {
        document.getElementById(`newsletterform2`).submit();
    }
</script>
