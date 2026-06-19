
<section class="relative bg-cover bg-center bg-no-repeat py-24 sm:py-32" style="background-image: url('https://unsplash.com');">
    <!-- Filtre sombre pour garantir le contraste du texte blanc -->
    <div class="absolute inset-0 bg-black/65 z-0"></div>
    
    <div class="relative max-w-4xl mx-auto text-center px-4 space-y-5 z-10">
        <span class="bg-indigo-600/90 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Tutoriels & Astuces</span>
        <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-tight drop-shadow-md">
            Découvrez le Blog de la Communauté Tech
        </h1>
        <p class="text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-medium drop-shadow-xs">
            Partage d'expériences, astuces d'intégration CSS et développement backend PHP écrits par nos auteurs passionnés.
        </p>
    </div>
</section>

<!--  LES ARTICLES PUBLIÉS AVEC IMAGES -->
<main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow w-full">
    <div class="flex items-center justify-between mb-8">
        <h3 class="text-xl font-bold text-gray-900 tracking-tight">Dernières publications</h3>
        <div class="h-px bg-gray-200 flex-grow mx-4 hidden sm:block"></div>
        <span class="text-xs font-medium text-gray-400 shrink-0">Mis à jour aujourd'hui</span>
    </div>

    <!-- Grille Responsive des Articles Dynamiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <?php if (empty($articles)): ?>
            <p class="text-gray-500 col-span-full text-center py-12">Aucun article n'a encore été publié.</p>
        <?php else: ?>
            <?php foreach ($articles as $art): ?>
                <article class="bg-white rounded-2xl border border-gray-100 shadow-xs hover:shadow-md transition duration-300 flex flex-col overflow-hidden group">
                    <!-- Zone Image de l'article -->
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?= htmlspecialchars($art['image']) ?>" alt="Couverture" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="bg-indigo-100 text-indigo-800 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase">
                                <?= htmlspecialchars($art['categorie']) ?>
                            </span>
                            <span class="text-xs text-gray-400">
                                <?= date('d/m/Y', strtotime($art['date_publication'])) ?>
                            </span>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 hover:text-indigo-600 transition leading-snug">
                            <a href="#">
                                <?= htmlspecialchars($art['titre']) ?>
                            </a>
                        </h4>
                        <p class="text-sm text-gray-500 line-clamp-3 flex-grow">
                            <?= htmlspecialchars($art['contenu']) ?>
                        </p>
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-50 mt-auto">
                            <img src="<?= htmlspecialchars($art['photo']) ?>" alt="Auteur" class="w-7 h-7 rounded-full object-cover">
                            <div class="text-xs">
                                <p class="font-bold text-gray-900"><?= htmlspecialchars($art['prenom'] . ' ' . $art['nom']) ?></p>
                                <p class="text-gray-400">Auteur</p>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</main>
