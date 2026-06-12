<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Blog - Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
        --color-clifford: #da373d;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN FontAwesome officiel -->
    <link rel="stylesheet" href="https://cloudflare.com" />
    <style>
        /* Styles pour simuler fidèlement les graphiques de fond sans bibliothèque externe */
        .wave-bg {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 100%);
            clip-path: polygon(0% 80%, 15% 65%, 30% 75%, 45% 50%, 60% 70%, 75% 45%, 90% 60%, 100% 30%, 100% 100%, 0% 100%);
        }

        .wave-bg-light {
            background: #e0e7ff;
            clip-path: polygon(0% 85%, 15% 75%, 30% 80%, 45% 65%, 60% 78%, 75% 55%, 90% 70%, 100% 45%, 100% 100%, 0% 100%);
        }

        .main-chart-wave {
            background: linear-gradient(180deg, #4f46e5 0%, #818cf8 100%);
            clip-path: polygon(0% 90%, 5% 80%, 10% 83%, 15% 70%, 20% 73%, 25% 60%, 30% 65%, 35% 45%, 40% 55%, 45% 75%, 50% 90%, 55% 70%, 60% 85%, 65% 60%, 70% 80%, 75% 40%, 80% 82%, 85% 65%, 90% 55%, 95% 45%, 100% 40%, 100% 100%, 0% 100%);
        }
    </style>
</head>

<body class="bg-[#f3f4f6] font-sans min-h-screen flex">

    <!-- 1. BARRE LATÉRALE (Sidebar Violette) -->
    <aside class="w-64 bg-indigo-600 text-white flex flex-col min-h-screen shrink-0 shadow-lg">
        <!-- En-tête avec logo abstrait -->
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center border border-white/30">
                <i class="fa-solid fa-shapes text-white/80 text-lg"></i>
            </div>
            <span class="text-xl font-bold tracking-wide">Gestion_Blog</span>
        </div>

        <!-- Liens de navigation du menu -->
        <nav class="flex-grow p-4 space-y-1 mt-6">
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold transition text-white">
                <i class="fa-solid fa-house w-5 text-left text-sm"></i> Dashboard
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <i class="fa-solid fa-user w-5 text-left text-sm"></i> Utilisateurs
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <i class="fa-solid fa-pen-to-square w-5 text-left text-sm"></i> Articles
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <i class="fa-solid fa-comment w-5 text-left text-sm"></i> Commentaires
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <i class="fa-solid fa-eye-slash w-5 text-left text-sm"></i> Signalements
            </a>
        </nav>
    </aside>

    <!-- CONTAINER DU CONTENU DE DROITE -->
    <div class="flex-grow flex flex-col min-w-0">

        <!-- 2. BARRE SUPÉRIEURE (Topbar Violette) -->
        <header class="bg-indigo-500 px-8 py-4 flex justify-between items-center shadow-md">
            <!-- Zone de recherche -->
            <div class="relative w-96">
                <input type="text" placeholder="search"
                    class="w-full bg-white text-gray-800 rounded-md pl-4 pr-10 py-1.5 text-sm focus:outline-none shadow-inner placeholder-gray-400">
                <i class="fa-solid fa-magnifying-glass absolute right-4 top-2.5 text-gray-500 text-sm"></i>
            </div>

            <!-- Profil & Options -->
            <div class="flex items-center gap-5 text-white">
                <button class="hover:text-indigo-200 transition text-lg"><i class="fa-solid fa-sun"></i></button>
                <button class="hover:text-indigo-200 transition text-lg"><i class="fa-solid fa-moon"></i></button>
                <button class="hover:text-indigo-200 transition text-lg relative">
                    <i class="fa-solid fa-bell"></i>
                    <span class="absolute top-0.5 right-0.5 bg-red-500 w-1.5 h-1.5 rounded-full"></span>
                </button>
                <img src="https://unsplash.com" alt="Avatar"
                    class="w-8 h-8 rounded-full object-cover border border-white/50 shadow-sm ml-2">
            </div>
        </header>

        <!-- 3. ZONE DES MODULES (Main) -->
        <main class="p-8 space-y-6">

            <!-- BLOC DES 4 CARTES STATISTIQUES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Carte 1 : Nombre Utilisateurs (Violette) -->
                <div
                    class="bg-indigo-700 text-white rounded-xl p-5 shadow-md h-32 relative flex flex-col justify-between overflow-hidden">
                    <div>
                        <div
                            class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-indigo-200">
                            <i class="fa-solid fa-user text-xs"></i> Nombre Utilisateurs
                        </div>
                        <h3 class="text-2xl font-black mt-2">25</h3>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-12 wave-bg"></div>
                </div>

                <!-- Carte 2 : Articles en Attente (Blanche) -->
                <div
                    class="bg-white text-gray-800 rounded-xl p-5 shadow-sm h-32 relative border border-gray-100 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div
                            class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                            <i class="fa-solid fa-file-invoice text-xs text-indigo-500"></i> Articles en Attente
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">10</h3>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-12 wave-bg-light"></div>
                </div>

                <!-- Carte 3 : Commentaire Signalé (Violette) -->
                <div
                    class="bg-indigo-700 text-white rounded-xl p-5 shadow-md h-32 relative flex flex-col justify-between overflow-hidden">
                    <div>
                        <div
                            class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-indigo-200">
                            <i class="fa-solid fa-comment text-xs"></i> Commentaire Signalé
                        </div>
                        <h3 class="text-2xl font-black mt-2">18</h3>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-12 wave-bg"></div>
                </div>

                <!-- Carte 4 : Vues Globales (Blanche) -->
                <div
                    class="bg-white text-gray-800 rounded-xl p-5 shadow-sm h-32 relative border border-gray-100 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div
                            class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                            <i class="fa-solid fa-chart-simple text-xs text-indigo-500"></i> Vues Globales
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">10</h3>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-12 wave-bg-light"></div>
                </div>
            </div>

            <!-- CENTRAL : GRAPHIOUE D'ACTIVITÉ -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h4 class="text-lg font-bold text-gray-900 mb-6">Vue d'Ensemble de l'Activité</h4>

                <div class="relative flex">
                    <!-- Axe Y -->
                    <div
                        class="flex flex-col justify-between text-right text-xs text-gray-400 pr-4 h-48 w-10 shrink-0 select-none">
                        <span>20M</span>
                        <span>15M</span>
                        <span>10M</span>
                        <span>5M</span>
                        <span>0</span>
                    </div>

                    <!-- Graphique ondulé -->
                    <div class="flex-grow border-l border-b border-gray-200 h-48 relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 border-t border-gray-100 h-0"></div>
                        <div class="absolute inset-x-0 top-12 border-t border-gray-100 h-0"></div>
                        <div class="absolute inset-x-0 top-24 border-t border-gray-100 h-0"></div>
                        <div class="absolute inset-x-0 top-36 border-t border-gray-100 h-0"></div>

                        <div class="absolute inset-0 main-chart-wave opacity-90"></div>
                    </div>
                </div>

                <!-- Axe X -->
                <div class="flex pl-14 justify-between text-[10px] text-gray-400 mt-2 select-none">
                    <span class="w-full text-center">Janvier</span>
                    <span class="w-full text-center">Février</span>
                    <span class="w-full text-center">Mars</span>
                    <span class="w-full text-center">Avril</span>
                    <span class="w-full text-center">Mai</span>
                    <span class="w-full text-center">Juin</span>
                    <span class="w-full text-center">Juillet</span>
                </div>
            </div>

            <!-- 4. FILED DE MODÉRATION AVEC BORDURES VERTICALES -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h4 class="text-lg font-bold text-gray-900 mb-5">File de Moderation Urgentes</h4>
                <div class="space-y-3">

                    <!-- Ligne 1 : Awa Fall -->
                    <div
                        class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-[3px] border-indigo-600 gap-4 shadow-sm">
                        <div class="flex items-center gap-4 min-w-0">
                            <img src="https://unsplash.com" alt="Avatar"
                                class="w-10 h-10 rounded-full object-cover shrink-0">
                            <div class="truncate text-xs sm:text-sm">
                                <span class="font-bold text-gray-900 mr-2">Awa Fall</span>
                                <span class="text-gray-500">Un lecteur a écrit un commentaire qui a été signalé comme
                                    <span class="italic text-gray-600">"Contenu inapproprié"</span></span>
                            </div>
                        </div>
                        <div class="flex gap-1.5 shrink-0 text-[11px] font-bold">
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Valider</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Rejeter</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Suspendre</button>
                        </div>
                    </div>

                    <!-- Ligne 2 : Pape Ba -->
                    <div
                        class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-[3px] border-indigo-600 gap-4 shadow-sm">
                        <div class="flex items-center gap-4 min-w-0">
                            <img src="https://unsplash.com" alt="Avatar"
                                class="w-10 h-10 rounded-full object-cover shrink-0">
                            <div class="truncate text-xs sm:text-sm">
                                <span class="font-bold text-gray-900 mr-2">Pape Ba</span>
                                <span class="text-gray-500">Un auteur a écrit un article entier qui pose problème et qui
                                    a été signalé pour vérification</span>
                            </div>
                        </div>
                        <div class="flex gap-1.5 shrink-0 text-[11px] font-bold">
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Valider</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Rejeter</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Suspendre</button>
                        </div>
                    </div>

                    <!-- Ligne 3 : Awa Fall -->
                    <div
                        class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-[3px] border-indigo-600 gap-4 shadow-sm">
                        <div class="flex items-center gap-4 min-w-0">
                            <img src="https://unsplash.com" alt="Avatar"
                                class="w-10 h-10 rounded-full object-cover shrink-0">
                            <div class="truncate text-xs sm:text-sm">
                                <span class="font-bold text-gray-900 mr-2">Awa Fall</span>
                                <span class="text-gray-500">Un lecteur a écrit un commentaire qui a été signalé comme
                                    <span class="italic text-gray-600">"Contenu inapproprié"</span></span>
                            </div>
                        </div>
                        <div class="flex gap-1.5 shrink-0 text-[11px] font-bold">
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Valider</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Rejeter</button>
                            <button
                                class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Suspendre</button>
                        </div>
                    </div>

                </div>
            </div>