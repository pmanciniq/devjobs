<form class="md:w-1/2">
    <!-- Titulo -->
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo')" />
        <x-text-input id="titulo" class="block mt-2 w-full" type="text" name="titulo" :value="old('titulo')" placeholder='Titulo de la Vacante' required />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="salario" :value="__('Salario')" />
        <select 
            id="salario"
            name="salario"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"

        ></select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
</form>