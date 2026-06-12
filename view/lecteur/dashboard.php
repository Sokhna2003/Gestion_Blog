<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Blog - Dashboard Lecteur</title>
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
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center border border-white/30">
                <i class="fa-solid fa-shapes text-white/80 text-lg"></i>
            </div>
            <span class="text-xl font-bold tracking-wide">Gestion_Blog</span>
        </div>

        <nav class="flex-grow p-4 space-y-1 mt-6">
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold transition text-white">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg> Mon Espace
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg> Mes Favoris
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg> Mes Commentaires
            </a>
            <hr class="border-indigo-500 my-4 opacity-50">
            <a href="index.php"
                class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg font-medium transition text-indigo-100 hover:text-white">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg> Retour au Site
            </a>
        </nav>
    </aside>

    <div class="flex-grow flex flex-col min-w-0">

        <header class="bg-indigo-500 px-8 py-4 flex justify-between items-center shadow-md">
            <div class="relative w-96">
                <input type="text" placeholder="Rechercher un article sauvegardé..."
                    class="w-full bg-white text-gray-800 rounded-md pl-4 pr-10 py-1.5 text-sm focus:outline-none shadow-inner placeholder-gray-400">
                <i class="fa-solid fa-magnifying-glass absolute right-4 top-2.5 text-gray-500 text-sm"></i>
            </div>

            <div class="flex items-center gap-5 text-white">
                <button class="hover:text-indigo-200 transition text-lg"><i class="fa-solid fa-sun"></i></button>
                <button class="hover:text-indigo-200 transition text-lg"><i class="fa-solid fa-moon"></i></button>
                <button class="hover:text-indigo-200 transition text-lg relative">
                    <i class="fa-solid fa-bell"></i>
                    <span class="absolute top-0.5 right-0.5 bg-red-500 w-1.5 h-1.5 rounded-full"></span>
                </button>
                <img src="https://unsplash.com" alt="Lecteur Avatar"
                    class="w-8 h-8 rounded-full object-cover border border-white/50 shadow-sm ml-2">
            </div>
        </header>

        <main class="p-8 space-y-6 flex-grow">

            <div
                class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex justify-between items-center relative overflow-hidden min-h-[140px]">
                <div class="space-y-2 z-10">
                    <h2 class="text-3xl font-black text-gray-900 tracking-tight">Ravi de vous revoir, Fatou</h2>
                    <p class="text-base text-gray-400 font-medium">Retrouvez vos lectures en cours et vos articles
                        enregistrés.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">

                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div class="flex items-center gap-2 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                        Articles Favoris
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mt-2">12</h3>
                </div>

                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div class="flex items-center gap-2 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        Commentaires rédigés
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mt-2">8</h3>
                </div>

                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
                    <div class="flex items-center gap-2 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2z">
                            </path>
                        </svg>
                        Heures de Lecture
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mt-2">4.5h</h3>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 w-full">
                <h4 class="text-xl font-bold text-gray-900 mb-6 px-2">Mes Articles Enregistrés</h4>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 border-gray-200 text-base font-bold text-gray-800">
                                <th class="p-4 w-[40%]">Titre de l'article</th>
                                <th class="p-4 w-[20%]">Catégorie</th>
                                <th class="p-4 w-[20%]">Date d'enregistrement</th>
                                <th class="p-4 w-[20%] text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm text-gray-700">
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900">10 astuces de design UI indispensables</td>
                                <td class="p-4 text-gray-500">Design UI</td>
                                <td class="p-4">12/06/2026</td>
                                <td class="p-4 text-center">
                                    <button
                                        class="text-indigo-600 hover:text-indigo-800 font-bold transition mr-3 cursor-pointer">Lire</button>
                                    <button
                                        class="text-red-500 hover:text-red-700 font-medium transition cursor-pointer">Retirer</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900">Maîtriser la réactivité avec Tailwind CSS v4
                                </td>
                                <td class="p-4 text-gray-500">Intégration</td>
                                <td class="p-4">11/06/2026</td>
                                <td class="p-4 text-center">
                                    <button
                                        class="text-indigo-600 hover:text-indigo-800 font-bold transition mr-3 cursor-pointer">Lire</button>
                                    <button
                                        class="text-red-500 hover:text-red-700 font-medium transition cursor-pointer">Retirer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>


    </div>