<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="bg-white overflow-hidden w-1/2 shadow-xl shadow-indigo-500/40 sm:rounded-lg p-5 ">
{{--                flex flex-col items-center justify-center--}}
                <div class="text-center text-2xl mb-1">@<label >{{$user->user_name}}</label></div><hr class="h-1 bg-indigo-500 border-0 rounded">
                <div class="flex items-center ml-24 mb-1 mt-1 mb-1">
                    <img src="{{'storage/'.$user->profile_photo_path}}" class="w-1/4" alt="No tienes foto">
                    <div>
                        <label class="ml-5">{{$user->name}} {{$user->surname}}</label><br>
                        <label class="ml-5">{{$user->email}}</label>
                    </div>
                </div><hr class="h-1 bg-indigo-500 border-0 rounded">
                <div class="mt-3">
                    @foreach($images as $image)
                        <img src="{{'imagenes/'.$image->image_path}}" alt="No carga">
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
