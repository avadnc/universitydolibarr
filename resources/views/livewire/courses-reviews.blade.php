<section class="mt-4">
    <h4 class="font-bold text-3xl text-gray-800 mb-2">Valoración</h4>
    @can('enrolled', $course)
        <article>
            @can('valued', $course)
                <textarea wire:model="comment" class="form-input w-full" placeholder="Ingresar reseña del curso"
                    rows="3"></textarea>
                <div class="flex items-center mb-4">
                    <button class="btn btn-primary mr-4" wire:click="store">Guardar</button>
                    <ul class="flex">
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating',1)"><i
                                class="fa fa-star text-{{ $rating >= 1 ? 'yellow' : 'grey' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating',2)"><i
                                class="fa fa-star text-{{ $rating >= 2 ? 'yellow' : 'grey' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating',3)"><i
                                class="fa fa-star text-{{ $rating >= 3 ? 'yellow' : 'grey' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating',4)"><i
                                class="fa fa-star text-{{ $rating >= 4 ? 'yellow' : 'grey' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating',5)"><i
                                class="fa fa-star text-{{ $rating == 5 ? 'yellow' : 'grey' }}-300"></i>
                        </li>
                    </ul>
                </div>
            @else

                <div class="w-full bg-blue-400 mb-4">

                    <div class="w-auto text-gray-200 p-4">
                        <span class="text-lg font-bold pb-4">
                            Atención!
                        </span>
                        <p class="leading-tight">
                           Usted ya calificó este curso de forma exitosa. Agradecemos sus comentarios para seguir mejorando
                        </p>
                    </div>
                </div>

            @endcan
        </article>
    @endcan
    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{ $course->reviews->count() }} Valoraciones</p>
            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800">
                    <figure>
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg"
                            src="{{ $review->user->profile_photo_url }}" alt="">
                    </figure>
                    <div class="card flex-1 ml-4">
                        <div class="card-body bg-gray-100">
                            <p><b>{{ $review->user->name }}</b> <i class="fa fa-star text-yellow-400"></i>
                                ({{ $review->rating }})</p>
                            {{ $review->comment }}
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
