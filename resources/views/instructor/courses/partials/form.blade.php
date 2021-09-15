 <div class="mb-4">
     {!! Form::label('title', 'Título del curso') !!}
     {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('title') ? ' border-red-600' : null)]) !!}

     @error('title')
         <strong class="text-xs text-red-600">{{ $message }}</strong>
     @enderror
 </div>


 <div class="mb-4">
     {!! Form::label('slug', 'Slug del curso') !!}
     {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-input block w-full mt-1' . ($errors->has('slug') ? ' border-red-600' : null)]) !!}

     @error('slug')
         <strong class="text-xs text-red-600">{{ $message }}</strong>
     @enderror
 </div>

 <div class="mb-4">
     {!! Form::label('subtitle', 'Subítulo del curso') !!}
     {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : null)]) !!}

     @error('subtitle')
         <strong class="text-xs text-red-600">{{ $message }}</strong>
     @enderror
 </div>

 <div class="mb-4">
     {!! Form::label('description', 'Descripción del curso') !!}
     {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('description') ? ' border-red-600' : null)]) !!}

     @error('description')
         <strong class="text-xs text-red-600">{{ $message }}</strong>
     @enderror
 </div>

 <div class="grid grid-cols-3 gap-4">

     <div>
         {!! Form::label('category_id', 'Categoría:') !!}
         {!! Form::select('category_id', $categories, null, ['class' => 'form-input blok w-full mt-1' . ($errors->has('category_id') ? ' border-red-600' : null)]) !!}

         @error('category_id')
             <strong class="text-xs text-red-600">{{ $message }}</strong>
         @enderror
     </div>
     <div>
         {!! Form::label('level_id', 'Niveles:') !!}
         {!! Form::select('level_id', $levels, null, ['class' => 'form-input blok w-full mt-1' . ($errors->has('level_id') ? ' border-red-600' : null)]) !!}

         @error('level_id')
             <strong class="text-xs text-red-600">{{ $message }}</strong>
         @enderror
     </div>
     <div>
         {!! Form::label('price_id', 'Precios:') !!}
         {!! Form::select('price_id', $prices, null, ['class' => 'form-input blok w-full mt-1' . ($errors->has('price_id') ? ' border-red-600' : null)]) !!}

         @error('price_id')
             <strong class="text-xs text-red-600">{{ $message }}</strong>
         @enderror
     </div>
 </div>
 <h2 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h2>
 <div class="grid grid-cols-2 gap-4">
     <figure>
         @isset($course->image)
             <img id="picture" class="w-full h-64 object-cover object-center"
                 src="{{ Storage::url($course->image->url) }}" alt="{{ $course->name }}">
         @else
             <img id="picture" class="w-full h-64 object-cover object-center" src="{{ asset('image/noimage.png') }}">
         @endisset

     </figure>
     <div>
         <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ratione
             veritatis ea dolores nihil aperiam praesentium distinctio adipisci dolorem, fuga ipsum!
             Facere odit nostrum magni expedita maxime, voluptates aliquid rerum dolorum vitae minus
             officiis accusantium ex, ullam quas sed molestiae minima est qui dolore iure commodi
             eligendi quo sint. Illo.</p>
         {!! Form::file('file', ['class' => 'form-input w-full '. ($errors->has('price_id') ? ' border-red-600' : null), 'id' => 'file', 'accept' => 'image/*']) !!}
         @error('file')
             <strong class="text-xs text-red-600">{{ $message }}</strong>
         @enderror
     </div>
 </div>
