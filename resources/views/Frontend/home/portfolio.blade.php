<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Portfolio</h2>
            <p>
                Experience my commitment to excellence and innovation firsthand. Witness how I transform concepts into tangible solutions through code.
                
            </p>
           
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    @foreach($stack as $data)
                    <li data-filter=".filter-{{$data->name}}">{{$data->name}}</li>
                    @endforeach
                    
                    
                    
                </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-4 portfolio-container">

               
                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="{{asset('Frontend/assets/img/portfolio/product-1.jpg')}}" data-gallery="portfolio-gallery-app-product"
                            class="glightbox">
                            <img src="{{'Frontend/assets/img/portfolio/product-1.jpg'}}" class="img-fluid"
                                alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                

            </div><!-- End Portfolio Container -->

        </div>

    </div>
</section><!-- End Portfolio Section -->
