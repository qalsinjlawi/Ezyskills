<x-app-layout>
    

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
           

            <!-- Settings Sections -->
            <div class="space-y-6">
                
                <!-- Profile Information -->
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Update Password -->
                <div>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Delete Account -->
                <div>
                    @include('profile.partials.delete-user-form')
                </div>

            </div>
        </div>
    </div>
</x-app-layout>