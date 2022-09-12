@extends('welcome')
@section('content')
<section id="product">
  <div class="container mt-5">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h1 class="text-bold text-underline-red">@lang('banner.product_title')</h1>
      </div>
    </div>
  </div>
</section>

@foreach ($products as $key => $product)
<section  style="background: {{$key % 2 != 0 ? '#F2F2F2' : 'white'}}">

  <div class="container">
    @if ($key % 2 != 0)
    <div class="row" data-aos="fade-up">
  
      <div class="col-lg-6 col-md-12">
        <img src="{{$product['image']}}" alt="" style="float: left;  width: 100%;">
      </div>
      <div class="col-lg-6 col-md-12 mt-5">
        <h4 style="float: left; text-align: justify;">{{$product['name']}}</h4>
        <p style="float: right; text-align: justify;">
          {{$product['desc']}}
        </p>
        <a class="btn btn-red text-white" style="float: right; width: 100%;"  href="https://api.whatsapp.com/send?phone=+62 856-7405-874&text=Halo!">Pesan</a>
      </div>
    </div>
    @else
    <div class="row" data-aos="fade-down">
  
      <div class="col-lg-6 col-md-12 mt-5">
        <h4>{{$product['name']}}</h4>
        <p style="text-align: justify;">
          {{$product['desc']}}
        </p>
        <a class="btn btn-red text-white mb-5" style="width: 100%;"  href="https://api.whatsapp.com/send?phone=+62 856-7405-874&text=Halo!">Pesan</a>
      </div>
      <div class="col-lg-6 col-md-12">
        <img src="{{$product['image']}}" alt="" style="float: right; width: 100%;">
      </div>
    </div>
  
    @endif
  </div>
</section>
@endforeach
@endsection