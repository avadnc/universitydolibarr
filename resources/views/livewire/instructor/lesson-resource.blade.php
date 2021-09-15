<div class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">
        <header>
            <h3 x-on:click="open = !open" class="cursor-pointer">{{ $lesson->resource?"Recursos de la lección:":"Añadir recursos:" }}</h3>
        </header>

        <div x-show="open">
            <hr class="my-2">
            @if ($lesson->resource)
                <div class="flex justify-between items-center">
                    <p>
                        <i wire:click="download" class="fa fa-download mr-2 text-gray-500 cursor-pointer"></i>
                        {{ $lesson->resource->url }}</p>
                        <i wire:click="destroy" class="fa fa-trash text-red-500 ml-2 cursor-pointer"></i>
                </div>
            @else
                <form wire:submit.prevent="save">
                    <div class="flex items-center">
                        <input wire:model="file" type="file" class="form-input flex-1">
                        <button type="submit" class="btn btn-primary ml-2">Almacenar</button>
                    </div>

                    <div wire:loading wire:target="file" class="text-blue-500 font-bold mt-1">
                        Cargando...
                    </div>
                    @error('file')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </form>
            @endif

        </div>
    </div>
</div>
