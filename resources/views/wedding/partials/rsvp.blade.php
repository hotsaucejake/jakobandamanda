<section class="rsvp-section section-padding parallax" data-bg-image="/wedding/images/engagement/023.jpg" data-speed="7" id="rsvp">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-white">
                    <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                    <h2>Join Us</h2>
                </div>
            </div>
        </div> <!-- end section-title -->

        <div class="row content">
            <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Please reserve before February 16th, 2019.</p>
                <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                    <div class="col col-sm-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Your Email*">
                    </div>
                    <div class="col col-sm-6">
                        <select class="form-control" name="guest" >
                            <option disabled selected>Number Of Guest*</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col col-sm-6">
                        <select class="form-control" name="events" >
                            <option disabled selected>I Am Attending*</option>
                            <option>Al events</option>
                            <option>Wedding ceremony</option>
                            <option>Reception party</option>
                        </select>
                    </div>
                    <div class="col col-sm-12">
                        <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                    </div>
                    <div class="col col-sm-12 submit-btn">
                        <button type="submit" class="submit">Send Invitation</button>
                        <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span>
                    </div>
                    <div class="col col-md-12 success-error-message">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>