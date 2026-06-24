<main class="p-8 space-y-6 flex-grow bg-[#f3f4f6]">

    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-black text-gray-900 tracking-tight">Rédiger un nouvel article</h2>
            <p class="text-sm text-gray-400">Partagez vos connaissances avec la communauté en créant un contenu de qualité.</p>
        </div>
        <a href="<?= path('auteur', 'categories') ?>" class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-xs font-bold px-4 py-2.5 rounded-xl transition">
            ← Retour à mes articles
        </a>
    </div>

    <div class="max-w-3xl bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mx-auto">
        
        <!-- Notez l'attribut enctype="multipart/form-data" obligatoire pour l'envoi de fichiers/images -->
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">


    <!-- Champ Titre (Conserve la valeur) -->
    <div class="space-y-1">
        <label for="titre" class="text-xs font-bold text-gray-500 uppercase tracking-wider">Titre de l'article</label>
        <input type="text" name="titre" id="titre" placeholder="Entrez un titre percutant..." 
            value="<?= htmlspecialchars($_POST['titre'] ?? '') ?>" 
            class="w-full bg-slate-50 text-gray-800 rounded-xl px-4 py-3 text-xs border border-gray-200 focus:outline-none focus:border-indigo-500 transition font-medium shadow-inner">
            <?php if (isset($errors["titreVide"])): ?>
                <p class="text-red-500 text-xs font-bold mt-1"><?= $errors["titreVide"] ?></p>
            <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Sélection de la Catégorie (Conserve l'option sélectionnée) -->
        <div class="space-y-1">
            <label for="categorie" class="text-xs font-bold text-gray-500 uppercase tracking-wider">Thématique / Catégorie</label>
            <div class="relative">
                <select name="categorie" id="categorie" 
                    class="w-full bg-slate-50 text-gray-800 rounded-xl px-4 py-3 text-xs border border-gray-200 focus:outline-none focus:border-indigo-500 transition font-semibold shadow-inner appearance-none cursor-pointer">
                    <option value="">-- Choisir une catégorie --</option>
                    
                    <?php foreach ($categories as $cat): ?>
                        <!-- On vérifie si cette catégorie était celle choisie par l'utilisateur -->
                        <?php $selected = (isset($_POST['categorie']) && $_POST['categorie'] == $cat['nom_categorie']) ? 'selected' : ''; ?>
                        <option value="<?= htmlspecialchars($cat['nom_categorie']) ?>" <?= $selected ?>>
                            <?= htmlspecialchars($cat['nom_categorie']) ?>
                        </option>
                    <?php endforeach; ?>
                    
                    <?php $autresSelected = (isset($_POST['categorie']) && $_POST['categorie'] == 'autres') ? 'selected' : ''; ?>
                    <option value="autres" class="text-indigo-600 font-bold" <?= $autresSelected ?>>Autres (Demander l'ajout)...</option>
                </select>
                <div class="absolute right-4 top-3.5 text-gray-400 pointer-events-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>
            <?php if (isset($errors["categorieVide"])): ?>
                <p class="text-red-500 text-xs font-bold mt-1"><?= $errors["categorieVide"] ?></p>
            <?php endif; ?>
        </div>

        <!-- Upload de l'image de couverture (Note: Pour des raisons de sécurité des navigateurs, un champ file ne peut pas pré-remplir un fichier local, mais le reste du formulaire restera bien conservé !) -->
        <div class="space-y-1">
            <label for="image_file" class="text-xs font-bold text-gray-500 uppercase tracking-wider">Image de couverture</label>
            <input type="file" name="image_file" id="image_file" accept="image/*"
                class="w-full bg-slate-50 text-gray-600 rounded-xl px-4 py-2 text-xs border border-gray-200 focus:outline-none focus:border-indigo-500 transition font-medium shadow-inner file:mr-4 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer">
            <?php if (isset($errors["image_urlVide"])): ?>
                <p class="text-red-500 text-xs font-bold mt-1"><?= $errors["image_urlVide"] ?></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Champ Contenu (Conserve le long texte entre les balises) -->
    <div class="space-y-1">
        <label for="contenu" class="text-xs font-bold text-gray-500 uppercase tracking-wider">Corps de l'article (Contenu)</label>
        <textarea name="contenu" id="contenu" rows="8" placeholder="Rédigez votre article ici..." 
            class="w-full bg-slate-50 text-gray-800 rounded-xl px-4 py-3 text-xs border border-gray-200 focus:outline-none focus:border-indigo-500 transition font-medium shadow-inner resize-none"><?= htmlspecialchars($_POST['contenu'] ?? '') ?></textarea>
        <?php if (isset($errors["contenuVide"])): ?>
            <p class="text-red-500 text-xs font-bold mt-1"><?= $errors["contenuVide"] ?></p>
        <?php endif; ?>
    </div>

    <input type="hidden" name="controller" value="auteur">
    <input type="hidden" name="action" value="ajoutArticle">

    <!-- Bouton de Soumission -->
    <div class="pt-2">
        <button type="submit" name="add_article" 
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold py-4 rounded-xl shadow-md transition cursor-pointer text-center uppercase tracking-wider">
            Soumettre l'article à la modération
        </button>
    </div>
</form>

    </div>

</main>
