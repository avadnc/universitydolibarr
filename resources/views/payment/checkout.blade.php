<x-app-layout>
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
    <h2 class="text-gray-500 text-3xl font-bold">Detalle del pedido:</h2>
    <div class="card text-gray-600">
        <div class="card-body">
            <article class="flex items-center">
                <img class="h12 w-12 object-cover" src="{{ Storage::url($course->image->url) }}">
                <h3 class="text-lg ml-2">{{ $course->title }}</h3>
                <p class="text-xl font-semibold ml-auto">{{ $course->price->value }} $USD</p>
            </article>
            <div class="flex justify-end mt-2">
                <a class="btn btn-primary" href="{{ route('payment.pay',$course) }}">Comprar este curso</a>

            </div>

            <hr class="mt-4">
            <p class="text-sm mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit atque ratione deserunt blanditiis soluta, repellendus commodi tempore doloribus numquam consectetur beatae impedit voluptatibus recusandae autem provident eius ex sequi harum asperiores pariatur rem iusto! Vel adipisci at eveniet quis quisquam aut. Reprehenderit, tenetur at. Mollitia maxime commodi aperiam esse ullam?</p>
            <a class="text-red-500 font-bold" href="">Terminos y condiciones</a>
        </div>
    </div>
</div>
</x-app-layout>
