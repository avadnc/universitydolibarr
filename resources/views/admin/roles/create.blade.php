@php
$title = 'Crear nuevo rol';
@endphp
@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Crear<span> Nuevo Rol</span></h2>
                    <h6 class="mb-0">Administración de Usuarios</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">{{ $title }} </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6 xl-100 justify-center">
                @include('admin.roles.partials.form')
            </div>
        </div>

        <!-- Container-fluid Ends-->
    </div>
@endsection
