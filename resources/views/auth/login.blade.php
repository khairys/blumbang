<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if ($errors->any())
    <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
        <p class="font-semibold mb-1">Login gagal:</p>
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1.5">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                   placeholder="admin@blumbang.desa.id"
                   class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
        </div>

        <div>
            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1.5">Password</label>
            <input id="password" type="password" name="password" required
                   placeholder="••••••••"
                   class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                <span class="text-sm text-gray-600">Ingat saya</span>
            </label>
        </div>

        <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
            Masuk ke Panel Admin
        </button>
    </form>

    <div class="mt-6 p-4 bg-gray-50 rounded-xl border border-gray-100">
        <p class="text-xs text-gray-500 font-semibold mb-2">💡 Akun Default:</p>
        <p class="text-xs text-gray-600">Email: <code class="bg-white px-1.5 py-0.5 rounded border text-green-700">admin@blumbang.desa.id</code></p>
        <p class="text-xs text-gray-600 mt-1">Password: <code class="bg-white px-1.5 py-0.5 rounded border text-green-700">password</code></p>
    </div>
</x-guest-layout>
