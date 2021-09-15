@php
$title = 'Dashboard';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Default<span>Dashboard </span></h2>
                    <h6 class="mb-0">admin panel</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-6 col-lg-6 box-col-6">
                <div class="card gradient-primary o-hidden">
                    <div class="b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="book-open"></i></div>
                            <div class="media-body"><span class="m-0 text-white">Cursos Totales</span>
                                <h4 class="mb-0 counter">{{ $courses }}</h4><i class="icon-bg"
                                    data-feather="book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 col-lg-6 box-col-6">
                <div class="card gradient-info o-hidden">
                    <div class="b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center">
                                <div class="text-white i" data-feather="user-plus"></div>
                            </div>
                            <div class="media-body"><span class="m-0 text-white">Total Usuarios</span>
                                <h4 class="mb-0 counter text-white">{{ $users }}</h4><i class="icon-bg"
                                    data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid Ends-->
    </div>
@endsection

