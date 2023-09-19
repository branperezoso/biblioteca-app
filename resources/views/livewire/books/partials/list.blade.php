<div>
    <h2>Listado de Libros</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código de Barras</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Edición</th>
                <th>Área</th>
                <th>Casa Editorial</th>
                <th>Comentario</th>
                <th>Cantidad</th>
                <th>Origen</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->barcode }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->area }}</td>
                    <td>{{ $book->publishing_house }}</td>
                    <td>{{ $book->comment }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>{{ $book->origin }}</td>
                    <td>{{ $book->photo }}</td>
                    <td>
                        <button wire:click="edit({{ $book->id }})" class="btn btn-primary">Editar</button>
                        <button wire:click="delete({{ $book->id }})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
