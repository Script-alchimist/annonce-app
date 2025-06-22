@extends('pages.profile.profiLayout')
@section('profile_content')
    <h1 class="mb-5 text-3xl font-bold text-teal-900">Créations d'annonce</h1>
    <div class="mb-5">
        <p class="text-gray-600 dark:text-gray-400">
            Vous pouvez créer une nouvelle annonce en remplissant le formulaire ci-dessous. Assurez-vous de fournir
            toutes les informations nécessaires pour que votre annonce soit complète et attrayante.
        </p>
    </div>

    <form action="{{-- route('ads.store') --}}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Annonce Title -->
        <div>
            <label for="title" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Titre de
                l'annonce</label>
            <input type="text" name="title" id="title" required
                class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                placeholder="Ex: Voiture à vendre, Appartement à louer">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Description
                détaillée</label>
            <textarea name="description" id="description" rows="6" required
                class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                placeholder="Décrivez votre annonce en détail..."></textarea>
        </div>

        <!-- Category and Price (aligned two by two) -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="category"
                    class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Catégorie</label>
                <select name="category" id="category" required
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base">
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="immobilier">Immobilier</option>
                    <option value="vehicules">Véhicules</option>
                    <option value="electronique">Électronique</option>
                    <option value="maison">Maison & Jardin</option>
                    <option value="services">Services</option>
                    <option value="emploi">Emploi</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <div>
                <label for="price" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Prix (en
                    CFA)</label>
                <input type="number" name="price" id="price" required min="0" step="any"
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: 50000">
            </div>
        </div>

        <!-- Location and Contact Phone (aligned two by two) -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="location"
                    class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Localisation</label>
                <input type="text" name="location" id="location" required
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: Ouagadougou, Zone A">
            </div>
            <div>
                <label for="contact_phone" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Numéro de
                    téléphone de contact</label>
                <input type="tel" name="contact_phone" id="contact_phone"
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: 71234567">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Ce numéro sera visible sur votre annonce.</p>
            </div>
        </div>

        <!-- Images Upload -->
        <div>
            <label for="images" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Images (max
                5)</label>
            <input type="file" name="images[]" id="images" multiple accept="image/*"
                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-100 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Fichiers supportés: JPG, PNG, GIF. Taille max: 2MB par
                image.</p>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full px-6 py-3 text-lg font-semibold text-white transition duration-150 ease-in-out bg-teal-600 rounded-lg shadow-md hover:bg-teal-700 focus:ring-teal-500 focus:ring-offset-2 focus:ring-2">
            Publier l'annonce
        </button>
    </form>
@endsection
