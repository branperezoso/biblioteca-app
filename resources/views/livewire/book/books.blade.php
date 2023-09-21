<div id="books">
    <h1>Libros</h1>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Edición</th>
                        <th>Área</th>
                        <th>Casa editorial</th>
                        <th>Cantidad</th>
                        <th>Origen</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $book)
                    <tr>
                        <td>{{ $book->barcode }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->edition }}</td>
                        <td>{{ $book->area }}</td>
                        <td>{{ $book->publishing_house }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>{{ $book->origin }}</td>
                        <td>
                            <img src="{{ $book->photo }}" alt="{{ $book->title }}" width="100" />
                        </td>
                        <td>
                            <button wire:click="edit({{ $book->id }})" class="btn btn-primary">Editar</button>
                            <button wire:click="delete({{ $book->id }})" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">No hay libros</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    

    @include('livewire.book.partials.create')
    @include('livewire.book.partials.edit')
</div>
