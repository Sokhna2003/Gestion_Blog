<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Blog - Dashboard Auteur</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
        --color-clifford: #da373d;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-[#f3f4f6] font-sans min-h-screen flex">

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
                <i class="fa-solid fa-pen-to-square w-5 text-left text-sm"></i> Mes Articles
            </a>

        </nav>
    </aside>

    <!-- CONTAINER DU CONTENU DE DROITE -->
    <div class="flex-grow flex flex-col min-w-0">

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

        <main class="p-8 space-y-6">

            <!-- BLOC BIENVENUE MOUSSA -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex justify-between items-center relative overflow-hidden">
                <div class="space-y-2 z-10">
                    <h2 class="text-2xl font-bold text-gray-900">Bienvenue Moussa</h2>
                    <p class="text-sm text-gray-400">Rédigez de nouveaux contenus et suivez l'impact de vos publications.</p>
                    <div class="pt-2">
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl shadow-sm transition">
                            Rediger un article
                        </button>
                    </div>
                </div>
                <!-- Illustration bonhomme de droite -->
                <div class="hidden md:block w-36 h-28 mr-6 text-indigo-200 shrink-0">
                    <svg viewBox="0 0 200 150" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-300">
                        <!-- Bureau / Écran -->
                        <path d="M20,130 L180,130" stroke-width="4" stroke="currentColor" class="text-gray-400" />
                        <path d="M40,130 L50,100 L110,100 L100,130" />
                        <!-- Personnage simplifié -->
                        <circle cx="130" cy="50" r="18" fill="#f3f4f6" />
                        <path d="M110,110 C110,80 150,80 150,110 Z" fill="#e0e7ff" />
                        <path d="M125,68 L125,90" stroke="currentColor" stroke-width="3" />
                    </svg>
                </div>
            </div>

            <!-- GRILLE DES 4 CARTES STATISTIQUES AVEC PROGRESSION -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Carte 1 : Articles en Lignes -->
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                            <i class="fa-solid fa-pen-to-square text-indigo-600"></i> Articles en Lignes
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">24</h3>
                    </div>
                    <div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full w-[30%]"></div>
                        </div>
                        <span class="text-[9px] text-gray-400 mt-1 block">30 % Complete</span>
                    </div>
                </div>

                <!-- Carte 2 : Vues de mes Articles -->
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                            <i class="fa-solid fa-eye text-indigo-600"></i> Vues de mes Articles
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">1.5K</h3>
                    </div>
                    <div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-emerald-500 h-full w-[80%]"></div>
                        </div>
                        <span class="text-[9px] text-gray-400 mt-1 block">80 % Complete</span>
                    </div>
                </div>

                <!-- Carte 3 : Nouveaux Commentaires -->
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                            <i class="fa-solid fa-comment text-indigo-600"></i> Nouveaux Commentaires
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">15</h3>
                    </div>
                    <div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-indigo-600 h-full w-[50%]"></div>
                        </div>
                        <span class="text-[9px] text-gray-400 mt-1 block">50 % Complete</span>
                    </div>
                </div>

                <!-- Carte 4 : En attente de l'Admin -->
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div>
                        <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                            <i class="fa-solid fa-user-clock text-indigo-600"></i> En attente de leAdmin
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mt-2">2</h3>
                    </div>
                    <div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-amber-500 h-full w-[20%]"></div>
                        </div>
                        <span class="text-[9px] text-gray-400 mt-1 block">20 % Complete</span>
                    </div>
                </div>
            </div>

            <!-- ENCADRÉ BLEU : TABLEAU DES DERNIERS ARTICLES -->
                        <!-- TABLEAU ÉPURÉ : MES DERNIERS ARTICLES SOUMIS -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h4 class="text-xl font-bold text-gray-900 mb-6 px-2">Mes derniers Articles soumis</h4>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 border-gray-200 text-base font-bold text-gray-800">
                                <th class="p-4 w-[25%]">Titre</th>
                                <th class="p-4 w-[35%]">Contenue</th>
                                <th class="p-4 w-[15%]">Date</th>
                                <th class="p-4 w-[10%] text-center">Vues</th>
                                <th class="p-4 w-[15%] text-center">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm text-gray-700">
                            
                            <!-- Ligne 1 : Publier (Vert Fluo Texte Noir) -->
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900">10 astuces de design UI</td>
                                <td class="p-4 text-gray-550">Guidez l'œil avec des tailles</td>
                                <td class="p-4">10/05/2026</td>
                                <td class="p-4 text-center font-medium">1.2</td>
                                <td class="p-4 text-center">
                                    <span class="bg-[#00FF00] text-black text-xs font-bold px-4 py-1 rounded-full inline-block shadow-sm">Publier</span>
                                </td>
                            </tr>

                            <!-- Ligne 2 : En attente (Orange Texte Blanc) -->
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900">10 astuces de design UI</td>
                                <td class="p-4 text-gray-550">Guidez l'œil avec des tailles</td>
                                <td class="p-4">10/05/2026</td>
                                <td class="p-4 text-center font-medium">0</td>
                                <td class="p-4 text-center">
                                    <span class="bg-[#FFA500] text-white text-xs font-bold px-3 py-1 rounded-full inline-block shadow-sm">En attente de publication</span>
                                </td>
                            </tr>

                            <!-- Ligne 3 : Publier (Vert Fluo Texte Noir) -->
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900">10 astuces de design UI</td>
                                <td class="p-4 text-gray-550">Guidez l'œil avec des tailles</td>
                                <td class="p-4">10/05/2026</td>
                                <td class="p-4 text-center font-medium">0</td>
                                <td class="p-4 text-center">
                                    <span class="bg-[#00FF00] text-black text-xs font-bold px-4 py-1 rounded-full inline-block shadow-sm">Publier</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

                        

        </main>

    </div>