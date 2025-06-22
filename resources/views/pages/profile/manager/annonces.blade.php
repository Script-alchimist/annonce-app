@extends('pages.profile.profiLayout')
@section('profile_content')
    <div class="px-10 py-5 mb-2 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h1 class="text-2xl font-bold text-teal-900">Mes Annonces</h1>
    </div>
    <div>
                <img src="{{ asset('assets/pot2.jpg') }}" alt=""
                    class="float-right object-cover w-1/3 rounded-l-lg h-1/4">
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
                    <div class="flex gap-2">
                        <a href="{{ route('article', 'WZEPOAIEU23') }}"
                            class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">
                            voir plus
                        </a>
                        <a href="{{-- route('profile.manager.edit', 'WZEPOAIEU23') --}}"
                            class="px-4 py-2 text-white transition duration-200 bg-orange-300 rounded-lg hover:bg-orange-500">
                            Editer
                        </a>
                        <a href="{{-- route('profile.manager.delete', 'WZEPOAIEU23') --}}"
                            class="px-4 py-2 text-white transition duration-200 bg-red-600 rounded-lg hover:bg-red-700">
                            Supprimer
                        </a>
                    </div>
                    <span class="text-sm">Publié le: <span class="font-semibold">12/10/2023</span></span>
                </div>
                <hr class="my-3 border border-gray-300">
            </div>
@endsection
