<div>
    <div class="bg-grey-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="focus-outline:none bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4"
                wire:click="resetFilters">
                <i class="fa fa-book text-xs mr-2"></i>
                {{ __('All courses') }}
            </button>


            <!-- Dropdown Categorias -->
            <div class="relative" x-data="{ open:false }">
                <button class="block h-12 bg-white shadow px-4 rounded-lg text-gray-700 mr-4" x-on:click="open = true">
                    <i class="fa fa-tags text-xs mr-2"></i>{{ __('Categories') }}<i
                        class="fa fa-angle-down text-xs ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white"
                            wire:click="$set('category_id',{{ $category->id }})"
                            x-on:click="open=false">{{ $category->name }}</a>
                    @endforeach


                </div>
                <!-- // Dropdown -->
            </div>

            <!-- Dropdown niveles -->
            <div class="relative" x-data="{ open:false }">
                <button class="block h-12 bg-white shadow px-4 rounded-lg text-gray-700 mr-4" x-on:click="open = true">
                    <i class="fa fa-bar-chart text-xs mr-2"></i>{{ __('Levels') }}<i
                        class="fa fa-angle-down text-xs ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white"
                            wire:click="$set('category_id',{{ $level->id }})"
                            x-on:click="open=false">{{ $level->name }}</a>
                    @endforeach
                </div>
                <!-- // Dropdown -->
            </div>
        </div>
    </div>

    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

        @foreach ($courses as $course)

            <x-course-card :course="$course"></x-course-card>

        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $courses->links() }}
    </div>
</div>
