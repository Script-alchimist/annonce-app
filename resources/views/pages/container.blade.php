@extends('Layout.app')
@section('content')
    <div class="container flex items-start justify-between max-w-screen-xl gap-4 mx-auto mt-5">
        <div
            class="flex flex-col w-4/6 gap-4 px-10 py-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
        >
            <div>
                <img src="{{ asset('assets/pot2.jpg') }}" alt=""
                    class="float-left object-cover w-1/3 rounded-l-lg h-1/4">
                <h1 class="mb-3 text-3xl font-bold text-teal-900">Titre de l'annonce 1</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, aliquam aperiam! Vitae voluptas
                    obcaecati tempore harum sunt ipsum sapiente ad veritatis eum est iste magni repellat, delectus minima
                    excepturi, reiciendis impedit? Aut voluptatum quo sunt vel aliquam culpa beatae exercitationem minus et
                    neque quod, fuga voluptas? Quidem non sed consequatur vel perferendis culpa eos illum corrupti, omnis
                    voluptatum similique consectetur excepturi facilis ratione odio saepe. Ad, aliquam, ratione nam
                    similique beatae, veniam recusandae ipsa omnis autem culpa quidem quisquam perferendis fugit obcaecati
                    eum nulla? Mollitia nisi provident illo aperiam voluptates dignissimos illum deleniti ducimus
                    consequuntur, facere veniam debitis quaerat iste nesciunt fuga! Voluptatibus consequatur iste, sint illo
                    vero quibusdam voluptates, nisi cupiditate maiores pariatur accusantium?
                </p>
                <div
                    class="flex items-center justify-between mt-3 text-gray-600 dark:text-gray-400"
                >
                    <a href="{{ route('article', 'WZEPOAIEU23') }}"
                        class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">
                        voir plus
                    </a>
                    <span class="text-sm">Publié le: <span class="font-semibold">12/10/2023</span></span>
                </div>
                <hr class="my-3 border border-gray-300">
            </div>
            <div>
                <img src="{{ asset('assets/nettoyeur.jpg') }}" alt=""
                    class="float-left object-cover w-1/3 rounded-l-lg h-1/4">
                <h1 class="mb-3 text-3xl font-bold text-teal-900">Titre de l'annonce 2</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, aliquam aperiam! Vitae voluptas
                    obcaecati tempore harum sunt ipsum sapiente ad veritatis eum est iste magni repellat, delectus minima
                    excepturi, reiciendis impedit? Aut voluptatum quo sunt vel aliquam culpa beatae exercitationem minus et
                    neque quod, fuga voluptas? Quidem non sed consequatur vel perferendis culpa eos illum corrupti, omnis
                    voluptatum similique consectetur excepturi facilis ratione odio saepe. Ad, aliquam, ratione nam
                    similique beatae, veniam recusandae ipsa omnis autem culpa quidem quisquam perferendis fugit obcaecati
                    eum nulla? Mollitia nisi provident illo aperiam voluptates dignissimos illum deleniti ducimus
                    consequuntur, facere veniam debitis quaerat iste nesciunt fuga! Voluptatibus consequatur iste, sint illo
                    vero quibusdam voluptates, nisi cupiditate maiores pariatur accusantium?
                </p>
                <div
                    class="flex items-center justify-between mt-3 text-gray-600 dark:text-gray-400"
                >
                    <a href="#"
                        class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">
                        voir plus
                    </a>
                    <span class="text-sm">Publié le: <span class="font-semibold">17/02/2024</span></span>
                </div>
                <hr class="my-2 border border-gray-300">
            </div>
            <div>
                <img src="{{ asset('assets/pot.webp') }}" alt=""
                    class="float-left object-cover w-1/3 rounded-l-lg h-1/4">
                <h1 class="mb-3 text-3xl font-bold text-teal-900">Titre de l'annonce 3</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, aliquam aperiam! Vitae voluptas
                    obcaecati tempore harum sunt ipsum sapiente ad veritatis eum est iste magni repellat, delectus minima
                    excepturi, reiciendis impedit? Aut voluptatum quo sunt vel aliquam culpa beatae exercitationem minus et
                    neque quod, fuga voluptas? Quidem non sed consequatur vel perferendis culpa eos illum corrupti, omnis
                    voluptatum similique consectetur excepturi facilis ratione odio saepe. Ad, aliquam, ratione nam
                    similique beatae, veniam recusandae ipsa omnis autem culpa quidem quisquam perferendis fugit obcaecati
                    eum nulla? Mollitia nisi provident illo aperiam voluptates dignissimos illum deleniti ducimus
                    consequuntur, facere veniam debitis quaerat iste nesciunt fuga! Voluptatibus consequatur iste, sint illo
                    vero quibusdam voluptates, nisi cupiditate maiores pariatur accusantium?
                </p>
                <div
                    class="flex items-center justify-between mt-3 text-gray-600 dark:text-gray-400"
                >
                    <a href="#"
                        class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">
                        voir plus
                    </a>
                    <span class="text-sm">Publié le: <span class="font-semibold">02/08/2024</span></span>
                </div>
                <hr class="my-2 border border-gray-300">
            </div>
        </div>
        <div class="sticky z-0 w-2/6 bg-white border border-gray-200 rounded-lg shadow-sm top-20 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h2 class="mb-4 text-2xl font-bold text-teal-900">Catégories des annonces</h2>
                <ul class="space-y-4">
                    @foreach ($categories as $category)
                        <li>
                            <a href="#" class="text-teal-600 hover:underline">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

