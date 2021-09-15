<section class="card-body">

    <h2 class="text-2xl font-bold text-uppercase">Audiencia del curso</h2>
    <hr class="mt-2 mb-6">

    @foreach ($course->audiences as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">

                @if ($audience->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input type="text" wire:model="audience.name" class="form-input w-full">
                    </form>
                    @error('audience.name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                @else
                    <header class="flex justify-between">
                        <h3>{{ $item->name }}</h3>
                        <div>
                            <i wire:click="edit({{ $item }})"
                                class="fa fa-edit text-blue-500 cursor-pointer"></i>
                            <i wire:click="destroy({{ $item }})"
                                class="ml-2 fa fa-trash text-red-500 cursor-pointer"></i>
                        </div>
                    </header>
                @endif

            </div>
        </article>
    @endforeach
    <article class="card">
        <div class="card-body bg-gray-100">
            <form wire:submit.prevent="store">
                <input wire:model="name" type="text" class="form-input w-full" placeholder="Escribir audiencia del curso">
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary mt-2">Agregar audiencia</button>
                </div>
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </form>
        </div>
    </article>

</section>
