<div class="container">
    <div class="row justify-content-center">
               
                    {{-- Mostrar la vista parcial para crear un libro --}}
                    @include('livewire.books.partials.create')
               
                    {{-- Mostrar la vista parcial para editar un libro --}}
                    @include('livewire.books.partials.edit')
               
                    {{-- Mostrar la vista parcial para eliminar un libro --}}
                    @include('livewire.books.partials.delete')
              
    </div>
</div>