<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class Books extends Component
{
    public $books;

    public function mount()
    {
        $this->books = Book::all();
    }

    public function create()
    {
        $this->books->create([
            'barcode' => $this->barcode,
            'title' => $this->title,
            'author' => $this->author,
            'edition' => $this->edition,
            'area' => $this->area,
            'publishing_house' => $this->publishing_house,
            'comment' => $this->comment,
            'quantity' => $this->quantity,
            'origin' => $this->origin,
            'photo' => $this->photo,
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $book = Book::find($id);

        $this->barcode = $book->barcode;
        $this->title = $book->title;
        $this->author = $book->author;
        $this->edition = $book->edition;
        $this->area = $book->area;
        $this->publishing_house = $book->publishing_house;
        $this->comment = $book->comment;
        $this->quantity = $book->quantity;
        $this->origin = $book->origin;
        $this->photo = $book->photo;
    }

    public function delete($id)
    {
        Book::find($id)->delete();

        $this->books = Book::all();
    }
}
