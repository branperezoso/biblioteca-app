<div id="app">
        <div class="container">
            <!-- Barra de navegación u otros elementos comunes aquí -->

            <!-- Contenido principal -->
            <main class="py-4">
                @if($currentAction == 'list')
                    <!-- Mostrar la lista de libros -->
                    @include('livewire.books.list')
                @elseif($currentAction == 'create')
                    <!-- Mostrar el formulario de creación de libro -->
                    @include('livewire.books.create')
                @elseif($currentAction == 'edit')
                    <!-- Mostrar el formulario de edición de libro -->
                    @include('livewire.books.edit')
                @endif
            </main>
        </div>
    </div>