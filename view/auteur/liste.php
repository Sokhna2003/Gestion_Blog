<main class="p-6 space-y-6 flex-grow bg-[#f3f4f6]">

    <!--  BARRE DE RECHERCHE ET FILTRES (HAUT) -->
    <div class="bg-white p-4 rounded-xl shadow-xs border border-gray-100 flex flex-col md:flex-row gap-4 items-center justify-between">
        <div class="flex flex-wrap items-center gap-4 w-full md:w-auto">
            <!-- Recherche par Titre -->
            <div class="relative w-full md:w-64">
                <input type="text" placeholder="Recherche par Titre .........." 
                    class="w-full bg-slate-50 text-gray-800 rounded-md pl-4 pr-10 py-2 text-xs focus:outline-none shadow-inner placeholder-gray-400 font-medium">
                <div class="absolute right-3 top-2.5 text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
            
            <!-- Sélecteur Catégorie -->
            <div class="relative">
                <select class="appearance-none bg-white border border-gray-200 rounded-md px-4 py-2 pr-8 text-xs font-semibold text-gray-700 focus:outline-none cursor-pointer">
                    <option>Catégorie</option>
                </select>
                <div class="absolute right-3 top-3 text-gray-400 pointer-events-none">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <!-- Sélecteur Statut -->
            <div class="relative">
                <select class="appearance-none bg-white border border-gray-200 rounded-md px-4 py-2 pr-8 text-xs font-semibold text-gray-700 focus:outline-none cursor-pointer">
                    <option>Statut</option>
                </select>
                <div class="absolute right-3 top-3 text-gray-400 pointer-events-none">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>
        </div>

        <!-- Boutons de bascule de vue (Grid/Liste) -->
        <div class="flex items-center gap-1 bg-gray-100 p-1 rounded-lg shrink-0">
            <button class="bg-indigo-600 text-white p-1.5 rounded-md"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg></button>
            <button class="text-gray-400 hover:text-gray-600 p-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
        </div>
    </div>

    <!--  TITRE DE SECTION ET BOUTON RÉDIGER -->
    <div class="flex justify-between items-center px-1">
        <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Listes de mes Articles</h2>
        <a href="<?= path('auteur', 'ajoutArticle') ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold px-4 py-2.5 rounded-lg shadow-sm transition">
            Rediger Article
        </a>
    </div>

    <!--  GRILLE DE CARTES DYNAMIQUE (3 colonnes sur grand écran) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
        
        <?php if (empty($articles)): ?>
            <p class="text-gray-500 col-span-full text-center py-12 bg-white rounded-xl border border-gray-100 font-medium">Vous n'avez rédigé aucun article pour le moment.</p>
        <?php else: ?>
            <?php foreach ($articles as $art): ?>
                <div class="bg-white rounded-2xl shadow-xs border border-gray-100 overflow-hidden flex flex-col p-4 space-y-4">
                    <!-- Image de couverture -->
                    <div class="h-44 w-full overflow-hidden rounded-xl bg-gray-100">
                        <img src="<?= htmlspecialchars($art['image']) ?>" alt="Couverture" class="w-full h-full object-cover">
                    </div>

                    <!-- Infos textuelles de la carte -->
                    <div class="space-y-2 flex-grow flex flex-col justify-between">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-gray-900 leading-snug line-clamp-2"><?= htmlspecialchars($art['titre']) ?></h3>
                            
                            <!-- Icône Catégorie -->
                            <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4z"></path></svg>
                                <span><?= htmlspecialchars($art['categorie']) ?></span>
                            </div>

                            <!-- Icône Date -->
                            <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span><?= date('d/m/Y', strtotime($art['date_publication'])) ?></span>
                            </div>
                        </div>

                        <!-- Étoiles, Compteurs et Badges de statut (Bas de carte) -->
                        <div class="pt-4 border-t border-gray-50 flex items-center justify-between mt-auto">
                            <!-- Section Étoiles + Compteur de vues simulés ou dynamiques -->
                            <div class="text-[10px] text-gray-400 font-semibold space-y-0.5">
                                <div class="text-amber-400 tracking-tighter flex gap-0.5">★★★★★</div>
                                <div><?= $art['vues'] ?> Vues</div>
                            </div>

                            <!-- Badge Statut (Exactement Rouge pour publié, Violet pour en attente) -->
                            <div>
                                <?php if ($art['statut'] === 'publie'): ?>
                                    <span class="bg-red-600 text-white text-[9px] font-bold px-3 py-1 rounded-md uppercase tracking-wider shadow-xs">Publié</span>
                                <?php else: ?>
                                    <span class="bg-indigo-600 text-white text-[9px] font-bold px-3 py-1 rounded-md uppercase tracking-wider shadow-xs">En attente</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</main>
