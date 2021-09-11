@php
$title = 'Dashboard';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración<span>Precios </span></h2>

                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Cursos</li>
                        <li class="breadcrumb-item active">Precios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="box">
            <div class="box-header">

            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h2>Crear precio</h2>

                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => ['admin.prices.store']]) !!}

                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribir nombre del precio']) !!}
                                     @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Valor', 'Valor') !!}
                                    {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' => 'Escribir valor del precio']) !!}
                                    @error('value')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {!! Form::submit('Crear precio', ['class' => 'btn btn-primary']) !!}


                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
