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
                <h3 class="box-title">Observaciones del Curso</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-primary">{{ $course->title }}</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => ['admin.courses.reject', $course]]) !!}
                                <div class="form-group">
                                    {!! Form::label('body', 'Escriba sus observaciones para el rechazo de este curso') !!}
                                    {!! Form::textarea('body', null) !!}

                                    @error('body')

                                        <div class="alert alert-danger mt-4">
                                            {{ $message }}
                                        </div>

                                    @enderror
                                </div>
                                {!! Form::submit('Rechazar Curso', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                footer
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('scripts')

    <!--ckeditor js-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
