@extends('pages.profile.profiLayout')
@section('profile_content')
    <h1 class="mb-5 text-3xl font-bold text-teal-900">Editer une annonce</h1>
    <form action="{{-- route('manager.update', $article->id) --}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'annonce</label>
            <input 
                type="text" name="title" id="title" value="{{-- $article->title --}}"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
            >
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea 
                name="description" id="description" rows="6"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
            >
            {{-- $article->description --}}
        </textarea>
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