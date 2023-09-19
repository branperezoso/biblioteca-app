<div class="container">
        <div class="row">
            <div class="col-md-8">
                {{-- Contenido principal de la página de libros --}}
                <h1>Lista de Libros</h1>
                {{-- Aquí puedes mostrar la lista de libros o cualquier otro contenido principal --}}
            </div>
            <div class="col-md-4">
                {{-- Columna lateral para acciones de libros --}}
                @if($currentAction == 'create')
                    {{-- Mostrar la vista parcial para crear un libro --}}
                    @include('livewire.books.create')
                @elseif($currentAction == 'edit')
                    {{-- Mostrar la vista parcial para editar un libro --}}
                    @include('livewire.books.edit')
                @elseif($currentAction == 'delete')
                    {{-- Mostrar la vista parcial para eliminar un libro --}}
                    @include('livewire.books.delete')
                @else
                    {{-- Por defecto, no se muestra ninguna vista parcial --}}
                @endif
            </div>
        </div>
    </div>