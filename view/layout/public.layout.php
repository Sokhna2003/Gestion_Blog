<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog - Espace Public</title>
    <script src="https://jsdelivr.net"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
</head>
<body class="bg-[#f9fafb] text-gray-800 font-sans min-h-screen flex flex-col">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-xs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-black text-lg shadow-sm">
                    GB
                </div>
                <span class="text-xl font-bold tracking-tight text-gray-900">Gestion_<span class="text-indigo-600">Blog</span></span>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-gray-600">
                <a href="<?= path('home', 'index') ?>" class="text-indigo-600 transition">Accueil</a>
                <a href="#" class="hover:text-indigo-600 transition">Articles</a>
                <a href="#" class="hover:text-indigo-600 transition">À propos</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="<?= path('auth', 'login') ?>" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    Connexion
                </a>
            </div>
        </div>
    </header>

    <!--  INJECTION AUTOMATIQUE DE TA VUE (view/home/home.php) -->
    <div class="flex-grow">
        <?= $content ?>
    </div>

    <footer class="bg-gray-900 text-gray-400 pt-12 pb-6 border-t border-gray-800 mt-auto">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div class="space-y-3">
                <span class="text-white font-bold text-lg">Gestion_Blog</span>
                <p class="text-xs">Une plateforme d'exercice robuste et moderne pour apprendre le PHP et l'intégration Tailwind.</p>
            </div>
            <div>
                <h5 class="text-white text-sm font-bold mb-3">Navigation</h5>
                <ul class="text-xs space-y-2">
                    <li><a href="<?= path('home', 'index') ?>" class="hover:text-white transition">Accueil</a></li>
                    <li><a href="<?= path('auth', 'login') ?>" class="hover:text-white transition">Espace d'Administration</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white text-sm font-bold mb-3">Mentions</h5>
                <p class="text-xs">Projet académique réalisé dans le cadre de l'apprentissage du développement web dynamique.</p>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-800 pt-6 text-center text-xs">
            <p>&copy; 2026 Gestion_Blog. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
