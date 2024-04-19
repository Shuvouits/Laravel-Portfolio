<!-- ======= Clients Section ======= -->
<section id="technology" class="clients">
    <div class="container" data-aos="zoom-out">

        <div class="section-header">
                <h2>Fluent Technology</h2>
                <p>Dedicated to delivering exceptional user experiences and ensuring accessibility across various platforms.</p>
            </div>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">

                @foreach($technology as $data)

                <div class="swiper-slide">
                       
                        {!! $data->icon !!}
                        
                       
                </div>

                @endforeach

              
              



            </div>
        </div>

    </div>
</section><!-- End Clients Section -->