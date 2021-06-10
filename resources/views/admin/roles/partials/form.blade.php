 <div class="card">
     <div class="card-header">
         <h5>Formulario {{ $title }}</h5>
     </div>
     {!! Form::open(['route' => 'admin.roles.store', null, 'class' => 'form theme-form']) !!}
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

         {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary mt-2']) !!}

     </div>

     {!! Form::close() !!}
 </div>
