@extends('pages.profile.profiLayout')
@section('profile_content')
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="mb-5 text-3xl font-bold text-teal-900">Editer une annonce</h1>
    <form action="{{ route('annonce.edit', $annonce->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'annonce</label>
            <input 
                type="text" name="title" id="title" value="{{ $annonce->title }}"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
            >
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea 
                name="description" id="description" rows="6"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
            >
            {{ $annonce->description }}
        </textarea>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="category_id" :value="__('Catégorie')"
                    class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Catégorie</label>
                <select name="category_id" id="category_id" required
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base">
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label 
                    for="price" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300"
                >
                    Prix (en CFA)
                </label>
                <input 
                    type="number" name="price" id="price" required min="0" step="any"
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: 50000"
                    value="{{old('price')}}"
                >
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="location"
                    class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Localisation</label>
                <input 
                    type="text" name="location" id="location" required
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: Ouagadougou, Zone A"
                    value="{{old('location')}}"
                >
            </div>
            <div>
                <label for="contact_phone" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Numéro de
                    téléphone de contact</label>
                <input 
                    type="tel" name="phone" id="phone"
                    class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                    placeholder="Ex: +226 55298081"
                    value="{{old('phone')}}"
                >
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Ce numéro sera visible sur votre annonce.</p>
            </div>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500">
        </div>
        <button type="submit"
            class="px-4 py-2 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">Mettre à jour</button>
    </form>
@endsection