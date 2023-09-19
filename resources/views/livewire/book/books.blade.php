{{-- resources/views/livewire/book/books.blade.php --}}

<div>
    <h1>Libros</h1>

    <!-- Botones para cambiar la vista principal -->
    <div class="mb-4">
        <button wire:click="showList">Lista de Libros</button>
        <button wire:click="showCreate">Crear Libro</button>
    </div>

    <!-- Contenido principal de la página -->
    <div class="content">
        @if($view === 'list')
            @include('livewire.book.partials.list') <!-- Vista parcial de lista de libros -->
        @elseif($view === 'create')
            @include('livewire.book.partials.create') <!-- Vista parcial de creación de libro -->
        @elseif($view === 'edit')
            @include('livewire.book.partials.edit') <!-- Vista parcial de edición de libro -->
        @elseif($view === 'delete')
            @include('livewire.book.partials.delete') <!-- Vista parcial de eliminación de libro -->
        @endif
    </div>
</div>
