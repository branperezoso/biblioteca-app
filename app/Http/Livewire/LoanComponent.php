<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
//php artisan make:livewire loanComponent
class LoanComponent extends Component
{
    public $componentName, $pageTitle;
    public $ncontrol;
    public $student;
    public $books;
    public function mount()
    {
        $this->componentName = "Préstamos";
        // $this->pageTitle = "Listado";
        $this->books = [];
        $this->pageTitle = "Datos estudiante";
        $this->ncontrol = '';
        $this->student = null;
    }
    public function render()
    {
        $book1 = new Book();
        $book1->id = 1;
        $book1->barcode = "2212213";
        $book1->title = "BusinessCoach® - El instructivo paso a paso para iniciar y administrar tu negocio en México.";
        $book1->author = "InvestorHouse México";
        $book1->edition = "primera, 2023";
        $book1->area = "isc";
        $book1->publishing_house = "adsfasdf";
        $book1->quantity = 1;

        $book2 = new Book();
        $book2->id = 1;
        $book2->title = "Sapiens. De animales a dioses: Una breve historia de la humanidad";
        $book2->author = "por Yuval Noah Harari";
        $book2->edition = "segunda, 2002";
        $book2->area = "isc";
        $book2->publishing_house = "Debate Editorial";
        $book2->quantity = 1;
        $book2->barcode = "3344";

        $books = [];
        $books['code' . $book1->barcode] = $book1;
        $books['code' . $book2->barcode] = $book2;
        $newbook2 = null;
        $key = 'code1' . $book2->barcode;
        if (array_key_exists($key, $books)) {
            $newbook2 = $books[$key];
            $newbook2->quantity = 20;
        }
        //dd($newbook2 ? $newbook2->quantity : "no existe");
        $this->books =  $books;
        /*
        $books->add(["bar" . $book1->barcode => $book1->toArray()]);
        $book1->barcode = "3344";
        $books->prepend(["bar" . $book1->barcode => $book1->toArray()]);
        $flattened = $books->flatMap(function (array $values) {
            //return array_map('strtoupper', $values);
            return $values;
        });
        
        $books = collect();
        dd($flattened["bar3344"]['barcode']);
*/
        if ($this->ncontrol != '') {
            $this->emit('student', $this->ncontrol);
        }
        return view(
            'livewire.loan.loan-component',
            []
        )->extends('layouts.app')->section('content');
        // return view('livewire.loan-component');
    }
    // public function add()
    // {
    //     $this->componentName = $this->ncontrol;
    //     $this->emit('student', $this->ncontrol);
    // }
}
//https://styde.net/introduccion-a-la-clase-collection-de-laravel/