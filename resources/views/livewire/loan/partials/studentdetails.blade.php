<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                {{-- <b>{{ $componentName }} | {{ $pageTitle }}</b> --}}
                <b> {{ $pageTitle }}</b>
            </h4>
            {{-- Registro de prestamos y devoluciones --}}
        </div>

        <div class="card-body">
            <div class="row">
                {{-- numero de control --}}
                <div class="col-sm-12 col-md-2">
                    <input id="ncontrol" type="text" class="form-control" wire:model.lazy='ncontrol'
                        placeholder="Ncontrol">
                    {{-- <button wire:click="searchStudent" class="btn btn-success">
                        <svg fill="#fff" width="24px" height="24px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.027 9.92L16 13.95 14 16l-4.075-3.976A6.465 6.465 0 0 1 6.5 13C2.91 13 0 10.083 0 6.5 0 2.91 2.917 0 6.5 0 10.09 0 13 2.917 13 6.5a6.463 6.463 0 0 1-.973 3.42zM1.997 6.452c0 2.48 2.014 4.5 4.5 4.5 2.48 0 4.5-2.015 4.5-4.5 0-2.48-2.015-4.5-4.5-4.5-2.48 0-4.5 2.014-4.5 4.5z"
                                fill-rule="evenodd" />
                        </svg>
                    </button> --}}
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
                        <select class="form-control" wire:model='semester'>
                            <option value="0">0</option>
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
                        <select class="form-control" wire:model='group'>
                            <option value="0">0</option>
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
                        <input type="date" class="form-control" wire:model='return_date' id="return_date">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
