
<main class="p-8 space-y-6">

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex justify-between items-center relative overflow-hidden">
        <div class="space-y-2 z-10">
            <h2 class="text-2xl font-bold text-gray-900">Bienvenue Moussa</h2>
            <p class="text-sm text-gray-400">Rédigez de nouveaux contenus et suivez l'impact de vos publications.</p>
            <div class="pt-2">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl shadow-sm transition">
                    Rediger un article
                </button>
            </div>
        </div>
        <div class="hidden md:block w-36 h-28 mr-6 text-indigo-200 shrink-0">
            <svg viewBox="0 0 200 150" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-300">
                <!-- Bureau / Écran -->
                <path d="M20,130 L180,130" stroke-width="4" stroke="currentColor" class="text-gray-400" />
                <path d="M40,130 L50,100 L110,100 L100,130" />
                <circle cx="130" cy="50" r="18" fill="#f3f4f6" />
                <path d="M110,110 C110,80 150,80 150,110 Z" fill="#e0e7ff" />
                <path d="M125,68 L125,90" stroke="currentColor" stroke-width="3" />
            </svg>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
            <div>
                <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                    <i class="fa-solid fa-pen-to-square text-indigo-600"></i> Articles en Lignes
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2"><?= $totalEnLigne ?></h3>
            </div>
            <div>
                <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-red-500 h-full w-[30%]"></div>
                </div>
                <span class="text-[9px] text-gray-400 mt-1 block">30 % Complete</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
            <div>
                <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                    <i class="fa-solid fa-eye text-indigo-600"></i> Vues de mes Articles
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2"><?= $totalVues ?></h3>
            </div>
            <div>
                <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-emerald-500 h-full w-[80%]"></div>
                </div>
                <span class="text-[9px] text-gray-400 mt-1 block">80 % Complete</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
            <div>
                <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                    <i class="fa-solid fa-comment text-indigo-600"></i> Nouveaux Commentaires
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2">15</h3>
            </div>
            <div>
                <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-indigo-600 h-full w-[50%]"></div>
                </div>
                <span class="text-[9px] text-gray-400 mt-1 block">50 % Complete</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between h-32">
            <div>
                <div class="flex items-center gap-2 text-[10px] font-bold text-gray-800">
                    <i class="fa-solid fa-user-clock text-indigo-600"></i> En attente de leAdmin
                </div>
                <h3 class="text-2xl font-black text-gray-900 mt-2"><?= $totalEnAttente ?></h3>
            </div>
            <div>
                <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-amber-500 h-full w-[20%]"></div>
                </div>
                <span class="text-[9px] text-gray-400 mt-1 block">20 % Complete</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
        <h4 class="text-xl font-bold text-gray-900 mb-6 px-2">Mes derniers Articles soumis</h4>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-200 text-base font-bold text-gray-800">
                        <th class="p-4 w-[25%]">Titre</th>
                        <th class="p-4 w-[35%]">Contenue</th>
                        <th class="p-4 w-[15%]">Date</th>
                        <th class="p-4 w-[10%] text-center">Vues</th>
                        <th class="p-4 w-[15%] text-center">Statut</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm text-gray-700">
                    <?php if (empty($articles)): ?>
                        <tr>
                            <td colspan="5" class="p-4 text-center text-gray-500">Vous n'avez soumis aucun article pour le moment</td>
                        </tr>
                    <?php else: ?>
                    <?php foreach ($articles as $art): ?>
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="p-4 font-semibold text-gray-900"><?= htmlspecialchars($art['titre']) ?></td>
                        <td class="p-4 text-gray-550"><?= htmlspecialchars($art['contenu']) ?></td>
                        <td class="p-4"><?= date('d/m/Y', strtotime($art['date_publication'])) ?></td>
                        <td class="p-4 text-center font-medium"><?= $art['vues'] ?></td>
                        <td class="p-4 text-center">
                            <?php if ($art['statut'] === 'publie'): ?>
                                <span class="bg-[#00FF00] text-black text-xs font-bold px-4 py-1 rounded-full inline-block shadow-sm">Publier</span>
                            <?php elseif ($art['statut'] === 'en_attente'): ?>
                                <span class="bg-[#FFA500] text-white text-xs font-bold px-3 py-1 rounded-full inline-block shadow-sm">En attente de publication</span>
                            <?php else: ?>
                                <span class="bg-gray-500 text-white text-xs font-bold px-4 py-1 rounded-full inline-block shadow-sm">Archivé</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

</main>

