@extends('pages.profile.profiLayout')
@section('profile_content')
    <div class="flex flex-col items-center mb-8">
        <!-- Placeholder pour l'image de profil -->
        <img src="https://placehold.co/120x120/E0E0E0/333333?text=Profil" alt="Image de profil utilisateur"
            class="object-cover w-32 h-32 border-4 border-teal-500 rounded-full shadow-md dark:border-teal-400"
            onerror="this.onerror=null;this.src='https://placehold.co/120x120/E0E0E0/333333?text=Profil';">
    </div>

    <div class="space-y-6">
        <!-- Section Nom et Prénom -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Prénom</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{-- {{ $user->first_name ?? 'Non renseigné' }} --}}
                    Ousmane
                </p>
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nom</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{-- {{ $user->last_name ?? 'Non renseigné' }} --}}
                    Script
                </p>
            </div>
        </div>

        <!-- Section Email et Téléphone -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{-- {{ $user->email ?? 'Non renseigné' }} --}}
                    ousmane.script@gmail.com
                </p>
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Téléphone</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{-- {{ $user->phone ?? 'Non renseigné' }} --}}
                    +226 55 29 80 81
                </p>
            </div>
        </div>

        <!-- Section Profession et Membre depuis -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Profession</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{--  {{ $user->profession ?? 'Non renseignée' }} --}}
                    Développeur Web
                </p>
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Membre depuis</label>
                <p
                    class="px-4 py-3 text-base text-teal-600 border border-gray-300 rounded-lg shadow-sm bg-gray-50 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    {{-- {{ $user->created_at ? $user->created_at->format('d/m/Y') : 'Non disponible' }} --}}
                    01/01/2020
                </p>
            </div>
        </div>

        <!-- Section Statistiques (Nombre d'annonces) -->
        <div class="flex flex-col pt-6 mt-8 text-center border-t border-gray-200 dark:border-gray-700">
        <label class="flex items-start mb-3 text-lg font-bold text-teal-800 dark:text-gray-300">Mes Annonces</label>
            <div class="flex justify-between">
                <div class="flex items-center justify-center space-x-4">
                    <span class="text-6xl font-extrabold text-teal-600 dark:text-teal-400">
                        10
                    </span>
                    <span class="text-xl text-gray-700 dark:text-gray-300">annonces publiées</span>
                </div>
                <a href="#"
                    class="inline-flex items-center px-8 py-3 mt-6 text-base font-medium text-white transition duration-150 ease-in-out bg-teal-600 border border-transparent rounded-lg shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                    Voir mes annonces
                </a>
            </div>
        </div>
    </div>
@endsection
