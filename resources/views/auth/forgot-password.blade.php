<x-guest-layout>

    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">
            Forgot <span class="text-orange-500">Password?</span>
        </h2>
        <p class="text-gray-600 mt-2">No problem. Enter your email and we'll send you a password reset link.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus 
                placeholder="Enter your email"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-150"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button 
                type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-lg transition duration-150 shadow-md hover:shadow-lg"
            >
                Send Reset Link
            </button>
        </div>

        <!-- Back to Login Link -->
        <div class="text-center pt-2">
            <a href="{{ route('login') }}" class="text-sm text-orange-500 hover:text-orange-600 font-semibold">
                ← Back to Login
            </a>
        </div>
    </form>
    

</x-guest-layout>