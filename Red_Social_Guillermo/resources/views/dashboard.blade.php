<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="bg-white overflow-hidden w-96 shadow-xl shadow-indigo-500/40 sm:rounded-lg p-4 flex flex-col items-center justify-center">
                @foreach($images as $image)
                    <labe>{{$image->user->name.'/@'.$image->user->user_name }}</labe>
                    <img style="width: 380px" src="{{'imagenes/'.$image->image_path}}" alt="No carga">
                    <labe>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $image->created_at)->longRelativeDiffForHumans()}}</labe>
                    <labe>Commentarios --> {{count($image->comments)}} <button class="text-indigo-500 hover:underline" type="submit">Ver todos</button> </labe>
                    <br>
                    <form method="POST" class="flex" action="{{ route('save.comentario') }}">
                        @csrf
                        <textarea placeholder="Que piensas?" name="comentario"  cols="25" rows="1"></textarea>
                        <input type="hidden" value="{{$image->id}}" name="imagenCommentario">
                        <input class="bg-indigo-500 rounded-lg p-2 ml-1 text-white" type="submit" value="Comentar">
                    </form>
                    <br>
                @endforeach
{{--                {{$images->links()}}--}}
            </div>
        </div>
    </div>
</x-app-layout>
