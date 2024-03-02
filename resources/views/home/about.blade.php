@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<div class="container" >
    <div class="row">
      <h3>Liên hệ</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4163413203096!2d106.62582077085973!3d10.855904391627904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529deaaaaaaab%3A0xce800a25143c8e3a!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFPDoGkgR8OybiAoU2FpR29uVGVjaCk!5e0!3m2!1sfr!2s!4v1671094776796!5m2!1sfr!2s"
        width="1130"
        height="500"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <div class="row mt-4 row-cols-1">
      <div class="col-lg-6">
        <p class="text-uppercase text-contact">
          <i class="fa-solid fa-envelope"></i> Để lại lời nhắn cho chúng tôi
        </p>
        <hr />
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group d-block">
              <div class="input-content d-flex">
                <span class="span-item">
                  <i class="fa fa-user"></i>
                </span>
                <input
                  type="text"
                  class="input-item"
                  placeholder="Họ và tên"
                />
              </div>
              <div class="input-content d-flex mt-2">
                <span class="span-item">
                  <i class="fa fa-envelope"></i>
                </span>
                <input
                  type="email"
                  class="input-item"
                  placeholder="Email đầy đủ"
                />
              </div>
              <div class="input-content d-flex mt-2">
                <span class="span-item">
                  <i class="fa fa-phone"></i>
                </span>
                <input
                  type="text"
                  class="input-item"
                  placeholder="Số điện thoại"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="title-note">
              <textarea placeholder="Viết lời nhắn"></textarea>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <button type="button " class="btn-contact">Gửi lời nhắn</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-3 mt-lg-0">
        <p class="text-contact text-uppercase">
          Chúng tôi sẽ kết nối ngay lập tức khi bạn cần trợ giúp.
        </p>
        <hr />
        <p><i class="fa fa-building"></i> <span>See Ever</span></p>
        <p><i class="fa fa-phone"></i> <span>028 555 555</span></p>

        <p>
          <i class="fa fa-map-marker"></i>
          <span
            >Công viên Phần Mềm Quang Trung, Lô 14 Đường Số 5, Tân Hưng Thuận,
            Quận 12, Thành phố Hồ Chí Minh</span
          >
        </p>

        <p>
          <i class="fa fa-envelope"></i>
          <span>seeever.loveyou@gmail.com</span>
        </p>
      </div>
    </div>
  </div>
@endsection