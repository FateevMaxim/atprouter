@extends('layouts/main')

@section('title', 'О компании')

@section('content')

  <section class="about_section layout_padding bg-white">
    <div class="container">
      <div class="heading_container">
        <h2><span>О</span> Компании</h2>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about-img.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <h3>
              ATPCOM
            </h3>
            <h4>Друзья, коллеги и партнеры!</h4>
            <p>
            Наша компания имеет честь представить Вам наше новое направление в бизнесе!<br />
            Компания Almaty Technical Procurement стала официальным Партнером в Казахстане компании Teltonika Networks.<br />
            ТОО «Almaty Technical Procurement» образовано в 2006 году в Алматы и основной профиль компании был поставка технологического оборудования для нефтегазового сектора, за пятнадцать лет своей активной деятельности наша компания приняла во всех значимых проектах страны, мы участвовали в модернизациях всех республиканских НПЗ, строительствах международных магистральных трубопроводов, компрессорных станций, нефтеперекачивающих станций, а также были задействованы в поставках электрооборудования, элементов систем пожаротушения.
            </p>
          </div>
        </div>

      </div>
      <div class="col-lg-12">

        <p>В ходе нашей деятельности мы столкнулись с тем, что современные проблемы промышленных предприятий требуют современных решений и одним из них является сетевое оборудование, с помощью нашего оборудования можно обвязать все промышленное оборудование и получить контроль за любым технологическим процессом даже в случае большой удаленности предприятия.</p>
        <p>Компания Teltonika Networks и Almaty Technical Procurement предлагают новейшие решения всех задач перед современным предприятием в области энергетики, контроля за трубопроводами, системами «Умный город», «Зеленая энергия», управление вышками связи, обеспечение связи на морских судах и любого отдаленного объекта, 4G связь торговых автоматов, облачное хранение данных и т.д.</p>

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
              <li><b>Телефон: </b> <button type="button" class="btn btn-primary"><a href="tel:+77272670500" class="text-white">+7 (727) 267 05 00</a></button></li>
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
  <!-- end about section -->

@endsection