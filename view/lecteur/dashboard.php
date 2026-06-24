
<main class="p-8 space-y-6 flex-grow">

    <div
        class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex justify-between items-center relative overflow-hidden min-h-[140px]">
        <div class="space-y-2 z-10">
            <h2 class="text-3xl font-black text-gray-900 tracking-tight">Ravi de vous revoir</h2>
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
            <h3 class="text-3xl font-black text-gray-900 mt-2"><?= $totalFavoris ?></h3>
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
                    <?php if (empty($articles)): ?>
                        <tr>
                            <td colspan="4" class="p-4 text-center text-gray-500">Aucun article enregistré pour le moment.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($articles as $art): ?>
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-semibold text-gray-900"><?= htmlspecialchars($art['titre']) ?></td>
                                <td class="p-4 text-gray-500"><?= htmlspecialchars($art['categorie']) ?></td>
                                <td class="p-4"><?= date('d/m/Y', strtotime($art['date_publication'])) ?></td>
                                <td class="p-4 text-center">
                                    <button class="text-indigo-600 hover:text-indigo-800 font-bold transition mr-3 cursor-pointer">Lire</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium transition cursor-pointer">Retirer</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</main>

