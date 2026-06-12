<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog - Espace Lecteurs</title>
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
                <div
                    class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-black text-lg shadow-sm">
                    GB
                </div>
                <span class="text-xl font-bold tracking-tight text-gray-900">Gestion_<span
                        class="text-indigo-600">Blog</span></span>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-gray-600">
                <a href="#" class="text-indigo-600 transition">Accueil</a>
                <a href="#" class="hover:text-indigo-600 transition">Articles</a>
                <a href="#" class="hover:text-indigo-600 transition">À propos</a>
                <a href="#" class="hover:text-indigo-600 transition">Contact</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="login.php"
                    class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h7a3 3 0 013 3v1">
                        </path>
                    </svg>
                    Connexion
                </a>
            </div>
        </div>
    </header>

    <section class="relative bg-cover bg-center bg-no-repeat py-24 sm:py-32"
        style="background-image: url('https://unsplash.com');">
        <div class="absolute inset-0 bg-black/65 z-0"></div>

        <div class="relative max-w-4xl mx-auto text-center px-4 space-y-5 z-10">
            <span
                class="bg-indigo-600/90 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Tutoriels
                & Astuces</span>
            <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-tight drop-shadow-md">
                Découvrez le Blog de la Communauté Tech
            </h1>
            <p class="text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-medium drop-shadow-xs">
                Partage d'expériences, astuces d'intégration CSS et développement backend PHP écrits par nos auteurs
                passionnés.
            </p>
        </div>
    </section>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow w-full">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-xl font-bold text-gray-900 tracking-tight">Dernières publications</h3>
            <div class="h-px bg-gray-200 flex-grow mx-4 hidden sm:block"></div>
            <span class="text-xs font-medium text-gray-400 shrink-0">Mis à jour aujourd'hui</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/depositphotos_3485246-stock-photo-sunset.jpg" alt="UI Design"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Design
                            UI</span>
                        <span class="text-xs text-gray-400">Il y a 2h</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">10 astuces de design UI indispensables</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Guidez l'œil de vos lecteurs avec des tailles et des contrastes adaptés. Découvrez les secrets
                        d'un tableau d'administration moderne et lisible.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <img src="https://unsplash.com" alt="Moussa" class="w-7 h-7 rounded-full object-cover">
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Moussa Diop</p>
                            <p class="text-gray-400">Auteur vérifié</p>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/bird-8788491_1280.jpg" alt="Tailwind CSS"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-indigo-100 text-indigo-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Intégration</span>
                        <span class="text-xs text-gray-400">Hier</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">Maîtriser la réactivité avec Tailwind CSS v4</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Créer des tableaux complexes fluides sur smartphone et sur ordinateur est devenu un jeu d'enfant
                        grâce aux nouvelles utilités de grilles.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <img src="https://unsplash.com" alt="Pape" class="w-7 h-7 rounded-full object-cover">
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Pape Ba</p>
                            <p class="text-gray-400">Auteur Pro</p>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/perfect-glass-sphere-with-beautiful-nature-background-generative-ai-photo.jpg"
                        alt="PHP Security"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Backend</span>
                        <span class="text-xs text-gray-400">05 Juin 2026</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">Sécuriser vos requêtes de Blog avec PDO</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Évitez les injections SQL dans vos exercices de gestion de contenu en utilisant correctement les
                        requêtes préparées en PHP.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <div
                            class="w-7 h-7 bg-indigo-100 rounded-full flex items-center justify-center font-bold text-[10px] text-indigo-600">
                            AF</div>
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Awa Fall</p>
                            <p class="text-gray-400">Rédactrice</p>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </main>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow w-full">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-xl font-bold text-gray-900 tracking-tight">Dernières publications</h3>
            <div class="h-px bg-gray-200 flex-grow mx-4 hidden sm:block"></div>
            <span class="text-xs font-medium text-gray-400 shrink-0">Mis à jour aujourd'hui</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <!-- Zone Image de l'article -->
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/bird-8788491_1280.jpg" alt="Tailwind CSS"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-indigo-100 text-indigo-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Intégration</span>
                        <span class="text-xs text-gray-400">Hier</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">Maîtriser la réactivité avec Tailwind CSS v4</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Créer des tableaux complexes fluides sur smartphone et sur ordinateur est devenu un jeu d'enfant
                        grâce aux nouvelles utilités de grilles.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <img src="https://unsplash.com" alt="Pape" class="w-7 h-7 rounded-full object-cover">
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Pape Ba</p>
                            <p class="text-gray-400">Auteur Pro</p>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <!-- Zone Image de l'article -->
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/perfect-glass-sphere-with-beautiful-nature-background-generative-ai-photo.jpg"
                        alt="PHP Security"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Backend</span>
                        <span class="text-xs text-gray-400">05 Juin 2026</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">Sécuriser vos requêtes de Blog avec PDO</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Évitez les injections SQL dans vos exercices de gestion de contenu en utilisant correctement les
                        requêtes préparées en PHP.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <div
                            class="w-7 h-7 bg-indigo-100 rounded-full flex items-center justify-center font-bold text-[10px] text-indigo-600">
                            AF</div>
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Awa Fall</p>
                            <p class="text-gray-400">Rédactrice</p>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                <!-- Zone Image de l'article -->
                <div class="h-48 overflow-hidden relative">
                    <img src="asset/depositphotos_3485246-stock-photo-sunset.jpg" alt="UI Design"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 flex flex-col flex-grow space-y-3">
                    <div class="flex items-center justify-between">
                        <span
                            class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">Design
                            UI</span>
                        <span class="text-xs text-gray-400">Il y a 2h</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                        <a href="#">10 astuces de design UI indispensables</a>
                    </h4>
                    <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                        Guidez l'œil de vos lecteurs avec des tailles et des contrastes adaptés. Découvrez les secrets
                        d'un tableau d'administration moderne et lisible.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                        <img src="https://unsplash.com" alt="Moussa" class="w-7 h-7 rounded-full object-cover">
                        <div class="text-xs">
                            <p class="font-bold text-gray-900">Moussa Diop</p>
                            <p class="text-gray-400">Auteur vérifié</p>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </main>

    <footer class="bg-gray-900 text-gray-400 pt-12 pb-6 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div class="space-y-3">
                <span class="text-white font-bold text-lg">Gestion_Blog</span>
                <p class="text-xs">Une plateforme d'exercice robuste et moderne pour apprendre le PHP et l'intégration
                    Tailwind.</p>
            </div>
            <div>
                <h5 class="text-white text-sm font-bold mb-3">Navigation</h5>
                <ul class="text-xs space-y-2">
                    <li><a href="#" class="hover:text-white transition">Accueil</a></li>
                    <li><a href="#" class="hover:text-white transition">Articles récents</a></li>
                    <li><a href="login.php" class="hover:text-white transition">Espace d'Administration</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white text-sm font-bold mb-3">Mentions</h5>
                <p class="text-xs">Projet académique réalisé dans le cadre de l'apprentissage du développement web
                    dynamique.</p>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-800 pt-6 text-center text-xs">

        </div>
    </footer>