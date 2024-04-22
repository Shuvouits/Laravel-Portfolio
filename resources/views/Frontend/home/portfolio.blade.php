<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Portfolio</h2>
            <p>
                Experience my commitment to excellence and innovation firsthand. Witness how I transform concepts into
                tangible solutions through code.

            </p>

        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    @foreach ($stack as $data)
                        <li data-filter=".filter-{{ $data->id }}">{{ $data->name }}</li>
                    @endforeach



                </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-4 portfolio-container">

                @foreach ($product as $data)
                    <div class="col-xl-4 col-md-6 portfolio-item filter-{{$data->stack_id}}">
                        <div class="portfolio-wrap">

                            
                         
                            <a href="{{ asset('upload/' .$data->avatar) }}"
                                data-gallery="portfolio-gallery-app-{{$data->stack_id}}" class="glightbox">
                                <img src="{{ 'upload/' .$data->avatar }}" class="img-fluid"
                                    alt=""  style="height: 300px">
                            </a>

                            <div class="portfolio-info">
                                <h4><a href="{{$data->link}}" target="_blank" title="More Details">{{$data->name}}</a></h4>
                                <p style="text-transform: capitalize">{{$data->title}}</p>
                            </div>

                           
                            
                           
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach



            </div><!-- End Portfolio Container -->

        </div>

    </div>
</section><!-- End Portfolio Section -->
