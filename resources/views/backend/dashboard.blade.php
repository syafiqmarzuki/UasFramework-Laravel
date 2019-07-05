@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Selamat di Informasi Persegal</li>
                        </ol>
                    </div>

                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="{{asset('assets/images/services-icon/01.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Pengunjung</h5>
                                <h4 class="font-500">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                            </div>
                            <div class="pt-2">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                                <p class="text-white-50 mb-0">Since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="{{asset('assets/images/services-icon/02.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Berita</h5>
                                <h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>

                            </div>
                            <div class="pt-2">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                                <p class="text-white-50 mb-0">Since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="{{asset('assets/images/services-icon/03.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Pengikut</h5>
                                <h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                            </div>
                            <div class="pt-2">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                                <p class="text-white-50 mb-0">Since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4">
                                    <img src="{{asset('assets/images/services-icon/04.png')}}" alt="">
                                </div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Event</h5>
                                <h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>

                            </div>
                            <div class="pt-2">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                                <p class="text-white-50 mb-0">Since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- end row --></div>
        <!-- container-fluid --></div>
@endsection