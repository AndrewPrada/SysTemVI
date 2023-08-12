<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="">
                        <label for="">CBN</label><br><input type="text" id="cbn" name="cbn"> <br>
                        <label for="">Nombre</label><br><input type="text" id="name" name="name"> <br>
                        <label for="">Descripci&oacute;n</label><br><textarea name="description" id="description" cols="30" rows="10"></textarea>
                        <input type="submit" value="Enviar">
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
