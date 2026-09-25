<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - ARFA.DEV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0a0a0a] text-white font-sans antialiased flex items-center justify-center min-h-screen relative overflow-hidden">

    <!-- Subtle Background Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-blue-500/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="w-full max-w-md p-8 sm:p-10 bg-[#111111]/80 backdrop-blur-xl border border-[#262626] rounded-2xl shadow-2xl relative z-10">
        
        <!-- Branding -->
        <div class="text-center mb-10">
            <a href="/" class="text-3xl font-bold tracking-wider text-white block mb-2">
                ARFA<span class="text-blue-500">.DEV</span>
            </a>
            <p class="text-slate-400 text-xs font-semibold tracking-widest uppercase">Secure Admin Portal</p>
        </div>

        <!-- Error Handling -->
        @if ($errors->any())
            <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/50 text-red-400 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-slate-400 mb-2">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username" 
                    class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-slate-400 mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full bg-[#0f172a] border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-slate-700 bg-[#0f172a] text-blue-500 shadow-sm focus:ring-blue-500/50 focus:ring-offset-[#0a0a0a]">
                    <span class="ml-2 text-sm text-slate-400">Remember me</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3.5 rounded-lg hover:bg-blue-500 transition-colors flex justify-center items-center gap-2 mt-2">
                Sign In
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
            
            <div class="text-center mt-6">
                <a href="/" class="text-sm text-slate-500 hover:text-white transition-colors">&larr; Back to Portfolio</a>
            </div>
        </form>
    </div>

</body>
</html>