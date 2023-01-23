
    <form method="POST" action="{{ route('save.iamge') }}">
        @csrf
        <div>
            <x-jet-label for="descripcion" value="{{ __('Image') }}" />
            <x-jet-input  class="block mt-1 w-full" type="text" name="descripcion" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="image" value="{{ __('File') }}" />
            <x-jet-input id="image" class="block mt-1 w-full" type="file" name="image" required />
        </div>
        <br>
        <x-jet-button class="ml-4">
            {{ __('Subir Imagen') }}
        </x-jet-button>
    </form>
