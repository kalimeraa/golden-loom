@extends('layout.main')

@section('title', 'Ana Sayfa')

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
                  Wich Curtain Fabric to Choose ?  
                </h3>
                <h5 class="text-center">
                  Choosing the perfect curtain fabric for your home 
                </h5>
                <p>
                Curtains are more important than just window covering ; they add character , warmth and style to any room. Selecting the right fabric is crucal to acheving the desired look and funcionality. Here are some tips to help you choose the perfect curtain fabric for your home.
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
          <h1 class="postcard__title red"><a href="/curtains/{{ $curtain->slug}}">{{ $curtain->title }}</a></h1>
          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt" style="color: #000 !important;">
                {{ $curtain->short_description }}
          </div>
          <a href="/curtains/{{ $curtain->slug}}" class="postcard__cta" style="color: #000 !important;">Read More</a>
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
        <h3 class="mb-3">How it works</h3>
        <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
      </div>
    </div>
    <!-- row  -->
    <div class="row mt-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-emotsmile display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">Book a free visit with us</h5>
              <p class="mt-3">
                Our managers will set a convenient day and time for a FREE consultation with our curtain expert and provide the exact estimate for the curtain tailoring service
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-mouse display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">Cunsultation and mesurement</h5>
              <p class="mt-3">
                Our expert will come to your place at an estimated time to make measurements, provide fabric samples to choose from
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-support display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">The best solution to match your interior</h5>
              <p class="mt-3">With premium-quality cotton and linen options and a soothing color palette, we'll guide you in selecting the ideal fabric, color, and pleat style to elevate your living space.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 mb-4">
              <i class="icon-hourglass display-6 text-info"></i>
              <h5 class="font-weight-medium mt-3">Delivery and Installation</h5>
              <p class="mt-3">Receive perfectly tailored curtains in just 4-5 days. Our team will install it. Curtain rod and installation are FREE.
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
      <h3 class="mb-4">What Our Customers Say About Us</h3>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Linda Refai</h5>
      <h6 class="text-primary mb-3">Customer</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Great experience, perfectly priced, and amazing value for money. This is our second time to use them and I will use them again for my future curtain requirements.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Lisa Cudrow</h5>
      <h6 class="text-primary mb-3">Customer</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>The team provided such personalized service, making them easily accessible for any inquiries and always punctual. Highly recommended
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">John Smith</h5>
      <h6 class="text-primary mb-3">Customer</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>The professionalism of the staff at the curtains factory truly impressed me. Their guidance in selecting the perfect sheers curtains Dubai for my home was exceptional. I couldn't be more delighted with the outcome!
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
      </ul>
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
