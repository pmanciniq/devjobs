<form class="md:w-1/2">
    <!-- Titulo -->
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo')" />
        <x-text-input id="titulo" class="block mt-2 w-full" type="text" wire:model="titulo" :value="old('titulo')"
            placeholder='Titulo de la Vacante' required />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="salario" :value="__('Salario')" />
        <select id="salario" name="salario"
            class="block mt-2 w-full border-gray-300 dark:border-gray-700 
            dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 
            dark:focus:border-indigo-600 focus:ring-indigo-500 
            dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <!-- Categoria -->
    <div class="mt-4">
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select id="categoria" name="categoria"
            class="block mt-2 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 
            dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 
            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <!-- Empresa -->
    <div class="mt-4">
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-2 w-full" type="text" name="empresa" :value="old('empresa')"
            placeholder='Nombre de la empresa' required />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <!-- Fecha límite postulación -->
    <div class="mt-4">
        <x-input-label for="ultimo_dia" :value="__('Fecha Límite de postulación')" />
        <x-text-input id="ultimo_dia" class="block mt-2 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"
            required />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <!-- Empresa -->
    <div class="mt-4">
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion"
            class="mt-2 w-full border-gray-300 dark:border-gray-700 
        dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 
        focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            name="descripcion" :value="old('descripcion')"
            placeholder='Descripción del puesto, requerimientos del cargo, beneficios, etc.' required></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    <!-- Imagen -->
    <div class="mt-4">
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-2 w-full" type="file" name="imagen" required />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    <div class="mt-4">
        <x-primary-button>Crear Vacante</x-primary-button>
    </div>
</form>
