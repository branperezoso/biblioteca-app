            {{-- resources/views/livewire/book/books.blade.php --}}
    <div>
        <h1>Libros</h1>
        <button wire:click="create">Crear Libro</button>

        <!-- Contenido principal de la página -->
        <div class="content">
                
                    @include('livewire.book.partials.create') <!-- Vista parcial de creación de libro -->
                
                    @include('livewire.book.partials.edit') <!-- Vista parcial de edición de libro -->
               
                    @include('livewire.book.partials.delete') <!-- Vista parcial de eliminación de libro -->
                
            </div>
        </div>
