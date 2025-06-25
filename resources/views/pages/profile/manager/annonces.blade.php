@extends('pages.profile.profiLayout')
@section('profile_content')
    <div class="px-10 py-5 mb-2 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h1 class="text-2xl font-bold text-teal-900">Mes Annonces</h1>
    </div>
    <div>
        @foreach ($annonces as $annonce)       
            <img src="{{ asset('assets/pot2.jpg') }}" alt="" class="float-right object-cover w-1/3 rounded-l-lg h-1/4">
            <h1 class="mb-3 text-3xl font-bold text-teal-900">{{$annonce->title}}</h1>
            <p>
                {{$annonce->description}}
            </p>
            <div class="flex items-center justify-between mt-3 text-gray-600 dark:text-gray-400">
                <div class="flex gap-2">
                    <a href="{{ route('article', $annonce->id) }}"
                        class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">
                        voir plus
                    </a>
                    <a 
                        href="{{ route('annonce.edit', $annonce->id) }}"
                        class="px-4 py-2 text-white transition duration-200 bg-orange-300 rounded-lg hover:bg-orange-500"
                    >
                        Editer
                    </a>
                    <a href="{{ route('delete-annonce', $annonce->id) }}"
                        class="px-4 py-2 text-white transition duration-200 bg-red-600 rounded-lg hover:bg-red-700">
                        Supprimer
                    </a>
                </div>
                <span class="text-sm">Publié le: <span class="font-semibold">{{$annonce->created_at}}</span></span>
            </div>
            <hr class="my-3 border border-gray-300">
        @endforeach
    </div>
@endsection
