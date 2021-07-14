@extends('layouts.main')

@section('title', 'Каталог продукции')

@section('content')
  <!-- service section -->

  <section class="service_section layout_padding-top" style="background-color: #fff">
    <div class="container">
      <div class="heading_container">
        <h2 style="color: #000">
          Наша продукция - {{ $products[0]->categoryBond->categoryName }}
        </h2>
      </div>
      <div class="service_container container-fluid">
        <div class="row justify-content-center">
        @foreach($products as $product)
          <div class="box col-lg-3 col-md-4">
            <div class="img-box">
              <img src="{{asset('storage/avatars/'.$product->avatar)}}" alt="{{ $product->productName }}" />
            </div>
            <div class="detail-box">
              <h6>
               {{ $product->productName }} - {{ $product->title }}
              </h6>
              <p>
                {{ \Illuminate\Support\Str::limit(strip_tags($product->productDesc), 200) }}
              </p>
              <a href="/singleproduct/{{ $product->id }}">
                Подробнее
              </a>
            </div>
          </div>
        @endforeach
      </div>

      </div>
    </div>
  </section>

  <!-- end service section -->


@endsection