<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative">
                <x-text-input id="password"
                    class="block mt-1 w-full pr-10"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />

                <button type="button"
                    onclick="togglePassword('password', 'eyeIcon1')"
                    class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">

                    <span id="eyeIcon1">👁️</span>
                </button>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation"
                :value="__('Confirm Password')" />

            <div class="relative">
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full pr-10"
                    type="password"
                    name="password_confirmation"
                    required />

                <button type="button"
                    onclick="togglePassword('password_confirmation', 'eyeIcon2')"
                    class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">

                    <span id="eyeIcon2">👁️</span>
                </button>
            </div>
        </div>
        <div class="mt-4">

            <label>Role</label>

            <select
                name="role"
                class="border rounded w-full p-2">

                <option value="mahasiswa">
                    Mahasiswa
                </option>

                <option value="dosen">
                    Dosen
                </option>

            </select>

        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
<script>
function togglePassword(inputId, iconId) {

    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (input.type === "password") {
        input.type = "text";
        icon.innerHTML = "🙈";
    } else {
        input.type = "password";
        icon.innerHTML = "👁️";
    }
}
</script>
</x-guest-layout>
