<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Blog - Dashboard</title>
    <script src="https://tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
        --color-clifford: #da373d;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cloudflare.com" />
    <style>
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

    <!-- BARRE LATÉRALE DYNAMIQUE SELON LE RÔLE -->
    <aside class="w-64 bg-indigo-600 text-white flex flex-col min-h-screen shrink-0 shadow-lg">
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center border border-white/30">
                <i class="fa-solid fa-shapes text-white/80 text-lg"></i>
            </div>
            <span class="text-xl font-bold tracking-wide">Gestion_Blog</span>
        </div>

        <nav class="flex-grow p-4 space-y-1 mt-6">
            
            <!--  MENU SI L'UTILISATEUR EST ADMIN -->
            <?php if (hasRole('admin')): ?>
                <a href="<?php echo path('admin', 'dashboard'); ?>" class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold text-white">
                    <i class="fa-solid fa-house w-5 text-sm"></i> Dashboard 
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <i class="fa-solid fa-user w-5 text-sm"></i> Utilisateurs
                </a>
                <a href="<?php echo path('admin', 'categories'); ?>" class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold text-white">
                    <i class="fa-solid fa-tags w-5 text-sm"></i> Catégories
                </a>
                <a href="<?= path('admin', 'articles') ?>" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <i class="fa-solid fa-pen-to-square w-5 text-sm"></i> Articles
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <i class="fa-solid fa-comment w-5 text-sm"></i> Commentaires
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <i class="fa-solid fa-eye-slash w-5 text-sm"></i> Signalements
                </a>

            <!--  MENU SI L'UTILISATEUR EST AUTEUR -->
            <?php elseif (hasRole('auteur')): ?>
                <a href="<?php echo path('auteur', 'dashboard'); ?>" class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold text-white">
                    <i class="fa-solid fa-house w-5 text-sm"></i> Dashboard
                </a>
                <a href="<?= path('auteur', 'listeArticles'); ?>" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <i class="fa-solid fa-pen-to-square w-5 text-sm"></i> Mes Articles
                </a>

            <!--  MENU SI L'UTILISATEUR EST LECTEUR -->
            <?php elseif (hasRole('lecteur')): ?>
                <a href="<?php echo path('lecteur', 'dashboard'); ?>" class="flex items-center gap-4 px-4 py-3 bg-white/10 rounded-lg font-semibold text-white">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg> Mon Espace
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> Mes Favoris
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 hover:bg-white/5 rounded-lg text-indigo-100 hover:text-white font-medium">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> Mes Commentaires
                </a>
            <?php endif; ?>

            <!-- LIEN COMMUN DE DÉCONNEXION -->
            <hr class="border-indigo-500 my-4 opacity-50">
            <a href="<?= path('auth', 'logout') ?>" class="flex items-center gap-4 px-4 py-3 hover:bg-red-600/20 rounded-lg text-red-200 hover:text-white font-semibold transition">
                <i class="fa-solid fa-right-from-bracket w-5 text-sm"></i> Déconnexion
            </a>
        </nav>
    </aside>

    <!-- ZONE DE CONTENU DROITE DIRECTEMENT LIÉE À LA VUE INJECTÉE -->
    <div class="flex-grow flex flex-col min-w-0">
        
        <!-- BARRE SUPÉRIEURE COMMUNE -->
        <header class="bg-indigo-500 px-8 py-4 flex justify-between items-center shadow-md text-white">

            <div class="relative w-96">
                <input type="text" placeholder="search"
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
                <span class="text-sm font-medium"><strong><?= $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom'] ?></strong></span>
            <img src="<?= $_SESSION['user']['photo'] ?>" alt="Avatar" class="w-8 h-8 rounded-full object-cover border border-white/50">

            </div>
            
        </header>

        <?= $content ?>
        
    </div>

</body>
</html>
