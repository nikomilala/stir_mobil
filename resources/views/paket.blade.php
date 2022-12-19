@extends('layouts.main')

    @section('content')
        <!-- Paket Start -->
        <div class="container-xxl courses my-6 py-6 pb-0" id="paket">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="display-6 mb-4">Paket kursus Kami</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 500.000</div>
                                <h5 class="mb-3">Automatic Car Lessons</h5>
                                <p>DI AJARKAN MEMPERLANCAR MENGENDARAI MOBIL MATIC</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/courses-1.jpg')}}" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 1.000.000</div>
                                <h5 class="mb-3">Highway Driving Lesson</h5>
                                <p>BELAJAR PARKIR BIASA ATAUPUN PARALEL DAN BELAJAR MACET DI TANJAKAN.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/courses-2.jpg')}}" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>
                                <h5 class="mb-3">International Driving</h5>
                                <p>DI AJARKAN MENGENDARAI MOBIL DI JALAN RAYA KE LUAR NEGERI</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/courses-3.jpg')}}" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12  text-end" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5 " href="/paket-detail">Paket lainnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Paket End -->


    @endsection
