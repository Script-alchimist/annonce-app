@extends('Layout.app')
@section('content')
    <div class="container flex items-start justify-between max-w-screen-xl gap-4 mx-auto mt-5">
        <div
            class="sticky z-0 w-2/6 bg-white border border-gray-200 rounded-lg shadow-sm top-20 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h2 class="mb-4 text-3xl font-bold text-teal-900">Gestionnaire d'annonce</h2>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="text-teal-600 hover:underline">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="text-teal-600 hover:underline">Mes annonces</a>
                    </li>
                    <li>
                        <a href="#" class="text-teal-600 hover:underline">Créer une annonce</a>
                    </li>
                    <li>
                        <a href="#" class="text-teal-600 hover:underline">Editer une annonce</a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="flex flex-col w-4/6 gap-4 px-10 py-5 mb-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
        >
            @yield('profile_content')
        </div>
    </div>
@endsection