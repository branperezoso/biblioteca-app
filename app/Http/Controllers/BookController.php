<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookValidator; // Importa la clase BookValidator
use App\Models\Book; // Importa el modelo Book

class BookController extends Controller
{
    // Otros métodos de tu controlador

    public function store(BookValidator $request)
    {
        // Validar los datos utilizando el validador
        $validatedData = $request->validated();

        // Crear una nueva instancia del modelo Book con los datos validados
        $book = new Book([
            'barcode' => $validatedData['barcode'],
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'edition' => $validatedData['edition'],
            'area' => $validatedData['area'],
            'publishing_house' => $validatedData['publishing_house'],
            'comment' => $validatedData['comment'],
            'quantity' => $validatedData['quantity'],
            'origin' => $validatedData['origin'],
        ]);

        // Guardar el nuevo libro en la base de datos
        $book->save();

        // Redirigir a la página de listado de libros u otra acción deseada
        return redirect()->route('books.index');
    }

    public function update(BookValidator $request, $id)
    {
        // Validar los datos utilizando el validador
        $validatedData = $request->validated();

        // Obtener el libro que deseas actualizar
        $book = Book::find($id);

        // Verificar si se encontró el libro
        if ($book) {
            // Actualizar los campos con los nuevos valores del formulario
            $book->barcode = $validatedData['barcode'];
            $book->title = $validatedData['title'];
            $book->author = $validatedData['author'];
            $book->edition = $validatedData['edition'];
            $book->area = $validatedData['area'];
            $book->publishing_house = $validatedData['publishing_house'];
            $book->comment = $validatedData['comment'];
            $book->quantity = $validatedData['quantity'];
            $book->origin = $validatedData['origin'];

            // Guardar los cambios en la base de datos
            $book->save();
        }

        // Redirigir a la página de listado de libros u otra acción deseada
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        // Obtener el libro que deseas eliminar
        $book = Book::find($id);

        // Verificar si se encontró el libro
        if ($book) {
            // Eliminar el libro de la base de datos
            $book->delete();
        }

        // Redirigir a la página de listado de libros u otra acción deseada
        return redirect()->route('books.index');
    }
}
