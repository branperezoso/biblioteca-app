{{-- resources/views/livewire/book/books.blade.php --}}

<div>
    <h1>Libros</h1>

    <!-- Contenido principal de la página -->
    <div class="content">
        @if($currentView == 'create')
            @include('livewire.book.partials.create')
        @elseif($currentView == 'edit')
            @include('livewire.book.partials.edit')
        @elseif($currentView == 'delete')
            @include('livewire.book.partials.delete')
        @endif
    </div>
</div>
