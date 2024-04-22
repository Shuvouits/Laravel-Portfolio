<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
            <h2>Contact</h2>
        
            <p>
                "Got questions or inquiries? Reach out to us for personalized assistance and seamless support.
                We're here to help you navigate any challenges and provide tailored solutions."
            </p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Luxmibazar, Sutrapur, Dhaka, Bangladesh</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p class="shuvo-email">shuvobhowmik_cse11uits@yahoo.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+88 01751720590</p>
                        </div>
                    </div><!-- End Info Item -->


                </div>

            </div>

            <div class="col-lg-8">
                <form action="/contact" method="post" class="php-email-form">
                    {{ @csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section>
