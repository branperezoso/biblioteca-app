{{-- resources/views/livewire/books/books.blade.php --}}

<div>
    <h1>Libros</h1>

    <!-- Contenido principal de la página -->
    <div class="content">
        @if($currentView == 'create')
            @include('livewire.books.partials.create')
        @elseif($currentView == 'edit')
            @include('livewire.books.partials.edit')
        @elseif($currentView == 'delete')
            @include('livewire.books.partials.delete')
        @endif
    </div>
</div>
