<div>
    @foreach ($section->lessons as $item)
        <article x-data="{open: false}" class="mt-4 card">
            <div class="card-body">
                @if ($lesson->id == $item->id)
                    <form wire:submit.prevent="update">
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input wire:model="lesson.name" type="text" class="form-input w-full">
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex items-center mt-4">
                            <label class="w-32">Plataforma:</label>
                            <select wire:model="lesson.platform_id"
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full">
                                @foreach ($platforms as $platform)
                                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4">
                            <label class="w-32">Url:</label>
                            <input wire:model="lesson.url" type="text" class="form-input w-full">
                        </div>

                        @error('lesson.url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="btn  btn-danger text-sm" wire:click="cancel">Cancelar</button>
                            <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                        </div>
                    </form>
                @else

                    <header>
                        <h3 x-on:click="open = !open" class="cursor-pointer"><i class="fa fa-play-circle-o text-blue-500 mr-1"></i> Lección: {{ $item->name }}</h3>
                    </header>

                    <div x-show="open">
                        <hr class="my-2">
                        <p class="text-sm">Plataforma: {{ $item->platform->name }}</p>
                        <p class="text-sm">Enlace: <a class="text-blue-600" target="_blank"
                                href="{{ $item->url }}">{{ $item->url }}</a></p>

                        <div class="my-2">
                            <button class="btn btn-primary text-sm"
                                wire:click="edit({{ $item }})">Editar</button>
                            <button class="btn btn-danger text-sm"
                                wire:click="destroy({{ $item }})">Eliminar</button>
                        </div>

                        <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description'.$item->id))
                        </div>
                        <div>
                            @livewire('instructor.lesson-resource', ['lesson' => $item], key('lesson-resource'.$item->id))
                        </div>
                    </div>

                @endif

            </div>
        </article>
    @endforeach

    <div class="mt-4" x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="fa fa-plus-square-o text-2xl text-red-500 mr-2"></i>
            Agregar nueva lección
        </a>

        <article class="card" x-show="open">

            <div class="card-body">
                <h1 class="text-xl font-bold mb-4">Agregar nueva lección</h1>
                <div class="flex items-center">
                    <label class="w-32">Nombre:</label>
                    <input wire:model="name" type="text" class="form-input w-full">
                </div>

                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex items-center mt-4">
                    <label class="w-32">Plataforma:</label>
                    <select wire:model="platform_id"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full">
                        @foreach ($platforms as $platform)
                            <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                        @endforeach
                    </select>
                </div>

                @error('platform_id')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="flex items-center mt-4">
                    <label class="w-32">Url:</label>
                    <input wire:model="url" type="text" class="form-input w-full">
                </div>

                @error('url')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

                <div class="mt-4 flex justify-end">
                    <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                    <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                </div>
            </div>
        </article>
    </div>
</div>
