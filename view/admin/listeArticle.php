<main class="p-6 space-y-6 flex-grow bg-[#f3f4f6]">

    <!--  BARRE DE FILTRES COMPLÈTE (Haut) -->
    <div class="bg-white p-4 rounded-xl shadow-xs border border-gray-100 flex flex-col md:flex-row gap-4 items-center justify-between">
        <div class="flex flex-wrap items-center gap-4 w-full md:w-auto">
            <div class="relative w-full md:w-64">
                <input type="text" placeholder="Recherche par Titre .........." 
                    class="w-full bg-slate-50 text-gray-800 rounded-md pl-4 pr-10 py-2 text-xs focus:outline-none shadow-inner placeholder-gray-400 font-medium">
                <div class="absolute right-3 top-2.5 text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
            <select class="bg-white border border-gray-200 rounded-md px-4 py-2 text-xs font-semibold text-gray-700 focus:outline-none cursor-pointer"><option>Catégorie</option></select>
            <select class="bg-white border border-gray-200 rounded-md px-4 py-2 text-xs font-semibold text-gray-700 focus:outline-none cursor-pointer"><option>Statut</option></select>
        </div>
        <div class="flex items-center gap-1 bg-gray-100 p-1 rounded-lg shrink-0">
            <button class="bg-indigo-600 text-white p-1.5 rounded-md"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg></button>
            <button class="text-gray-400 hover:text-gray-600 p-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
        </div>
    </div>

    <!--  TITRE DE LA MAQUETTE -->
    <div class="flex justify-between items-center px-1">
        <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Listes des Articles</h2>
        <button class="bg-indigo-700 hover:bg-indigo-800 text-white text-xs font-bold px-5 py-2.5 rounded-lg shadow-sm transition">
            Archiver
        </button>
    </div>

    <!--  GRILLE DE CARTES D'ARTICLES -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 w-full">
        
        <?php if (empty($articles)): ?>
            <p class="text-gray-500 col-span-full text-center py-12 bg-white rounded-xl border border-gray-100 font-medium">Aucun article sur le blog pour le moment.</p>
        <?php else: ?>
            <?php foreach ($articles as $art): ?>
                <div class="bg-white rounded-xl shadow-xs border border-gray-100 p-4 flex flex-col justify-between relative space-y-4">
                    
                    <!-- En-tête de carte avec case à cocher et badge de Statut conforme à l'image -->
                    <div class="flex justify-between items-start">
                        <input type="checkbox" class="w-3.5 h-3.5 rounded border-gray-300 accent-indigo-600 mt-1 cursor-pointer">
                        
                        <?php if ($art['statut'] === 'publie'): ?>
                            <span class="bg-red-500 text-white text-[9px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Publie</span>
                        <?php elseif ($art['statut'] === 'en_attente'): ?>
                            <span class="bg-[#00FF00] text-black text-[9px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Enattente</span>
                        <?php else: ?>
                            <span class="bg-amber-500 text-white text-[9px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Brouillon</span>
                        <?php endif; ?>
                    </div>

                    <!-- Image miniature centrale et titre -->
                    <div class="flex items-center gap-3">
                        <img src="<?php echo htmlspecialchars($art['image']); ?>" alt="Couverture" class="w-12 h-12 rounded-lg object-cover shrink-0 border border-gray-50">
                        <h3 class="text-xs font-bold text-gray-900 leading-tight line-clamp-2"><?php echo htmlspecialchars($art['titre']); ?></h3>
                    </div>

                    <!-- Métadonnées (Catégorie, Date) -->
                    <div class="grid grid-cols-2 gap-2 text-[10px] text-gray-400 font-semibold border-t border-b border-gray-50 py-2">
                        <div>Catégories<br><span class="text-gray-700 font-bold"><?php echo htmlspecialchars($art['categorie']); ?></span></div>
                        <div>Date<br><span class="text-gray-700 font-bold"><?php echo date('d/m/Y', strtotime($art['date_publication'])); ?></span></div>
                    </div>

                    <!-- Bloc Auteur de la maquette -->
                    <div class="text-[10px] space-y-0.5">
                        <p class="font-bold text-gray-800"><?php echo htmlspecialchars($art['prenom'] . ' ' . $art['nom']); ?></p>
                        <p class="text-gray-400 flex items-center gap-1"><svg class="w-3 h-3 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg> <?php echo htmlspecialchars($art['email']); ?></p>
                    </div>

                    <!--  MODIFICATION DES BOUTONS DE MODÉRATION DYNAMIQUES SELON LE STATUT -->
                    <div class="text-[10px] font-bold pt-2">
                        
                        <!--  L'article est en attente -->
                        <?php if ($art['statut'] === 'en_attente'): ?>
                            <div class="grid grid-cols-2 gap-2">
                                <a href="<?php echo path('admin', 'articles') . '&approve_id=' . $art['id_article']; ?>" 
                                   class="py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition text-center shadow-xs cursor-pointer">
                                   Publié
                                </a>
                                <a href="<?php echo path('admin', 'articles') . '&reject_id=' . $art['id_article']; ?>" 
                                   class="py-2 border border-gray-200 text-gray-700 rounded-md hover:bg-gray-50 transition text-center shadow-xs cursor-pointer">
                                   Rejeter
                                </a>
                            </div>

                        <!--  L'article est publié -->
                        <?php elseif ($art['statut'] === 'publie'): ?>
                            <div class="w-full">
                                <a href="<?php echo path('admin', 'articles') . '&reject_id=' . $art['id_article']; ?>" 
                                   class="block w-full py-2 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-md transition text-center shadow-xs cursor-pointer">
                                   Remettre en Brouillon
                                </a>
                            </div>

                        <!--  L'article est archivé / rejeté (Brouillon) -->
                        <?php else: ?>
                            <div class="w-full">
                                <a href="<?php echo path('admin', 'articles') . '&approve_id=' . $art['id_article']; ?>" 
                                   class="block w-full py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition text-center shadow-xs cursor-pointer">
                                   Républier l'article
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</main>
