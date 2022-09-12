@extends('welcome')
@section('header')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="
      background: url({{asset('banner/about_bg1.png')}});
      height: 604px;
      background-position: bottom;
      background-size: cover !important;
      ">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center">
            <div class="slider-content">
              <h1 class="text-white text-bold-lg text-underline-white mb-5">@lang('banner.about_us')</h1>
              <p class="text-white">
                @lang('banner.about')
              </p>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
      <!-- slider-imgae box -->
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="container" data-aos="flip-up">
  <div class="row mb-5 mt-4">
    <div class="col-12 text-center">
      <h1 class="text-bold text-underline-red">@lang('about.vision') & @lang('about.mission')</h1>
    </div>
  </div>
</div>
<section id="digital" style="background: #0C3C78; margin-top: 119px;">
  <div class="container mb-5">
    <div class="row justify-content-center align-item-start p-5">
      <div class="row absolute">
        <div class="card" style="background: #F30A49" data-aos="flip-up">
          <div class="card-body">
            <h4 class="text-center text-white text-bold-lg">@lang('about.vision')</h4>
            <span class="text-center text-white">@lang('about.vision_msg')</span>
          </div>
        </div>
        <div class="card" style="background: #F30A49" data-aos="fade-up">
          <div class="card-body">
            <h4 class="text-center text-white text-bold-lg">@lang('about.mission')</h4>
            <span class="text-center text-white">@lang('about.mission_msg')</span>
          </div>
        </div>
        <div class="card" style="background: #F30A49" data-aos="fade-down">
          <div class="card-body">
            <h4 class="text-center text-white text-bold-lg">@lang('about.advantages')</h4>
            <span class="text-center text-white">@lang('about.advantage_msg')</span> <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="our-facilities-about" data-aos="fade-up">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h1 class="text-bold text-underline-red">Certifications</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-sm-12">
        <img src="{{asset('img/sertifikat1.jpeg')}}" alt="" width="500" style="cursor: pointer; width: 100%;">
      </div>
      <div class="col-lg-6 col-sm-12">
        <img src="{{asset('img/sertifikat2.jpg')}}" alt="" width="500" style="cursor: pointer; width: 100%;">
      </div>
    </div>
  </div>
</section>

<section id="company-plant" data-aos="fade-down">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h1 class="text-bold text-underline-red">Company & Plant Gallery</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center text-center portofolio owl-carousel owl-theme">
          @foreach ($company_plant as $image)
          <div class="card" style="margin-left: 4px;">
            <img class="card-img-top" src="{{$image}}" alt="Card image cap" style="height: 200px;">
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script>
  $(document).ready(() => {
        $(".portofolio").owlCarousel({
          loop:true,
          margin: 0,
          responsive:{
              0:{
                  items:1,
                  dots: true,
              },
              600:{
                  items:3,
                  dots: true,
              },
              1000:{
                  items:3,
                  dots: true,
              }
          }
      })
      })
</script>
@endsection