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
                        <input id="barcode" type="text" class="form-control" wire:model.lazy='barcode'>
                    </div>
                </div>
                {{-- boton agregar libro --}}
                <div class="col-sm-12 col-md-1">
                    <button class="btn btn-success" wire:click='add()'>
                        <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <path fill="#fff" fill-rule="evenodd"
                                d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z" />
                        </svg>
                    </button>
                </div>
                {{-- Reimprimir ticket --}}
                <div class="col-sm-12 col-md-2">
                    <button class="btn btn-primary" wire:click='printLast()'>
                        <div>
                            Imprimir último
                            <svg fill="#fff" width="24px" height="24px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.773 7.966h-3.772v-7.952h-20.001v7.952h-3.772c-1.229 0-2.229 1-2.229 2.229v13.559c0 1.23 1 2.229 2.228 2.229h3.772v6h20.001v-6h3.773c1.229 0 2.229-1 2.229-2.23v-13.559c0-1.229-1-2.229-2.229-2.229zM8 1.984h16.001v5.982h-16.001v-5.982zM24.001 29.985h-16.001v-11.012h16.001v11.012zM30.002 23.755c0 0.128-0.102 0.23-0.229 0.23h-3.773v-7.012h-20.001v7.012h-3.772c-0.126 0-0.229-0.102-0.229-0.23v-13.559c0-0.127 0.103-0.23 0.229-0.23h27.546c0.126 0 0.229 0.102 0.229 0.23zM26 11.982h-1c-0.552 0-1 0.448-1 1s0.448 1 1 1h1c0.552 0 1-0.448 1-1s-0.448-1-1-1z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>

            </div>


            {{-- lista de libros --}}
            <div class="row">

                {{-- <table class="table"> --}}
                    <div class="col-sm-12 col-md-12 ">
                        <table class="mt-4 table table-striped">
                            <thead class="table-active">
                                <tr>
                                    <th scope="col" class="w-5">#</th>
                                    <th scope="col" class="w-5">Cant.</th>
                                    <th scope="col" class="w-15">Barcode</th>
                                    <th scope="col" class="w-50">Título</th>
                                    <th scope="col" class="w-20">Autor</th>
                                    <th scope="col" class="w-5">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                @if (!$book)
                                @continue
                                @endif
                                <tr>
                                    <th scope="row"> {{ $book['id'] }}</th>
                                    <td> {{ $book['quantity_loan'] }}</td>
                                    <td> {{ $book['barcode'] }}</td>
                                    <td> {{ $book['title'] }}</td>
                                    <td> {{ $book['author'] }}</td>
                                    <td>
                                        <button class="btn btn-danger" wire:click="delete({{$book['id']}})">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M7 1a2 2 0 00-2 2v2H2a1 1 0 000 2h.884c.036.338.078.754.12 1.213.11 1.202.218 2.664.218 3.787 0 1.47-.183 3.508-.315 4.776a2.015 2.015 0 002 2.224h10.186a2.015 2.015 0 002-2.224c-.132-1.268-.315-3.306-.315-4.776 0-1.123.107-2.585.218-3.787.042-.459.084-.875.12-1.213H18a1 1 0 100-2h-3V3a2 2 0 00-2-2H7zm6 4V3H7v2h6zM4.996 8.03c-.035-.378-.07-.728-.101-1.03h10.21a81.66 81.66 0 00-.1 1.03c-.112 1.212-.227 2.75-.227 3.97 0 1.584.194 3.714.325 4.982v.007a.02.02 0 01-.005.008l-.003.003H4.905a.024.024 0 01-.008-.01v-.008c.131-1.268.325-3.398.325-4.982 0-1.22-.115-2.758-.226-3.97zM8 8a1 1 0 011 1v6a1 1 0 11-2 0V9a1 1 0 011-1zm5 1a1 1 0 10-2 0v6a1 1 0 102 0V9z" />
                                            </svg>
                                        </button>
                                        <button class="btn btn-success" wire:click="incrementQty({{$book['id']}})">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z" />
                                            </svg>
                                        </button>
                                        <button class="btn btn-info" wire:click="decrementQty({{$book['id']}})">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M18 10a1 1 0 01-1 1H3a1 1 0 110-2h14a1 1 0 011 1z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">Agregar libros para préstamo</h5>
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
            </div>
            {{-- @if (count($books)>0) --}}

            <div class="row">
                <div class="d-flex justify-content-center flex-nowrap">

                    <button wire:click="saveLoan()" class="btn btn-success">
                        <div>
                            Imprimir
                            <svg fill="#fff" width="24px" height="24px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.773 7.966h-3.772v-7.952h-20.001v7.952h-3.772c-1.229 0-2.229 1-2.229 2.229v13.559c0 1.23 1 2.229 2.228 2.229h3.772v6h20.001v-6h3.773c1.229 0 2.229-1 2.229-2.23v-13.559c0-1.229-1-2.229-2.229-2.229zM8 1.984h16.001v5.982h-16.001v-5.982zM24.001 29.985h-16.001v-11.012h16.001v11.012zM30.002 23.755c0 0.128-0.102 0.23-0.229 0.23h-3.773v-7.012h-20.001v7.012h-3.772c-0.126 0-0.229-0.102-0.229-0.23v-13.559c0-0.127 0.103-0.23 0.229-0.23h27.546c0.126 0 0.229 0.102 0.229 0.23zM26 11.982h-1c-0.552 0-1 0.448-1 1s0.448 1 1 1h1c0.552 0 1-0.448 1-1s-0.448-1-1-1z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>

            {{-- @endif --}}
            {{-- __('You are logged in!') }} --}}
        </div>
    </div>
</div>