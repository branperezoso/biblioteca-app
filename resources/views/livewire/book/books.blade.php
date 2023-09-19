{{-- resources/views/livewire/books/books.blade.php --}}

<div>
    <h1>Libros</h1>

    <!-- Contenido principal de la página -->
    <div class="content">
      
        @if($currentView == 'create')
            @include('livewire.books.partials.create') <!-- Vista parcial de creación de libro -->
        @elseif($currentView == 'edit')
            @include('livewire.books.partials.edit') <!-- Vista parcial de edición de libro -->
        @elseif($currentView == 'delete')
            @include('livewire.books.partials.delete') <!-- Vista parcial de eliminación de libro -->
        @endif
    </div>
</div>
