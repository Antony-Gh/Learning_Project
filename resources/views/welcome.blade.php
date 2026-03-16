<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChemQuest — Master Chemistry</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans antialiased bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white min-h-screen flex flex-col">

    <div class="flex-1 flex items-center justify-center px-4 py-16">
        <div class="text-center max-w-3xl">
            {{-- Logo --}}
            <div class="mb-8">
                <span class="text-7xl inline-block animate-bounce">🧪</span>
            </div>

            <h1 class="text-5xl sm:text-6xl font-extrabold mb-4">
                <span
                    class="bg-gradient-to-r from-emerald-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent">
                    ChemQuest
                </span>
            </h1>

            <p class="text-xl text-slate-300 mb-2">Master Chemistry Through Interactive Quizzes</p>
            <p class="text-slate-500 mb-8 max-w-lg mx-auto">Progress through stages, earn points & stars, and compete
                with classmates on the leaderboard. Ready to start your chemistry journey?</p>

            {{-- Feature Pills --}}
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-sm text-slate-300">⏱ Timed
                    Quizzes</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-sm text-slate-300">🎯
                    Progressive Stages</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-sm text-slate-300">⭐ Earn
                    Stars</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-sm text-slate-300">🏆
                    Leaderboard</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-sm text-slate-300">🏅 Points
                    System</span>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-8 py-3 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-purple-500/30">
                        Go to Dashboard →
                    </a>
                @else
                    <a href="{{ route('register') }}"
                        class="bg-gradient-to-r from-emerald-500 to-cyan-500 hover:from-emerald-600 hover:to-cyan-600 text-white px-8 py-3 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-emerald-500/30">
                        Get Started — Free 🚀
                    </a>
                    <a href="{{ route('login') }}"
                        class="bg-white/10 hover:bg-white/20 text-white px-8 py-3 rounded-xl font-medium text-lg transition-all duration-200 border border-white/10">
                        Log In
                    </a>
                @endauth
            </div>

            {{-- Stats --}}
            <div class="grid grid-cols-3 gap-6 mt-16 max-w-md mx-auto">
                <div>
                    <div class="text-3xl font-bold text-emerald-400">5</div>
                    <div class="text-sm text-slate-500">Stages</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-cyan-400">50+</div>
                    <div class="text-sm text-slate-500">Questions</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-purple-400">∞</div>
                    <div class="text-sm text-slate-500">Retries</div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-6 text-sm text-slate-600">
        <p>🧪 ChemQuest &copy; {{ date('Y') }} — Making Chemistry Fun!</p>
    </footer>
</body>

</html>