<x-guest-layout>
    <!-- Page Title -->
    <div class="mb-6 text-left">
        <h2 class="text-3xl font-bold text-gray-800">
            Create <span class="text-orange-500">Account</span>
        </h2>
        <p class="text-gray-600 mt-2">
            Join EzySkills and start your learning journey
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5 text-left">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Full Name" />
            <x-text-input
                id="name"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="Enter your full name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" value="Email Address" />
            <x-text-input
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
                placeholder="Enter your email address"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" value="Password" />
            <x-text-input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Create a password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" value="Confirm Password" />
            <x-text-input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Confirm your password"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Terms Checkbox -->
        <div class="flex items-center">
            <input
                id="terms"
                type="checkbox"
                class="rounded border-gray-300 text-orange-500 shadow-sm focus:ring-orange-500"
                required
            >
            <label for="terms" class="ml-2 text-sm text-gray-600">
                I agree to the
                <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">
                    Terms & Conditions
                </a>
            </label>
        </div>

        <!-- Submit Button -->
        <div>
            <x-primary-button class="w-full justify-center">
                Create Account
            </x-primary-button>
        </div>

        <!-- Sign In Link -->
        <div class="text-center">
            <span class="text-sm text-gray-600">
                Already have an account?
            </span>
            <a
                href="{{ route('login') }}"
                class="text-sm text-orange-500 hover:text-orange-600 font-semibold ml-1"
            >
                Sign In
            </a>
        </div>

        <!-- Social Login Divider -->
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500">
                    Or sign up with
                </span>
            </div>
        </div>

        <!-- Social Login Buttons -->
        <div class="grid grid-cols-2 gap-4">
            <button
                type="button"
                class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50 transition duration-150"
            >
                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none">
                    <!-- Google icon -->
                </svg>
                <span class="text-sm font-medium text-gray-700">
                    Google
                </span>
            </button>

            <button
                type="button"
                class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50 transition duration-150"
            >
                <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24">
                    <!-- Facebook icon -->
                </svg>
                <span class="text-sm font-medium text-gray-700">
                    Facebook
                </span>
            </button>
        </div>
    </form>
</x-guest-layout>
