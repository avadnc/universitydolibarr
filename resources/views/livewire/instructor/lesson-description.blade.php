<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header class="flex justify-items-start">
                <h4 x-on:click="open = !open" class="cursor-pointer">Descripción de la lección: <span class="ml-2 text-gray-400">{{ Str::limit($description->name, 30) }}</span></h4>
            </header>
            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">

                        <textarea wire:model="description.name" class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm">Eliminar</button>
                            <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>

                        <textarea wire:model="name" class="form-input w-full" placeholder="Inserte una descripción..."></textarea>
                        @error('name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end">

                            <button wire:click="store" class="btn btn-primary text-sm ml-2">Guardar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
