@php
$title = 'Dashboard';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración<span>Niveles </span></h2>
                    <h6 class="mb-0">Gestión de niveles</h6>
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
                @if (session('info'))
                    <div class="alert alert-danger">
                        {{ session('info') }}
                    </div>
                @endif
            </div>
            <div class="box-body">
                <div class="row">

                    <div class="col-lg-12 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                   <h2>Lista de precios <a href="{{ route('admin.prices.create') }}" class="btn btn-secondary btn-sm float-right" href="">Crear precio</a></h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>

                                        <th colspan="2"></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($prices as $price)
                                            <tr>
                                                <td>{{ $price->id }}</td>
                                                <td>{{ $price->name }}</td>

                                                <td width="10px">
                                                    <a class="btn btn-primary btn-s"
                                                        href="{{ route('admin.prices.edit', $price) }}">Editar</a>
                                                </td>
                                                <td width="10px">
                                                    <form action="{{ route('admin.prices.destroy', $price) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-s">Eliminar</button>
                                                    </form>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
