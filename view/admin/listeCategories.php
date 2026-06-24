<main class="p-8 space-y-6 flex-grow bg-[#f3f4f6]">

    <!-- En-tête avec couleur de fond pour le titre de section -->
    <div class="bg-indigo-900 text-white p-6 rounded-2xl shadow-sm border border-indigo-950 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-black tracking-tight">Liste des Catégories</h2>
            <p class="text-sm text-indigo-200">Consultez, recherchez et gérez les catégories du blog.</p>
        </div>
        <a href="<?php echo path('admin', 'ajoutCategorie'); ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-sm transition">
            + Nouvelle Catégorie
        </a>
    </div>

    <!-- BARRE DE RECHERCHE ET FILTRAGE -->
    <form action="<?php echo path('admin', 'categories'); ?>" method="GET" class="bg-white p-4 rounded-xl shadow-xs border border-gray-100 flex flex-col sm:flex-row gap-4 items-center">
        <!-- Remplir les champs cachés pour ne pas perdre la route en méthode GET -->
        <input type="hidden" name="controller" value="admin">
        <input type="hidden" name="action" value="categories">

        <!-- Recherche textuelle -->
        <div class="relative w-full sm:w-64">
            <input type="text" name="search" placeholder="Rechercher une catégorie..." value="<?= htmlspecialchars($search ?? '') ?>"
                class="w-full bg-slate-50 text-gray-800 rounded-md pl-4 pr-10 py-2 text-xs focus:outline-none shadow-inner border border-gray-100 placeholder-gray-400 font-medium">
        </div>
        
        <!-- Filtre Date -->
        <div class="w-full sm:w-48">
            <input type="date" name="date_filtre" value="<?= htmlspecialchars($date_filtre ?? '') ?>"
                class="w-full bg-slate-50 text-gray-800 rounded-md px-3 py-2 text-xs focus:outline-none border border-gray-100 font-medium cursor-pointer">
        </div>

        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold px-4 py-2 rounded-lg transition cursor-pointer">
            Filtrer
        </button>
        <?php if(!empty($search) || !empty($date_filtre)): ?>
            <a href="<?= path('admin', 'categories') ?>" class="text-xs font-semibold text-gray-400 hover:text-indigo-600 transition">Effacer</a>
        <?php endif; ?>
    </form>

    <!-- LE TABLEAU DES CATÉGORIES -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden w-full">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <!-- En-tête du tableau avec couleur de fond -->
                    <tr class="bg-indigo-600 text-white text-sm font-bold">
                        <th class="p-4 w-[45%]">Nom de la Catégorie</th>
                        <th class="p-4 w-[20%] text-center">Date de création</th>
                        <th class="p-4 w-[20%] text-center rounded-tr-2xl">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-xs sm:text-sm text-gray-700">
                    <?php if (empty($categories)): ?>
                        <tr>
                            <td colspan="4" class="p-8 text-center text-gray-500 font-medium">Aucune catégorie ne correspond à vos critères.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($categories as $cat): ?>
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900"><?= htmlspecialchars($cat['nom_categorie']) ?></td>
                                <td class="p-4 text-center text-gray-400"><?= date('d/m/Y', strtotime($cat['date_creation'])) ?></td>
                                
                                <!-- ACTIONS REPRODUITES DE VOTRE IMAGE -->
                                <td class="p-4 flex items-center justify-center gap-2">
                                    <!-- Bouton Edit Violet -->
                                    <a href="#" class="inline-flex items-center gap-1.5 bg-[#6366f1] hover:bg-indigo-600 text-white text-xs font-bold px-4 py-1.5 rounded-md shadow-sm transition">
                                        <i class="fa-solid fa-pen text-[10px]"></i> Edit
                                    </a>
                                    <!-- Bouton Delete Blanc Encadré avec icône Poubelle -->
                                    <a href="<?= path('admin', 'categories') . '&delete_id=' . $cat['id_categorie'] ?>" 
                                       onclick="return confirm('Supprimer cette catégorie ?');"
                                       class="inline-flex items-center justify-center w-8 h-8 bg-white border border-gray-200 rounded-md text-gray-500 hover:text-red-600 hover:border-red-200 shadow-xs transition">
                                        <i class="fa-solid fa-trash-can text-sm"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
