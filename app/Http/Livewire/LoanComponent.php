<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Loan;
use App\Models\LoanDetail;
use App\Models\Student;
use Livewire\Component;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
//php artisan make:livewire loanComponent
class LoanComponent extends Component
{
    public $componentName, $pageTitle;
    public $ncontrol;
    public $student;
    public $books;
    public $barcode;
    public $semester;
    public $group;
    public $return_date;


    public function mount()
    {
        $this->componentName = "Préstamos";
        // $this->pageTitle = "Listado";
        $this->books = [];
        $this->pageTitle = "Datos estudiante";
        $this->ncontrol = '';
        $this->student = null;
        $this->barcode = '';
        $this->semester = 0;
        $this->group = 0;
        $this->return_date = date('Y-m-d');
    }
    public function render()
    {
        if ($this->ncontrol != '' && !$this->student) {
            //buscar el estudiante y asignamrlo a $this->student
            $this->student = Student::where('ncontrol', $this->ncontrol)->first();
            if (!$this->student) {
                $this->emit('student-not-found', "ESTUDIANTE NO ENCONTRADO: " . $this->ncontrol);
                //return;
            }
        }
        return view(
            'livewire.loan.loan-component',
            []
        )->extends('layouts.app')->section('content');
        // return view('livewire.loan-component');
    }
    public function delete($id)
    {
        //$newbook2 = null;
        if ($this->bookExists($id)) {
            $key = 'id' . $id;
            $newbook2 = $this->books[$key];
            unset($this->books[$key]);
            $this->emit('book-error', "Ejemplar eliminado: " . $newbook2['barcode']);
        }
    }
    public function add()
    {
        if ($this->barcode == '') {
            $this->emit('book-error', "Rellene el barcode");
            return;
        }
        $book = Book::where('barcode', $this->barcode)->first();
        if (!$book) {
            $this->emit('book-error', "Libro no encontrado");
            return;
        }
        /*$book1->id = 1;
        $book1 = new Book();
        $book1->barcode = "7501791610391";
        $book1->title = "BusinessCoach® - El instructivo paso a paso para iniciar y administrar tu negocio en México.";
        $book1->author = "InvestorHouse México";
        $book1->edition = "primera, 2023";
        $book1->quantity = 2;
        $book1->quantity_loan = 1;
        $book1->area = "isc";
        $book1->publishing_house = "adsfasdf";

        $book2 = new Book();
        $book2->id = 2;
        $book2->title = "Sapiens. De animales a dioses: Una breve historia de la humanidad";
        $book2->author = "por Yuval Noah Harari";
        $book2->edition = "segunda, 2002";
        $book2->area = "isc";
        $book2->publishing_house = "Debate Editorial";
        $book2->quantity = 1;
        $book2->barcode = "3344";
*/
        if (!$this->bookExists($book->id)) {
            $books['id' . $book->id] = $book->toArray();
            $this->books =  $books;
        } else {
            $this->incrementQty($book->id);
        }
        $this->barcode = '';
    }
    public function incrementQty($id)
    {
        $key = 'id' . $id;
        $newbook2 = $this->books[$key];
        $book1 = Book::find($id);

        if ($this->books[$key]['quantity_loan'] < $book1->quantity) {
            $this->books[$key]['quantity_loan']++;
            $this->emit('book-qty', "Ejemplar icrementado: " . $newbook2['barcode']);
        } else
            $this->emit('book-error', "Ejemplar insuficiente");
    }
    public function decrementQty($id)
    {
        $key = 'id' . $id;
        $newbook2 = $this->books[$key];
        $this->books[$key]['quantity_loan']--;
        if ($this->books[$key]['quantity_loan'] > 0)
            $this->emit('book-qty', "Ejemplar decrementado: " . $newbook2['barcode']);
        else
            $this->delete($id);
    }
    public function saveLoan()
    {
        if ($this->semester == 0) {
            $this->emit('book-error', "Seleccione un grado");
            return;
        }
        if ($this->group == 0) {
            $this->emit('book-error', "Seleccione un grupo");
            return;
        }
        //dd($this->semester . ' ' . $this->group . ' ' . $this->return_date);
        if($this->return_date==Date('Y-m-d')){
            $this->emit('book-error', "Seleccione una fecha de devolución");
            return;
        }
        if ($this->ncontrol == '') {
            $this->emit('book-error', "Proporcione número de control");
            return;
        }
        DB::beginTransaction();
        try {
            //guardar prestamo
            $loan = Loan::create([
                'semester' => $this->semester, 'group' => $this->group, 'return_date' => $this->return_date,
                'student_id' => $this->student->id, 'user_id' => Auth::user()->id
            ]);
            //guardar detalles_prestamo
            if ($loan) {
                foreach($this->books as $b){
                    LoanDetail::create([
                        'quantity'=>$b['quantity_loan'],
                        'loan_id'=>$loan->id,
                        'book_id'=>$b['id']
                    ]);
                    //actualizar quantity de libros
                    $book = Book::find($b['id']);
                    $book->quantity = $book->quantity-$b['quantity_loan'];
                    $book->save();
                }
                DB::commit();
                $this->books = [];
                $this->emit('save-ok', "Préstamo registrado con éxito");
                //imprimir utilizando impresora
                $this->emit('print-ticket', $this->getJsonBase64($loan));
            } else {
                DB::rollback();
            }
        } catch (Exception $e) {
            DB::rollback();
            $this->emit('book-error', $e->getMessage());
        }
        /*
        try {
            //guardar venta
            $sale = Sale::create([
                'total' => $this->total,
                'items' => $this->itemsQuantity,
                'cash' => $this->efectivo,
                'status' => $this->status,
                'change' => $this->change,
                'user_id' => Auth()->user()->id,
                'customer_id' => $this->customer //por defecto asignar el cliente a publico en general
            ]);
            if ($sale) {
                //guardar detalles
                $items = Cart::getcontent();
                foreach ($items as $item) {
                    SaleDetail::create([
                        'price' => $item->price,
                        'quantity' => $item->quantity,
                        'product_id' => $item->id,
                        'sale_id' => $sale->id
                    ]);
                    //actualizar stock
                    $product = Product::find($item->id);
                    $product->stock = $product->stock - $item->quantity;
                    $product->save();
                }
            }
            DB::commit();
            // $this->clearCart();
            Cart::clear();
            $this->efectivo = 0;
            $this->change = 0;
            $this->total = Cart::getTotal();
            $this->itemsQuantity = Cart::getTotalQuantity();

            $this->emit('save-ok', "Préstamo registrado con éxito");

            //imprimir utilizando impresora
            $this->emit('print-ticket', $this->getJsonBase64($sale));

            $this->books = [];

        } catch (Exception $e) {
            DB::rollback();
            $this->emit('sale-error', $e->getMessage());
        }*/
    }
    public function bookExists($id)
    {
        $key = 'id' . $id;
        return array_key_exists($key, $this->books);
    }
    protected $listeners = [
        'scan-code' => 'scanCode',
        // 'scan-code-byid' => 'scanCodeById',
        // 'removeItem' => 'removeItem',
        // 'clearCart' => 'clearCart',
        // 'saveSale' => 'saveSale',
        // 'printLast'
    ];
    public function scanCode($barcode)
    {
        $this->barcode = $barcode;
        $this->add();
    }
    public function printLast()
    {
        $loan = Loan::latest('id')->first();
        //imprimir utilizando impresora
        if (!$loan) {
            $this->emit('book-error', "No hay nada que imprimir");
            return;
        }
        $this->emit('print-ticket', $this->getJsonBase64($loan));
    }
    public function getJsonBase64(Loan $loan)
    {
        $details = LoanDetail::join('books as b', 'b.id', 'loan_details.book_id')
            ->select('loan_details.quantity', 'b.name')
            ->where('loan_id', $loan->id)->get();
        //obtener el nombre del usuario
        $loan->user = $loan->user->name;
        //obtener el nombre del
        // $loan->student_id = $loan->student->name;
        $loan->student = $loan->student->name;
        // $student = Student::find($loan->student_id);
        $this->student->career =  $this->student->career->key;
        $json = $loan->toJson() . '|' . $details->toJson() . '|' . $this->student->toJson();
        //codificar en base64
        $crypted = base64_encode(gzdeflate($json));
        return $crypted;
    }
    public function returnBooks()
    {
        
    }
}
//https://styde.net/introduccion-a-la-clase-collection-de-laravel/