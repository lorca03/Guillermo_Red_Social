<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 flex items-center justify-center">
            <div
                class="bg-white overflow-hidden w-96 shadow-xl shadow-indigo-500/40 sm:rounded-lg p-4 flex flex-col items-center justify-center">
                @foreach($images as $image)
                    <labe>{{$image->user->name.'/@'.$image->user->user_name }}</labe>
                    <img style="width: 380px; border-radius: 5px; margin-bottom: 5px" class="border-solid border-2 border-indigo-500" src="{{'imagenes/'.$image->image_path}}" alt="No carga">
                    <div class="flex mb-4">
                        <div class="flex justify-center items-center flex-col">
                            <labe>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $image->created_at)->longRelativeDiffForHumans()}}</labe>
                            <labe>Commentarios --> {{count($image->comments)}}
                                <a class="text-indigo-500 hover:underline" href="img_detalle/{{$image->id}}">Ver
                                    todos</a>
                            </labe>
                        </div>
                        <div class="ml-10">
                                <img class="w-14" id="like" src="images/favorito.png" alt="No carga">
{{--                                    @if(count($image->likes)>0)--}}
{{--                                        @if($image->user_id==\Auth::user()->id)--}}
{{--                                            <img class="w-14" src="images/favorito.png" alt="No carga">--}}
{{--                                        @else--}}
{{--                                            <img class="w-14" src="images/favoritoNO.png" alt="No carga">--}}
{{--                                        @endif--}}
{{--                                    @else--}}
{{--                                        <img class="w-14" src="images/favoritoNO.png" alt="No carga">--}}
{{--                                    @endif--}}
                        </div>
                    </div>
                    <form method="POST" class="flex" action="{{ route('save.comentario') }}">
                        @csrf
                        <textarea placeholder="Que piensas?" name="comentario" cols="25" rows="1"></textarea>
                        <input type="hidden" value="{{$image->id}}" name="imagenCommentario">
                        <input class="bg-indigo-500 rounded-lg p-2 ml-1 text-white" type="submit" value="Comentar">
                    </form>
                    <br>
                    <hr class="w-48 h-1 border-0 mb-3 rounded dark:bg-gray-700" style="background-color: indigo">
                @endforeach
                {{--                {{$images->links()}}--}}
            </div>
        </div>
    </div>
</x-app-layout>
