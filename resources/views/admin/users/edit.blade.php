@php
$title = 'Editar Usuario';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración<span> de usuarios</span></h2>
                    <h6 class="mb-0">{{ $title }}</h6>
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
            <div class="col-lg-12 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h5">Nombre: <span>{{ $user->name }}</span></h2>
                    </div>
                    <div class="card-body">
                        <h2 class="h5">Lista de roles</h2>
                        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'class' => 'form theme-form', 'method' => 'put']) !!}
                        @foreach ($roles as $role)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach

                        {!! Form::submit('Assignar Rol', ['class' => 'btn btn-primary mt-2']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Container-fluid Ends-->
    </div>
@endsection
