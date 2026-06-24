 

<main class="p-8 space-y-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div
            class="bg-indigo-700 text-white rounded-xl p-5 shadow-md h-32 relative flex flex-col justify-between overflow-hidden">
            <div>
                <div
                    class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-indigo-200">
                    <i class="fa-solid fa-user text-xs"></i> Nombre Utilisateurs
                </div>
                <h3 class="text-2xl font-black mt-2"><?= $totalUsers ?></h3>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-12 wave-bg"></div>
        </div>

        <div
            class="bg-white text-gray-800 rounded-xl p-5 shadow-sm h-32 relative border border-gray-100 flex flex-col justify-between overflow-hidden">
            <div>
                <div
                    class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                    <i class="fa-solid fa-file-invoice text-xs text-indigo-500"></i> Articles en Attente
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2"><?= $totalAttente ?></h3>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-12 wave-bg-light"></div>
        </div>

        <div
            class="bg-indigo-700 text-white rounded-xl p-5 shadow-md h-32 relative flex flex-col justify-between overflow-hidden">
            <div>
                <div
                    class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-indigo-200">
                    <i class="fa-solid fa-comment text-xs"></i> Commentaire Signalé
                </div>
                <h3 class="text-2xl font-black mt-2">18</h3>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-12 wave-bg"></div>
        </div>

        <div
            class="bg-white text-gray-800 rounded-xl p-5 shadow-sm h-32 relative border border-gray-100 flex flex-col justify-between overflow-hidden">
            <div>
                <div
                    class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                    <i class="fa-solid fa-chart-simple text-xs text-indigo-500"></i> Vues Globales
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2">10</h3>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-12 wave-bg-light"></div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
        <h4 class="text-lg font-bold text-gray-900 mb-6">Vue d'Ensemble de l'Activité</h4>

        <div class="relative flex">
            <!-- Axe Y -->
            <div
                class="flex flex-col justify-between text-right text-xs text-gray-400 pr-4 h-48 w-10 shrink-0 select-none">
                <span>20M</span>
                <span>15M</span>
                <span>10M</span>
                <span>5M</span>
                <span>0</span>
            </div>

            <div class="flex-grow border-l border-b border-gray-200 h-48 relative overflow-hidden">
                <div class="absolute inset-x-0 top-0 border-t border-gray-100 h-0"></div>
                <div class="absolute inset-x-0 top-12 border-t border-gray-100 h-0"></div>
                <div class="absolute inset-x-0 top-24 border-t border-gray-100 h-0"></div>
                <div class="absolute inset-x-0 top-36 border-t border-gray-100 h-0"></div>

                <div class="absolute inset-0 main-chart-wave opacity-90"></div>
            </div>
        </div>

        <div class="flex pl-14 justify-between text-[10px] text-gray-400 mt-2 select-none">
            <span class="w-full text-center">Janvier</span>
            <span class="w-full text-center">Février</span>
            <span class="w-full text-center">Mars</span>
            <span class="w-full text-center">Avril</span>
            <span class="w-full text-center">Mai</span>
            <span class="w-full text-center">Juin</span>
            <span class="w-full text-center">Juillet</span>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
        <h4 class="text-lg font-bold text-gray-900 mb-5">File de Moderation Urgentes</h4>
        <div class="space-y-3">
    <?php if (empty($fileModeration)): ?>
        <p class="text-sm text-gray-500 text-center py-4">Excellente nouvelle ! Aucun article n'est en attente de modération.</p>
    <?php else: ?>
        <?php foreach ($fileModeration as $item): ?>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-[3px] border-indigo-600 gap-4 shadow-sm">
                <div class="flex items-center gap-4 min-w-0">
                    <img src="<?= htmlspecialchars($item['photo']) ?>" alt="Avatar" class="w-10 h-10 rounded-full object-cover shrink-0">
                    <div class="truncate text-xs sm:text-sm">
                        <span class="font-bold text-gray-900 mr-2"><?= htmlspecialchars($item['prenom'] . ' ' . $item['nom']) ?></span>
                        <span class="text-gray-500">A soumis l'article : <span class="italic text-gray-600 font-medium">"<?= htmlspecialchars($item['titre']) ?>"</span> qui est en attente.</span>
                    </div>
                </div>
                <div class="flex gap-1.5 shrink-0 text-[11px] font-bold">
                    <button class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition cursor-pointer">Valider</button>
                    <button class="px-3 py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition cursor-pointer">Rejeter</button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

    </div>
</main>