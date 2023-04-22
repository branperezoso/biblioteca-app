<div class="container">
    <div class="row justify-content-center">
        {{-- datos generales del estudiante --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <b>{{ $componentName }} | {{ $pageTitle }}</b>
                    </h4>
                    {{-- Registro de prestamos y devoluciones --}}
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- numero de control --}}
                        <div class="col-sm-12 col-md-2">
                            <input type="text" class="form-control" wire:model.lazy='ncontrol' placeholder="Ncontrol">
                        </div>

                        <div class="col-sm-12 col-md-3">
                            {{-- <label>{{ $student ? 'Nombre:' : '' }}</label> --}}
                            <div class="alert alert-secondary" role="alert">
                                {{ $student ? $student->name : '' }}
                                {{ $student ? '-' : '' }}
                                {{ $student ? $student->career->key : '' }}
                            </div>
                        </div>
                        {{-- grado --}}
                        <div class="col-sm-12 col-md-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Grado</span>
                                </div>
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                </select>
                            </div>


                        </div>
                        {{-- grupo --}}
                        <div class="col-sm-12 col-md-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Grupo</span>
                                </div>
                                <select class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                        {{-- fecha devolucion --}}
                        <div class="col-sm-12 col-md-3 form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Fec. Dev.</span>
                                </div>
                                <input type="date" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- carrito de libros --}}
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <b>Libros a prestar</b>
                    </h4>
                    {{-- Registro de prestamos y devoluciones --}}
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- codigo de barras --}}
                        <div class="col-sm-12 col-md-4">
                            {{-- <label for="validationDefaultUsername">Username</label> --}}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Barcode</span>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        {{-- lista de libros --}}
                        <div class="row">

                            {{-- <table class="table"> --}}
                            <div class="col-sm-12 col-md-12 ">
                                <table class="mt-4 table table-striped">
                                    <thead class="table-active">
                                        <tr>
                                            <th scope="col" class="w-10">#</th>
                                            <th scope="col" class="w-15">Barcode</th>
                                            <th scope="col" class="w-50">Título</th>
                                            <th scope="col" class="w-20">Autor</th>
                                            <th scope="col" class="w-5">Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($books as $book)
                                            <tr>
                                                <th scope="row"> {{ $book->id }}</th>
                                                <td> {{ $book->barcode }}</td>
                                                <td> {{ $book->title }}</td>
                                                <td> {{ $book->author }}</td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        X
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">
                                                    <h5 class="text-center">Agregar libros para préstamo</h5>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    {{-- <button wire:click="add()">
                        Agregar
                    </button> --}}

                    {{-- __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('livewire.loan.scripts.scripts')

{{-- 
    <script src="{{ asset('js/keypress.js') }}"></script>
<script src="{{ asset('js/onscan.js') }}"></script>
    
    <script src="{{ asset('js/keypress.js') }}"></script>
<script src="{{ asset('js/onscan.js') }}"></script>
@include('livewire.sales.scripts.shortcuts')
@include('livewire.sales.scripts.events')
@include('livewire.sales.scripts.general')
@include('livewire.sales.scripts.scan') --}}
