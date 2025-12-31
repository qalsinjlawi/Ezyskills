<x-guest-layout>
    @include('includes.header')

    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">
            Verify <span class="text-orange-500">Email</span>
        </h2>
        <p class="text-gray-600 mt-2">Please verify your email address to continue</p>
    </div>

    <!-- Verification Info Message -->
    <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
        <p class="text-sm text-gray-700">
            Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you. If you didn't receive the email, we will gladly send you another.
        </p>
    </div>

    <!-- Success Message -->
    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
            <p class="text-sm text-green-700 font-medium">
                ✓ A new verification link has been sent to your email address!
            </p>
        </div>
    @endif

    <!-- Resend Verification Button -->
    <form method="POST" action="{{ route('verification.send') }}" class="space-y-4">
        @csrf

        <div>
            <button 
                type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-lg transition duration-150 shadow-md hover:shadow-lg"
            >
                Resend Verification Email
            </button>
        </div>
    </form>

    <!-- Logout Link -->
    <div class="mt-6 text-center">
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button 
                type="submit" 
                class="text-sm text-gray-600 hover:text-orange-500 font-medium transition duration-150"
            >
                Log Out
            </button>
        </form>
    </div>
    
    @include('includes.footer')

</x-guest-layout>