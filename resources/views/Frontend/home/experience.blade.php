<!-- ======= Our Services Section ======= -->
<section id="experience" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Work Experience</h2>
            <p>Dedicated to delivering exceptional user experiences and ensuring accessibility across various platforms.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

            @foreach($experience_data as $item)

            <div class="col-lg-4 col-md-6">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h3>
                        {{$item->company_name}}
                        <br>
                        <span>{{$item->designation}}</span>

                        @php
                        // Assuming $item->date is in the format "2024-04-16 to 2024-04-25"
                        $dateRange = explode(' to ', $item->date);
                        $start = \Carbon\Carbon::parse($dateRange[0])->format('Y-M');
                        $end = \Carbon\Carbon::parse($dateRange[1])->format('Y-M');
                    @endphp

                        <span style="font-size : 15px">({{ $start }} To {{ $end }})</span>
                    </h3>
                   

                        <p style="font-size : 22px; font-weight : bold">Task Responsibility:</p>
                        <br>
                        <div>

                            <p>
                                {!! $item->responsiblity !!}
                            </p>
                            <br>
                            
                            

                        </div>
                       
                    
                </div>
            </div><!-- End Service Item -->

            @endforeach

          

        </div>

    </div>
</section><!-- End Our Services Section -->
