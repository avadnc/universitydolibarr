@php
$title = 'Administración de Usuarios';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración <span>de usuarios </span></h2>
                    <h6 class="mb-0">Lista de Usuarios</h6>
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

    @livewire('admin.users-index')

@endsection
