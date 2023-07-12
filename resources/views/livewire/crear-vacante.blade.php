<form class="md:w-1/2">
    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="title" :value="__('Titulo')" />
        <x-text-input id="title" class="block mt-2 w-full" type="text" name="title" :value="old('title')" placeholder='Titulo de la Vacante' required />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>
</form>