            {{-- resources/views/livewire/book/books.blade.php --}}
    <div>
        <h1>Libros</h1>
        <!-- Contenido principal de la página -->
        <div class="content">
                @if($view === 'create')
                    @include('livewire.book.partials.create') <!-- Vista parcial de creación de libro -->
                @elseif($view === 'edit')
                    @include('livewire.book.partials.edit') <!-- Vista parcial de edición de libro -->
                @elseif($view === 'delete')
                    @include('livewire.book.partials.delete') <!-- Vista parcial de eliminación de libro -->
                @endif
            </div>
        </div>
