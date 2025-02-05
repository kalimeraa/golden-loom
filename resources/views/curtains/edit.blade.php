@extends('layout.main')

@section('title', 'Ana Sayfa')

@section('head-style')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    
    <style>
        .swiper-container {
            width: 100%;
            max-width: 500px;
        }

        .swiper-main {
            width: 100%;
            height: 400px; /* İstediğin yüksekliği ayarlayabilirsin */
        }

        .swiper-main .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .swiper-main .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Resmin içeriğe düzgün oturmasını sağlar */
            border-radius: 5px; /* Köşeleri yuvarlamak istersen */
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
                  @foreach($curtain->files as $file)
                    <div class="swiper-slide"><img src="{{ asset($file->path) }}" class="img-fluid" alt="Slide 1"></div>
                  @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>

        <!-- sağ Taraf Sabit İçerik -->
        <div class="col-md-4">
            <h2 style="color:#000">
              {{ $curtain->title }}
            </h2>
            {!! $curtain->description !!}
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

@endsection

@section('footer-js')

<script>
    var mainSwiper = new Swiper(".swiper-main", {
      loop: true,
      autoHeight: true, // Otomatik yükseklik ayarla
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
    });
</script>
@endsection
