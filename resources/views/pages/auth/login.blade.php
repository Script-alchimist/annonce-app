@extends('Layout.app')
@section('content')
    <div class="relative flex items-center justify-center min-h-screen bottom-20">
        <div
            class="flex flex-col w-4/6 gap-4 px-10 py-5 bg-white border border-gray-200 rounded-lg shadow-s dark:bg-gray-800 dark:border-gray-700">
            <h1 class="mb-3 text-3xl font-bold text-teal-900">Connexion</h1>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input 
                        type="email" name="email" id="email" required
                        class="block w-full px-3 py-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                        value="{{ old('email') }}"
                        autocomplete="email"
                    >
                    @if ($errors->has('email'))     
                        <span class="text-sm text-red-500">{{ $errors->first('email') }}</span>
                    @endif  
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <div class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                        <input 
                            type="password" name="password" id="password" required
                            class="block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                            autocomplete="current-password"
                        >
                        <input type="checkbox" name="" id="">
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-500">{{ $errors->first('password') }}</span>  
                    @endif
                </div>
                <button type="submit"
                    class="w-full px-4 py-3 text-white transition duration-200 bg-teal-600 rounded-lg hover:bg-teal-700">Se
                    connecter</button>
            </form>
            <p class="mt-5 text-sm text-gray-600">
                Vous n'avez pas de compte? 
                <a 
                    href="{{ route('register') }}"
                    class="text-teal-600 hover:underline">Inscrivez-vous
                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600">
                <a href="" class="text-teal-600 hover:underline">
                    Mot de passe oublié?
                </a>
            </p>
        </div>
    </div>
@endsection