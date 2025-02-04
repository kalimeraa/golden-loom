@extends('layout.main')

@section('title', 'Ana Sayfa')

@section('head-style')
    <link rel="stylesheet" href="{{ asset('css/postcard.css') }}">
@endsection

@section('content')

@include('layout.partials.carousel')

<section class="light mt-5">
	<div class="container py-2">
		<article class="postcard light blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://optim.tildacdn.com/tild3833-3935-4038-b736-343066356336/-/cover/432x228/center/center/-/format/webp/_2024-02-07_14104005.png" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="/curtains/sheer-only">Sheer only</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">
                    Sheer fabric curtains gently filter sunlight into your room, soft and inviting ambiance
                </div>
                <a href="#" class="postcard__cta">Read More</a>
			</div>
		</article>
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://optim.tildacdn.com/tild3634-6137-4539-b537-353937323264/-/cover/432x228/center/center/-/format/webp/_2024-02-07_14115207.png" alt="Image Title" />	
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title red"><a href="#">Blackout only</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">
                    Blackout curtains provide the ultimate light control, effectively blocking out sunlight
                </div>
                <a href="#" class="postcard__cta">Read More</a>
			</div>
		</article>
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

@include('layout.partials.booking')

@endsection

@section('footer-js')
@endsection
