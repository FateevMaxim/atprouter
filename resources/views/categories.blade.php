@extends('layouts.main')

@section('title', 'Каталог продукции')

@section('content')
  <!-- service section -->


    <section class="product_section about_section layout_padding bg-white">
      <div class="container">
        <div class="heading_container">
          <h2>
            Наша продукция
          </h2>
        </div>
        <div class="product_container">
          @foreach($categories as $category)
            <div class="box">
              <img src="{{ asset('storage/categories/'. $category->categoryImg )}}" alt="{{ $category->categoryName }}" />
              <a href="/products/{{ $category->id }}">{{ $category->categoryName }}</a>
            </div>
          @endforeach
        </div>
      </div>
    </section>

  <section class="service_section contact_section text-white layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Связаться с нами
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li><b>Адрес:</b> г. Алматы, пр. Назарбаева д.103 офис 809</li>
              <li><b>Индекс:</b> 050000</li>
              <li><b>Мобильный: </b> <button type="button" class="btn btn-primary"><a href="tel:+77770134379" class="text-white">+7 777 013 4379</a></button></li>
              <li><b>Телефон: </b><a href="tel:+77272670500" class="text-white">+7 (727) 267 05 00</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/map.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


@endsection