@extends('layout.main')

@section('title', __('general.home'))

@section('head-style')
    <link rel="stylesheet" href="{{ asset('css/postcard.css') }}">

    <style>
            
      .explain {
          width: 100%;
      }

      .explain-content {
          max-width: 800px;
          margin: 20px auto;
          font-family: 'Ubuntu', Arial, sans-serif;
          font-weight: 300;
          font-size: 20px;
          color: #000000;
      }
    </style>
@endsection

@section('content')

@include('layout.partials.carousel')

<div class="container explain" style="margin-top:20px !important; border-radius: 100px;">
        <div class="row">
            <div class="col-md-12 explain-content">
                <h3 class="text-center">
                  {{ __('general.which_curtains_fabric_to_choose') }}
                </h3>
                <h5 class="text-center">
                  {{ __('general.choosing_perfect_curtains') }}
                </h5>
                <p>
                  {{ __('general.choosing_perfect_curtains_text') }}
                </p>
            </div>
         
        </div>
</div>

<section class="light mt-5">
	<div class="container py-2">
		@foreach($curtains as $curtain)
      <article class="postcard light red">
        <a class="postcard__img_link" href="/curtains/{{ $curtain->slug}}">
          <img class="postcard__img" src="{{ asset($curtain->image) }}" alt="Image Title" />	
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title red">
          <a href="/curtains/{{ $curtain->slug }}">{{ $curtain->getTranslation('title', app()->getLocale()) }}</a>
          </h1>
        <div class="postcard__bar"></div>
          <div class="postcard__preview-txt" style="color: #000 !important;">
                {{ $curtain->getTranslation('short_description',app()->getLocale()) }}
          </div>
          <a href="/curtains/{{ $curtain->slug}}" class="postcard__cta" style="color: #000 !important;">{{ __('general.read_more') }}</a>
        </div>
      </article>
    @endforeach
	</div>
</section>

<section>
<div class="pricing7 py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h3 class="mb-3">{{ __('general.how_it_works') }}</h3>
        <h6 class="subtitle font-weight-normal">{{ __('general.how_it_works_text') }}</h6>
      </div>
    </div>
    <!-- row  -->
    <div class="row mt-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-emotsmile display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">{{ __('general.book_a_free_visit_us') }}</h5>
              <p class="mt-3">
              {{ __('general.book_a_free_visit_us_text') }}
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-mouse display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">{{ __('general.consulting_and_measurement') }}</h5>
              <p class="mt-3">
                {{ __('general.consulting_and_measurement_text') }}
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-support display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">{{ __('general.best_solution_to_match_your_interior') }}</h5>
              <p class="mt-3">{{ __('general.best_solution_to_match_your_interior_text') }}</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-hourglass display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">{{ __('general.delivery_and_installation') }}</h5>
              <p class="mt-3">
              {{ __('general.delivery_and_installation_text') }}
              </p>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
</section>

<section>
  <div class="row d-flex justify-content-center mb-5">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">{{ __('general.what_our_customers_say') }}</h3>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Linda Refai</h5>
      <h6 class="text-primary mb-3">{{ __('general.customer') }}</h6>
      <p class="px-xl-3">
        {{ __('general.customer_1_comment') }}
      </p>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Lisa Cudrow</h5>
      <h6 class="text-primary mb-3">{{ __('general.customer') }}</h6>
      <p class="px-xl-3">
      {{ __('general.customer_2_comment') }}
      </p>
     
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">John Smith</h5>
      <h6 class="text-primary mb-3">{{ __('general.customer') }}</h6>
      <p class="px-xl-3">
        {{ __('general.customer_2_comment') }}
      </p>
    </div>
  </div>
</section>

<!---FAQs
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4 text-center">FAQs about blackout curtains</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                        How are your blackout curtains the best in Dubai?
                            </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Our blackout curtains are crafted by professionals to provide maximum light blocking, using high-quality materials for a perfect fit and long-lasting durability.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        Do you offer a free consultation about blackout curtains?
                            </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Yes, we do. Just fill out the form, and we’ll arrange a visit at your convenience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        What goes into the final price of blackout curtains?
                            </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        The price includes fabric selection, tailoring, delivery, installation, and necessary hardware for a hassle-free experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        What types of stains can you remove?
                            </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        We generally can remove a wide range of stains including wine, dirt, dust, cat and dog urine stains. The material and condition of the carpet can be a limiting factor, determining what kind of chemicals are safe to use in each case.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        Where can I find blackout curtains in Dubai?
                            </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        We provide a one-stop solution for finding premium blackout curtains across Dubai.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            Can blackout curtains really help with noise reduction?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Yes, our blackout curtains not only block light but also reduce noise, creating a quieter indoor environment.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        Are you selling blackout curtains with any promo?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        We regularly run special promotions on blackout curtains. For the latest deals, contact us or visit our website.
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

-->

@include('layout.partials.booking')

@endsection

@section('footer-js')
       
@endsection
