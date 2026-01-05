<section class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
    <header class="mb-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>
            <div class="ml-4">
                <h2 class="text-xl font-bold text-gray-900">
                    Profile Information
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    Update your account's profile information and email address.
                </p>
            </div>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

<form method="post" action="{{ route('profile.update') }}" class="space-y-5" enctype="multipart/form-data">
    @csrf
    @method('patch')

    <!-- Profile Image -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-3">
            Profile Picture
        </label>
        <div class="flex items-center space-x-6">
            <div class="shrink-0">
                @if($user->profile_image)
                <img id="preview" src="{{ asset('/' . $user->profile_image) }}" alt="Profile" class="h-32 w-32 object-cover rounded-full
 border-4 border-orange-100">
                @else
                    <div id="preview" class="h-20 w-20 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center text-white text-2xl font-bold border-4 border-orange-100">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                @endif
            </div>
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input 
                    type="file" 
                    name="profile_image" 
                    accept="image/*"
                    onchange="previewImage(event)"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 cursor-pointer"
                />
            </label>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('profile_image')" />
    </div>

    <!-- Name -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
            Full Name
        </label>
        <div class="relative">
            <input 
                id="name" 
                name="name" 
                type="text" 
                value="{{ old('name', $user->name) }}"
                required 
                autofocus 
                autocomplete="name"
                placeholder="Enter your full name"
                class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-150"
            />
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
            Email Address
        </label>
        <div class="relative">
            <input 
                id="email" 
                name="email" 
                type="email" 
                value="{{ old('email', $user->email) }}"
                required 
                autocomplete="username"
                placeholder="Enter your email address"
                class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-150"
            />
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-3 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-800">
                            Your email address is unverified.
                            <button 
                                form="send-verification" 
                                class="font-semibold text-yellow-900 hover:text-yellow-700 underline transition duration-150"
                            >
                                Click here to re-send the verification email.
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-sm font-medium text-green-700">
                                ✓ A new verification link has been sent to your email address.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Phone -->
    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
            Phone Number
        </label>
        <div class="relative">
            <input 
                id="phone" 
                name="phone" 
                type="text" 
                value="{{ old('phone', $user->phone) }}"
                autocomplete="tel"
                placeholder="Enter your phone number"
                class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-150"
            />
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
        <div>
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 3000)"
                    class="inline-flex items-center text-sm font-medium text-green-600"
                >
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Profile updated successfully!
                </p>
            @endif
        </div>
        
        <button 
            type="submit"
            class="inline-flex items-center px-6 py-3 bg-orange-500 border border-transparent rounded-lg font-semibold text-sm text-white hover:bg-orange-600 focus:bg-orange-600 active:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150"
        >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Save Changes
        </button>
    </div>
</form>

<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="h-32 w-32 object-cover rounded-full
 border-4 border-orange-100">`;
        }
        reader.readAsDataURL(file);
    }
}
</script>
</section>