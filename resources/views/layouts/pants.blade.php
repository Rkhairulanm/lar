@extends('index')

@section('content')
    <div class="container-fluid bg-secondary py-5 bg-pants" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h2 class="display-4 text-white animated zoomIn">Our Product</h2>
                <h5 class="pt-5 h5 text-white wow fadeInUp" data-wow-delay="0.2s">Pants Section</h5>
            </div>
        </div>
    </div>

    <div class="container text-start">
        <div class="row g-1 align-items-start">
            <div class="row col-lg-6 g-0 mb-3 pt-5">
                <div class="section-title position-relative pb-3 mb-5">
                    <h1 class="mb-0">Celana</h1>
                </div>
                <p>
                    Line celana di PT Chikal Jaya Makmur menghasilkan impressif dengan jumlah produksi bulanan mencapai
                    11,250 pieces. Kualitas produk tetap menjadi prioritas utama, dengan setiap celana menjalani pengawasan
                    ketat dalam setiap tahap produksi. Kami memastikan bahwa setiap celana yang kami produksi memenuhi
                    standar kualitas tinggi dan memberikan kenyamanan serta ketahanan yang luar biasa. <br><br>

                    Dengan kombinasi antara produktivitas yang tinggi dan kualitas yang terjamin, PT Chikal Jaya Makmur
                    terus menjadi pemimpin dalam industri ini. Kami berkomitmen untuk memberikan produk yang dapat
                    diandalkan dan berkualitas tinggi kepada pelanggan kami.</p>
                <hr>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>Graphic Tees
                    </h5>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>Long Sleeve
                    </h5>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>Plain
                    </h5>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>Raglan
                    </h5>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>Stripes
                    </h5>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                    <h5 class="d-flex align-items-center mb-3">
                        <i class="fa fa-check text-secondary me-3"></i>ETC.
                    </h5>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <div class="container mt-5">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade shadow" data-bs-ride="carousel"
                            data-bs-interval="1500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/pantsitem1.jpg" class="imgcrs d-block w-100" alt="item1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pantsitem2.jpg" class="imgcrs d-block w-100" alt="item2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pantsitem3.jpg" class="imgcrs d-block w-100" alt="item3">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pantsitem4.jpg" class="imgcrs d-block w-100" alt="item4">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pantsitem5.jpg" class="imgcrs d-block w-100" alt="item5">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pantsitem6.jpg" class="imgcrs d-block w-100" alt="item6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3 mb-5">
            <div class="bg-white">
            <div class="section-title text-center position-relative pb-2 mb-5 mx-auto pt-5 " style="max-width: 600px;">
                <h5 class="fw-bold text-secondary text-uppercase">Our Client</h5>
            </div>
                <div class="owl-carousel vendor-carousel">
                    <img src="img/client-1.jpg" alt="">
                    <img src="img/client-2.jpg" alt="">
                    <img src="img/client-3.jpg" alt="">
                    <img src="img/client-4.jpg" alt="">
                    <img src="img/client-5.jpg" alt="">
                    <img src="img/client-6.jpg" alt="">
                    <img src="img/client-7.jpg" alt="">
                    <img src="img/client-8.jpg" alt="">
                    <img src="img/client-9.jpg" alt="">
                    <img src="img/client-10.jpg" alt="">
                    <img src="img/client-11.jpg" alt="">
                    <img src="img/client-12.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
