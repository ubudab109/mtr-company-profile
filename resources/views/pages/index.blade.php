@extends('welcome')
@section('header')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="
      background: url({{asset('banner/1.jpeg')}});
      height: 604px;
      background-position: bottom;
      background-size: cover !important;
      ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="slider-content">
              <div class="outer">
                <div class="inner">
                  <div class="title">
                    <strong>@lang('banner.title')</strong> 
                  </div>
                  <div class="text">@lang('banner.about')</div>
                </div>
              </div>
              <ul class="slider-btn rounded-buttons">
                <li><a class="main-btn rounded-one" href="#">@lang('banner.see')</a></li>
              </ul>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
      <!-- slider-imgae box -->
    </div>

    <div class="carousel-item" style="
      background: url({{asset('banner/2.jpeg')}});
      height: 604px;
      background-position: bottom;
      background-size: cover !important;
      ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="slider-content">
              <div class="outer">
                <div class="inner">
                  <div class="title">
                    <strong>@lang('banner.title1')</strong> 
                  </div>
                  <div class="text">@lang('banner.about1')</div>
                </div>
              </div>
              <ul class="slider-btn rounded-buttons">
                <li><a class="main-btn rounded-one" href="#">@lang('banner.see')</a></li>
              </ul>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
      <!-- slider-imgae box -->
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
  </ol>
</div>
@endsection
@section('content')
{{-- BANNER AND PRODUCT --}}
<section id="top-content">
  <div class="container">
    <div class="row mt-4">
      <div class="col-12">
        <h1 class="text-center text-bold-lg" data-aos="flip-up">@lang('banner.welcome')</h1>
        <h4 class="text-center text-bold-lg text-red text-italic" data-aos="flip-left">@lang('banner.sub_welcome')</h4>
        <div class="col-12 text-center" data-aos="flip-right">
          @lang('banner.about')
        </div>
      </div>
    </div>
    <div class="row mt-4 justify-content-center">
      @foreach ($products as $key => $product)
      <div class="col-lg-4 col-md-8 col-sm-12 mb-3 text-center" data-aos="flip-down" style="{{$key == 2 ? 'padding-top: 83px;' : ''}}">
        <img src="{{$product['image']}}" width="200" alt="">
        <h5 class="{{$key == 1 ? 'pd-85' :($key == 2 ? 'pd-110' : '')}}">{{$product['name']}}</h5>
      </div>
      @endforeach
    </div>
  </div>
</section>
{{-- END BANNER ABD PRODUCT --}}

{{-- ABOUT --}}
<img class="hidden-bg" src="{{asset('img/left_about_section.png')}}" alt="">
<section id="about" class="index-about-section">
  <div class="container">
    <div class="col-12">
      <h1 class="text-white text-bold-lg" data-aos="flip-up">@lang('banner.about_us')</h1>
      <span class="text-white text-bold-md" data-aos="flip-left">@lang('banner.filsof')</span>
      <div class="box-about mb-5" data-aos="flip-right">
        <p class="text-white">@lang('banner.about')</p>
        <a href="{{route('about')}}">
          <button class="btn-blue text-white">Read More</button>
        </a>
      </div>
    </div>
  </div>
</section>
{{-- END ABOUT --}}

<section id="our-facilities">
  <div class="modal fade" id="certModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" id="cert-img" alt="" style="width: 100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mb-5" data-aos="fade-up">
      <div class="col-12 text-center">
        <h1 class="text-bold text-underline-red">@lang('banner.cert')</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-sm-12" data-aos="fade-down">
        <img src="{{asset('img/sertifikat1.jpeg')}}" alt=""
          onclick="openCert('{{asset('img/sertifikat1.jpeg')}}')" style="cursor: pointer; width: 100%;">
      </div>
      <div class="col-lg-6 col-sm-12" data-aos="fade-up">
        <img src="{{asset('img/sertifikat2.jpg')}}" alt=""
          onclick="openCert('{{asset('img/sertifikat2.jpg')}}')" style="cursor: pointer; width: 100%;">
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script>
  function openCert(img) {
          $("#certModal").modal('show');
          $("#cert-img").attr("src",img);

        }

</script>
@endsection