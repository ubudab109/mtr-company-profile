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
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="slider-content">
              <h1 class="text-white text-bold-lg text-underline-white mb-5">Contact</h1>
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
  <section>
    <div class="container mt-5">
      <h1 class="mb-5">Send Message</h1>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <h5><span style="padding-right: 22px;"><img src="{{asset('img/phone_red.png')}}" alt=""></span>Phone</h5>
          <div class="value text-bold-contact" style="padding-left: 57px;">
            <span>Whatsapp:</span><br>
            <span>+62 856-7405-874</span><br>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <h5><span style="padding-right: 22px;"><img src="{{asset('img/location.png')}}" alt=""></span>Marketing Office</h5>
          <div class="value text-bold-contact" style="padding-left: 57px; width: 64%;">
            <span>Gedung KPI JL. Tegal Parang Utara No. 3 Jakarta 12790 - Indonesia</span><br>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <h5><span style="padding-right: 22px;"><img src="{{asset('img/mail.png')}}" alt=""></span>Mail</h5>
          <div class="value text-bold-contact" style="padding-left: 57px;">
            <span>Mail : email@mail.com</span><br>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection