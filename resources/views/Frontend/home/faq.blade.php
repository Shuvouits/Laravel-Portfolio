<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3>Frequently Asked <strong>Questions</strong></h3>
            <p>
              "Explore answers to common questions about software development. From methodologies and collaboration to code quality and innovation, 
              discover how software developers contribute to company goals and drive success."
            </p>
          </div>
        </div>

        <div class="col-lg-8">

          <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
             
            @foreach($faq as $index => $data)
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{$index+1}}">
                  <span class="num">{{$index+1}}.</span>
                  {{$data->question}}
                </button>
              </h3>
              <div id="faq-content-{{$index+1}}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  {{$data->answer}}
                </div>
              </div>
            </div><!-- # Faq item-->

            @endforeach

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->