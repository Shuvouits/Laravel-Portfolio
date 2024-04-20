@extends('Frontend.master')
@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>{{$product->name}}</h2>
                            <p>{{$product->title}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Project Screen View</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="position-relative h-100">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            @foreach($gallery as $data)

                            <div class="swiper-slide">
                                <img src="{{asset('upload/' .$data->avatar)}}" alt="">
                            </div>

                            @endforeach

                          

                           

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="text-center" style="margin-top : 25px">
                    <a href="/accounting.shuvobhowmik.xyz" class="btn btn-lg" style="background : #2d113b; color: white">Live Preview</a>

                </div>

               

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
