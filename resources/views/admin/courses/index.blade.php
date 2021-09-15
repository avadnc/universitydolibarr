@php
$title = 'Dashboard';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración<span>Cursos </span></h2>
                    <h6 class="mb-0">Gestión</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Cursos</li>
                        <li class="breadcrumb-item active">Pendientes de aprobación </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->


    <div class="container-fluid">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Pendientes de aprobación</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    @if (session('info'))
                        <div class="col-lg-12 xl-100">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="col-lg-12 xl-100">
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-12 xl-100">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Categoría</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)

                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->category->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.courses.show', $course) }}"
                                                    class="btn btn-primary">Revisar</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                {{ $courses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
