<div class="section-full bg-gray subscribe-sc">
    <div class="container">
        <div class="row align-items-center subscribe-design">
            <div class="col-lg-7 col-md-7 d-none d-md-block">
                <img src="{{url('assets/images/stand1.png')}}" alt=""/>
            </div>
            <div class="col-lg-5 col-md-5">
                <form class="dzSubscribe dezPlaceAni" action="script/mailchamp.php" method="post">
                    <h2>Subscribe to My Blog</h2>
                    <div class="form-style subscribe">
                        <div class="input-group">
                            <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email">
                            <div class="input-group-append">
                                <button name="submit" value="Submit" type="submit" class="btn"><i class="la la-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="dzSubscribeMsg"></div>
                </form>
            </div>
        </div>
        <h2 class="subscribe-text">subscribe</h2>
    </div>
</div>
