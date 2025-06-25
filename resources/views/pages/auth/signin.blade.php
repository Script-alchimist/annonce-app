@extends('Layout.app')
@section('title', 'Register')
@section('content')
    <div class="flex items-center justify-center min-h-screen p-4 bg-gray-100 dark:bg-gray-900">
        <div
            class="w-full max-w-4xl p-8 bg-white border border-gray-200 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700">
            <h1 class="mb-8 text-4xl font-extrabold text-center text-teal-900 dark:text-teal-400">Créer un Compte</h1>

            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label for="firstname"
                            class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Prénom</label>
                        <input 
                            type="text" name="firstname" id="firstname" required autofocus
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="Votre prénom"
                            value="{{ old('firstname') }}"
                        >
                        @error('firstname')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="lastname"
                            class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nom</label>
                        <input 
                            type="text" name="lastname" id="lastname" 
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="Votre nom"
                            value="{{ old('lastname') }}"
                        >
                        @error('lastname')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>         
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label for="profession"
                            class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Profession</label>
                        <input type="text" name="profession" id="profession"
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="Ex: Développeur, Commercial"
                            value="{{ old('profession') }}"
                        >
                        @error('profession')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" required
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="votre.email@exemple.com"
                            value="{{ old('email') }}"
                        >
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p> 
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label for="phone" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Numéro
                            de téléphone</label>
                        <input type="tel" name="phone" id="phone"
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="Ex:+226 55298081"
                            value="{{ old('phone') }}">
                           
                        @error('phone')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p> 
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Mot de
                            passe</label>
                        <input type="password" name="password" id="password" required
                            class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                            placeholder="Minimum 8 caractères"
                            value="{{ old('password') }}">
                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password_confirmation"
                        class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Confirmer le mot de
                        passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="block w-full px-4 py-3 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:border-gray-600 focus:outline-none focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:text-white sm:text-base"
                        placeholder="Répétez votre mot de passe"
                        value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full px-6 py-3 text-lg font-semibold text-white transition duration-150 ease-in-out bg-teal-600 rounded-lg shadow-md hover:bg-teal-700 focus:ring-teal-500 focus:ring-offset-2 focus:ring-2">
                    S'inscrire
                </button>
            </form>

            <p class="mt-8 text-base text-center text-gray-600 dark:text-gray-400">
                Vous avez déjà un compte ?
                <a href="{{ route('login') }}"
                    class="font-medium text-teal-600 hover:text-teal-700 dark:text-teal-400 dark:hover:text-teal-300 hover:underline">Connectez-vous
                    ici</a>
            </p>

            <div class="flex flex-col items-center mt-6">
                <p class="mb-4 text-gray-600 dark:text-gray-400">Ou s'inscrire avec:</p>
                <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-callback="handleCredentialResponse"
                    data-auto_prompt="false">
                </div>
                <div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="signup_with"
                    data-shape="rectangular" data-logo_alignment="left">
                </div>
            </div>
        </div>
    </div>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        // Cette fonction sera appelée par Google après la connexion
        function handleCredentialResponse(response) {
            const idToken = response.credential;
            console.log("Google ID Token:", idToken);

            // Envoyer le token à votre backend pour vérification et création/connexion de l'utilisateur
            fetch("/api/auth/google/register", { // Assurez-vous que cette route existe sur votre backend
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        token: idToken
                    }),
                })
                .then(res => res.json())
                .then(data => {
                    console.log("Réponse du backend:", data);
                    if (data.success) {
                        // Rediriger l'utilisateur vers son tableau de bord ou la page d'accueil
                        window.location.href = "/dashboard"; // Ou votre route de succès
                    } else {
                        alert("Erreur lors de l'inscription/connexion avec Google: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Erreur lors de l'envoi du token Google au backend:", error);
                    alert("Une erreur inattendue est survenue lors de l'inscription.");
                });
        }
    </script>
@endsection
