<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="bg-white overflow-hidden w-96 shadow-xl shadow-indigo-500/30 sm:rounded-lg p-4 flex flex-col items-center justify-center">
                @foreach($images as $image)
                    <labe>{{$image->user->name.'/@'.$image->user->user_name }}</labe>
                    <img style="width: 380px" src="{{'imagenes/'.$image->image_path}}" alt="No carga">
                    <labe>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $image->created_at)->longRelativeDiffForHumans()}}</labe>
                    <textarea placeholder="Comenta..." name="" id="" cols="30" rows="1"></textarea><br>
                @endforeach
{{--                {{$images->links()}}--}}
            </div>
        </div>
    </div>
</x-app-layout>
