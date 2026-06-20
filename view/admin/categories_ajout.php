<main class="p-8 space-y-6 flex-grow bg-[#f3f4f6]">

    <!-- En-tête -->
    <div class="bg-indigo-900 text-white p-6 rounded-2xl shadow-sm border border-indigo-950 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-black tracking-tight">Ajouter une Catégorie</h2>
            <p class="text-sm text-indigo-200">Créez un nouvel emplacement thématique pour les auteurs.</p>
        </div>
        <a href="<?= path('admin', 'categories') ?>" class="bg-white/10 hover:bg-white/20 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition">
            ← Retour à la liste
        </a>
    </div>

    <!-- Formulaire d'ajout épuré -->
    <div class="max-w-xl bg-white p-6 rounded-2xl shadow-sm border border-gray-100 space-y-4 mx-auto">
        <h3 class="text-base font-bold text-gray-900">Formulaire de création</h3>
        
        <form action="<?= path('admin', 'ajoutCategorie') ?>" method="POST" class="space-y-4">
            <div class="space-y-1">
                <label for="nom_categorie" class="text-xs font-bold text-gray-500 uppercase tracking-wider">Nom de la thématique</label>
                <input type="text" name="nom_categorie" id="nom_categorie" placeholder="Ex: Cloud, Algorithmie, Cybersecurité..." 
                    class="w-full bg-slate-50 text-gray-800 rounded-xl px-4 py-3 text-xs border border-gray-100 focus:outline-none focus:border-indigo-500 transition font-medium shadow-inner">
                
                <?php if (isset($errors["nom_categorie"])): ?>
                    <p class="text-red-500 text-xs mt-1 px-1 font-semibold"><?= $errors["nom_categorie"] ?></p>
                <?php endif; ?>
            </div>

            <button type="submit" name="add_category" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold py-3 rounded-xl shadow-sm transition cursor-pointer text-center uppercase tracking-wider">
                Enregistrer la catégorie
            </button>
        </form>
    </div>
</main>
