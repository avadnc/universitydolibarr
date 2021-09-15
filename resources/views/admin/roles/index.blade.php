@php
$title = 'Listado de roles';
@endphp

@extends('admin.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Administración<span> de roles</span></h2>
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="pe-7s-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">{{ $title }} </li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        @if (session('info'))

            <div class="alert alert-success outline alert-dismissible fade show" role="alert">
                <i data-feather="thumbs-up"></i>
                <p>
                    <b> Excelente! </b>{{ session('info') }}.
                </p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
        @endif

        <div class="row">
            <div class="col-lg-12 xl-100 mb-2">
                <a class="btn btn-primary" href="{{ route('admin.roles.create') }}">Crear rol</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 xl-100">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td width="10px">
                                        <a class="btn btn-square btn-info"
                                            href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['admin.roles.destroy', $role], null, 'method' => 'delete']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-square btn-danger']) !!}
                                        {!! Form::close() !!}
                                        {{-- <form action="{{ route('admin.roles.destroy', $role) }}">
                                            @csrf
                                            <button class="btn btn-square btn-danger" type="submit">Eliminar</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No se encontraron registros</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Container-fluid Ends-->
    </div>
@endsection
