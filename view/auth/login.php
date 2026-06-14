<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Blog - Sign In</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cloudflare.com" />
    <style>
        .bg-wave-1 {
            background: linear-gradient(135deg, #7c3aed 0%, #4f46e5 100%);
            clip-path: slot;
        }
        .white-cloud-shape {
            background-color: #ffffff;
            clip-path: polygon(0 0, 32% 0, 48% 14%, 60% 8%, 78% 28%, 88% 25%, 100% 32%, 100% 100%, 25% 100%, 0 85%);
        }
    </style>
</head>
<body class="bg-indigo-900 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

    <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-700 rounded-full filter blur-3xl opacity-60"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-700 rounded-full filter blur-3xl opacity-60"></div>

    <div class="w-full max-w-4xl bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-700 rounded-3xl shadow-2xl overflow-hidden relative flex flex-col md:flex-row min-h-[500px]">
        
        <div class="w-full md:w-[55%] bg-white p-8 sm:p-12 flex flex-col justify-center relative z-10 rounded-br-[100px] md:rounded-br-[150px] shadow-lg">
            
            <div class="space-y-1 mb-8 text-center md:text-left">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Hello!</h2>
                <p class="text-xs text-gray-400 font-semibold">Sign in to your account</p>
            </div>

            <form action="#" method="POST" class="space-y-5">

                <!-- Affichage de l'erreur globale de connexion si elle existe -->
                <?php if (isset($errors["connect"])): ?>
                    <div class="bg-red-50 text-red-600 text-xs font-semibold p-3 rounded-xl border border-red-100 text-center">
                        <?= $errors["connect"] ?>
                    </div>
                <?php endif; ?>
                
                <div class="relative flex items-center">
                    <div class="absolute left-3 w-10 h-10 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-md text-white">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </div>
                    <input type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?? '' ?>"
                        class="w-full bg-slate-50 text-gray-800 rounded-2xl pl-16 pr-4 py-3.5 text-sm border-0 focus:outline-none shadow-inner placeholder-gray-400 font-medium">

                    <?php if (isset($errors["email"])): ?>
                        <p class="text-red-500 text-xs mt-1 px-1"><?= $errors["email"] ?></p>
                    <?php endif; ?>

                    </div>

                <div class="relative flex items-center">
                    <div class="absolute left-3 w-10 h-10 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-md text-white">
                        <i class="fa-solid fa-lock text-sm"></i>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Password" 
                        class="w-full bg-slate-50 text-gray-800 rounded-2xl pl-16 pr-12 py-3.5 text-sm border-0 focus:outline-none shadow-inner placeholder-gray-400 font-medium">
                    <button type="button" class="absolute right-4 text-gray-400 hover:text-indigo-600 transition">
                        <i class="fa-solid fa-eye text-sm"></i>
                    </button>

                    <?php if (isset($errors["password"])): ?>
                        <p class="text-red-500 text-xs mt-1 px-1"><?php echo $errors["password"]; ?></p>
                    <?php endif; ?>

                </div>

                <div class="flex items-center justify-between text-[11px] font-bold text-gray-400 px-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" class="w-3.5 h-3.5 rounded-sm border-gray-300 text-indigo-600 accent-indigo-600">
                        Remember me
                    </label>
                    <a href="#" class="hover:text-indigo-600 transition">Forgot password?</a>
                </div>

                <input type="hidden" name="controller" value="auth">
                <input type="hidden" name="action" value="login">

                <div class="pt-4 flex justify-center md:justify-start">
                    <button type="submit" name="connect" class="w-48 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white text-xs font-black py-3.5 rounded-full tracking-wider uppercase shadow-lg shadow-indigo-500/30 transition cursor-pointer text-center">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="text-center md:text-left mt-8 text-[11px] font-bold text-gray-400 px-1">
                Don't have an account? <a href="#" class="text-indigo-600 hover:underline">Create</a>
            </div>
        </div>

        <div class="hidden md:flex w-[45%] p-12 flex-col justify-center text-white relative z-0">
            <div class="space-y-4 max-w-xs relative z-10">
                <h3 class="text-2xl font-black tracking-tight text-white">Welcome Back!</h3>
                <p class="text-xs text-purple-100/90 leading-relaxed font-medium">
                    Bienvenue sur votre plateforme de gestion de blog. Connectez-vous pour lire, écrire ou modérer les articles de la communauté.
                </p>
            </div>
        </div>

    </div>

</body>
</html>
