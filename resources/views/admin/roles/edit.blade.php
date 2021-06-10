@php
$title = 'Editar rol';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Editar<span> Rol</span></h2>
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
            <div class="col-lg-6 xl-100 ">
                <div class="card">
                    <div class="card-header">
                        <h5>Formulario {{ $title }}</h5>
                    </div>
                    {!! Form::model($role, ['route' => ['admin.roles.update',$role] , 'class' => 'form theme-form', 'method' => 'put']) !!}
                    <div class="card-body">

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Introduce un nombre']) !!}
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <strong>Permisos: </strong>
                        <div>
                            @error('permissions')
                                <small class="text-danger"><strong>{{ $message }}</strong></small>
                            @enderror
                        </div>
                        @foreach ($permissions as $permission)
                            <div>
                                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1 ml-2' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
                                {{ $permission->name }}
                            </div>

                        @endforeach

                        {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary mt-2']) !!}
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-danger mr-2 mt-2">Volver</a>

                    </div>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>

        <!-- Container-fluid Ends-->
    </div>
@endsection
