@extends('layouts.dashboard')

@section('content')

<div class="space-y-6">

    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-2xl font-bold text-gray-800 mb-2">
            Profil Saya
        </h2>

        <p class="text-gray-500 mb-6">
            Kelola informasi akun Anda.
        </p>

        <div class="flex items-center gap-4 mb-6">

            <div class="w-20 h-20 rounded-full bg-blue-600 text-white flex items-center justify-center text-3xl font-bold">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <div>

                <h3 class="text-xl font-semibold">
                    {{ Auth::user()->name }}
                </h3>

                <p class="text-gray-500">
                    {{ Auth::user()->email }}
                </p>

                <span class="inline-block mt-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                    {{ ucfirst(Auth::user()->role) }}
                </span>

            </div>

        </div>

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Ubah Password
        </h2>

        @include('profile.partials.update-password-form')

    </div>

    <div class="bg-white rounded-2xl shadow p-6 border border-red-200">

        <h2 class="text-xl font-bold text-red-600 mb-4">
            Hapus Akun
        </h2>

        @include('profile.partials.delete-user-form')

    </div>

</div>

@endsection