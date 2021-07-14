@extends('layouts.main')

@section('title', 'Продукция')

@section('content')

  <!-- about section -->

  <section class="about_section layout_padding bg-white">
    <div class="container">
      <div class="heading_container">
        <h2>{{ $productInfo[0]->productName }}</h2>
      </div>
      <div class="heading_container">
        <h4>{{ $productInfo[0]->title }}</h4>
      </div>

      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container mr-0">
            <div class="img-box">
                <div class="swiper-container single-product-slider">
                    <div class="swiper-wrapper">
                        @php
                            $pieces = explode("|", $productInfo[0]->pictures)
                        @endphp
                        @foreach($pieces as $piece)
                            <div class="swiper-slide" style="text-align: center;">
                                <a href="{{ asset('storage/products/'.$piece)}}" class="single-img gallery-popup">
                                    <img class="img-full" src="{{ asset('storage/products/'.$piece)}}" alt="{{ $productInfo[0]->productName }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="thumbs-arrow-holder">
                        <div class="swiper-container single-product-thumbs">
                            <div class="swiper-wrapper">
                                @foreach($pieces as $pieceThumb)
                                    <a href="#" class="swiper-slide" style="text-align: center;">
                                        <img class="img-full" src="{{ asset('storage/products/'.$pieceThumb)}}" alt="{{ $productInfo[0]->productName }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="thumbs-button-wrap d-none d-md-block">
                            <div class="thumbs-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="thumbs-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <h3>
                БОЛЕЕ ПОДРОБНО ПРО {{ $productInfo[0]->productName }}
            </h3>
            <p>
                {!! $productInfo[0]->productDesc !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="service_section layout_padding-top">
      <div class="container">
          <div class="col-lg-12 text-white pb-5">

            <div class="row">
                  @foreach($productInfo[0]->productsDescTable as $product)
                      <div class="col-lg-4 p-4 border-bottom table-bordered"><h4>{{$product->tableTitle}}</h4>
                          {{$product->tableText}}
                      </div>
                  @endforeach
            </div>
          </div>
      </div>
  </section>
  <section class="about_section mb-5">
      <div class="container">
         <div class="heading_container">
              <h2>Функции</h2>
          </div>
          <div class="accordion" id="accordionFunctions">
                @php
                $thumb = 1;
                @endphp
              @foreach($productInfo[0]->productsFunctions as $functions)
                  <div class="card">
                      <div class="card-header" id="heading{{ $functions->id }}">
                          <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $functions->id }}" aria-expanded="true" aria-controls="collapse{{ $functions->id }}">
                                  {{ $functions->functionTitle }}
                              </button>
                          </h2>
                      </div>

                      <div id="collapse{{ $functions->id }}" class="collapse @if($thumb < 2)show @endif" aria-labelledby="heading{{ $functions->id }}" data-parent="#accordionFunctions">
                          <div class="card-body table-hover">
                              {!! $functions->functionDesc !!}
                          </div>
                      </div>
                  </div>
                  @php
                      $thumb++;
                  @endphp
              @endforeach
          </div>
      </div>
  </section>
  <section class="service_section about_section p-5 mb-5">
      <div class="container">
          <div class="heading_container col-12">
              <h2>Загрузки</h2>
          </div>
          <div class="col-lg-12 text-white pb-5">
            <diw class="row">
                  @foreach($productInfo[0]->productsFiles as $files)
                      <div class="col-lg-4 p-4 border-bottom table-bordered"><a href="{{ $files->file }}" target="_blank"><h3><i class="pe-7s-download text-white"></i></h3><span class="text-white">{{ $files->filesTitle }}</span></a></div>
                  @endforeach
            </diw>
          </div>
          <div class="heading_container col-12">
              <h2>Ссылки</h2>
          </div>
          <div class="col-lg-12 text-white pb-5">
            <diw class="row">
                  @foreach($productInfo[0]->productsLinks as $link)
                      <div class="col-lg-4 p-4 border-bottom table-bordered"><a href="{{ $link->link }}" target="_blank"><h3><i class="pe-7s-link text-white"></i></h3><span class="text-white">{{ $link->linksTitle }}</span></a></div>
                  @endforeach
            </diw>
          </div>
      </div>
  </section>
  <!-- end about section -->
@endsection