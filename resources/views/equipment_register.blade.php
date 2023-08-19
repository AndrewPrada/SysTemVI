<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST">
        @csrf

        <!-- Codigo de Bien Nacional -->
        <div>
            <x-input-label for="cbn" :value="__('CBN')" />
            <x-text-input id="cbn" class="block mt-1 w-full" type="text" name="cbn" :value="old('cbn')" required autofocus autocomplete="equipment-cbn" />
            <x-input-error :messages="$errors->get('cbn')" class="mt-2" />
        </div>

        <!-- Nombre del Equipo -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Nombre del Equipo')" />

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="equipment-name" />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Descripcion del Equipo -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Descripcion del Equipo')" />

            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" required autocomplete="equipment-description" />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Status del Equipo -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status del Equipo')" />

            <select id="status" class="block mt-1 w-full" name="status" required autocomplete="equipment-status">
                <option value="0" disabled selected>Seleccione un tipo</option>
                @foreach ($status as $items)
                <option value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <!-- Tipo de Equipo -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Tipo de Equipo')" />

            <select id="type" class="block mt-1 w-full" name="type" required autocomplete="equipment-type">
                <option value="0" disabled selected>Seleccione un tipo</option>
                @foreach ($type as $types)
                <option value="{{ $types->id }}">{{ $types->name }}</option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <!-- Tecnico a Cargo del Equipo -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Nombre del Tecnico a Cargo')" />

            <select id="type" class="block mt-1 w-full" name="type" required autocomplete="equipment-type">
                <option value="0" disabled selected>Seleccione un tipo</option>
                @foreach ($users as $technitian)
                <option value="{{ $technitian->id }}">{{ $technitian->name }}</option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Send It') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>