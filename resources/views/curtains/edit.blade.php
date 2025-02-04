@extends('layout.main')

@section('title', 'Ana Sayfa')

@section('head-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">

    <style>
        .swiper-container {
            width: 100%;
            max-width: 500px;
        }
        .swiper-slide img {
            width: 100%;
            border-radius: 10px;
        }
        .thumbnail-slider {
            margin-top: 10px;
        }
        .thumbnail-slider .swiper-slide {
            width: 100px !important;  /* Thumbnail kutusunu 50px genişlik yap */
            height: 100px !important; /* Thumbnail kutusunu 50px yükseklik yap */
            display: flex; /* İçindeki resmi ortalamak için */
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Taşan kısımları gizle */
            border-radius: 5px; /* Köşeleri hafif yuvarlak yap */
        }

        .thumbnail-slider .swiper-slide img {
            width: 100%;  /* Kutunun tamamını kaplasın */
            height: 100%; /* Kutunun tamamını kaplasın */
            object-fit: cover; /* Resmi kırparak sığdır */
            border-radius: 5px;
        }
        .thumbnail-slider .swiper-slide-thumb-active {
            opacity: 1;
            border: 2px solid #007bff;
        } 

        .swiper-button-next,
        .swiper-button-prev {
            color: black !important;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: black !important;
            opacity: 0.8; /* İsteğe bağlı: Biraz transparanlık ekler */
        }


    </style>
@endsection

@section('content')


<div class="container mt-4 slider-container">
    <div class="row">
        
        <!-- sol Taraf Swiper Carousel -->
        <div class="col-md-6">
            <!-- Büyük Görseller -->
            <div class="swiper swiper-main">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/slider1.jpg') }}" alt="Slide 1"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider2.jpg') }}" alt="Slide 2"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider3.jpg') }}" alt="Slide 3"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider4.jpg') }}" alt="Slide 3"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider5.jpg') }}" alt="Slide 3"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Thumbnail Slider -->
            <div class="swiper thumbnail-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/slider1.jpg') }}" alt="Thumb 1"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider2.jpg') }}" alt="Thumb 2"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider3.jpg') }}" alt="Thumb 3"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider4.jpg') }}" alt="Thumb 3"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/slider5.jpg') }}" alt="Thumb 3"></div>
                </div>
            </div>
        </div>

        <!-- sağ Taraf Sabit İçerik -->
        <div class="col-md-4">
            <h2 style="color:#000">
              Diverse Styles and Custom Options in Our Product Range
            </h2>
            <p style="color:#000">
              Look through our curtains catalog, in which you can find many styles, colors, and fabrics. From modern, minimalist options to luxurious, opulent finishes, our collection is available for residential and commercial design needs alike.
            </p>
            <ul >
              <li style="color:#000">
                Sheers and Blackout Curtains: They optimize natural light while ensuring privacy. Our combination sets will make the transition from bright to shaded environments easy.
              </li style="color:#000">
              <li style="color:#000">
              Custom Curtain Works: Whatever your aesthetic and functional needs are, whether you need a grand living room or smaller drapes for your office, we have the right curtains for your needs.
              </li>
              <li style="color:#000">
              Curtains Without Holes: Our curtains are designed with a smooth, uninterrupted surface, creating a seamless look for your interiors
              </li>
            </ul>
        </div>
    </div>
</div>


<div class="container explain" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mt-5 explain-title">
                    Why Choose Curtains Factory for Blackout Curtains? <br>
                    Quality, Service, and Style
                </h3>
            </div>

            <div class="col-md-12 explain-content">
                <p>
                Our blackout curtains are a popular choice for hotels, homes, and offices in Dubai, as they combine functionality with aesthetic appeal. We offer an all-inclusive service from start to finish.
                </p>
            </div>

            <div class="col-md-12">
                    <ul class="list-style-none explain-items">
                        <li class="d-flex no-block card-body p-2">
                            <i class="fa fa-check-circle w-30px m-t-5"></i>
                            <div>
                                <h6 class="m-b-0 font-medium p-0" data-abc="true">
                                    Expert Guidance
                                </h6>
                                <span class="text-muted">
                                    With our experienced consultants, we help you choose what fabric, design and style goes best with your vision.
                                </span>
                        </div>
                        </li>
                                            <li class="d-flex no-block card-body border-top p-2">
                                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                                <div>
                                                    <h6 href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                                        All-Inclusive Service
                                                    </h6>
                                                    <span class="text-muted">
                                                        Our service encompasses from fabric selection to delivery, stitching, and final installation.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="d-flex no-block card-body border-top p-2">
                                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                                <div>
                                                    <h6 href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                                        Final Pricing Guarantee
                                                    </h6>
                                                    <span class="text-muted">
                                                        Not only will we discuss a price we agree upon, that will include everything—no hidden fees—so you can have peace of mind as you go through the process.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="d-flex no-block card-body border-top p-2">
                                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                                <div>
                                                    <h6 href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                                        Tailored Solutions
                                                    </h6>
                                                    <span class="text-muted">
                                                        We choose the curtain design to fit the size of your windows, your likes and dislikes, or the interior style of your room.
                                                    </span>
                                                </div>
                                            
                                            </li>
                                            <li class="d-flex no-block card-body border-top p-2">
                                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                                <div>
                                                    <h6 href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                                        Premium Materials
                                                    </h6>
                                                    <span class="text-muted">
                                                        Our curtains and sheers are crafted from high-quality, durable materials that are easy to maintain.
                                                    </span>
                                                </div>
                                            </li>
                    </ul>

            </div>
        </div>
      </div>



<section>
<div class="container mt-5">
    <h2 class="pb-3 pt-2 border-bottom mb-5 text-center">
        A Comprehensive Step-by-Step Guide
    </h2>
    <!--first section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">1</div>
      </div>
      <div class="col-6">
        <h5>Free Consultation
        </h5>
        <p>
            Contact us for a free visit from our designer consultant. We visit your location to understand your requirements & suggest the best options.
        </p>
      </div>
    </div>
    <!--path between 1-2-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--second section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>Customized Design
        </h5>
        <p>Our experts will make recommendations based on your inputs regarding curtain types, styles, materials, and colors to fit your space and budget.
        </p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">2</div>
      </div>
    </div>
    <!--path between 2-3-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>
    <!--third section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3</div>
      </div>
      <div class="col-6">
        <h5>
            Final Selection
        </h5>
        <p>
        Once you’ve committed to the curtains, we’ll confirm the overall price, including everything from fabric selection to installation.
        </p>
      </div>
    </div>
    <!--path between 3-4-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--fourth section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>
            Precise Measurements
        </h5>
        <p>
        We will have our team take proper measurements to make sure they are a perfect fit.
        </p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">4</div>
      </div>
    </div>

     <!--path between 4-5-->
     <div class="row timeline">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>

    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">5</div>
      </div>
      <div class="col-6">
        <h5>
        Production & Quality Check
        </h5>
        <p>
        Now you can have your curtains tailored to the highest standards, with a group quality check ensuring excellence.
        </p>
      </div>
    </div>

     <!--path between 5-6-->
     <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--second section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>
            Delivery & Installation
        </h5>
        <p>
            The curtains are then delivered to you and installed at your convenience, and everything is done to full professional standards.
        </p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">6</div>
      </div>
    </div>
  </div>
</section>


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

@endsection

@section('footer-js')

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var thumbnailSwiper = new Swiper(".thumbnail-slider", {
        spaceBetween: 10,
        slidesPerView: 3, // Aynı anda 3 thumbnail göster
        freeMode: true,
        watchSlidesProgress: true,
    });

    var mainSwiper = new Swiper(".swiper-main", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: thumbnailSwiper, // Thumbnail ile büyük görselleri senkronize et
        },
    });
</script>
@endsection
