<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                {{-- <b>{{ $componentName }} | {{ $pageTitle }}</b> --}}
                <b> Devoluciones</b>
            </h4>
            {{-- Registro de prestamos y devoluciones --}}
        </div>

        <div class="card-body">
            <div class="row">
                {{-- numero de ticket --}}
                <div class="col-sm-12 col-md-2">
                    <input id="ticket_id" type="text" class="form-control" wire:model.lazy='ticket_id'
                        placeholder="# préstamo">
                </div>

                <div class="col-sm-12 col-md-2">
                    <button class="btn btn-primary" wire:click='returnBooks()'>
                        <div>
                            Devolver
                            <svg fill="#fff" width="24px" height="24px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>return</title>
                                <path
                                    d="M0 21.984q0.032-0.8 0.608-1.376l4-4q0.448-0.48 1.056-0.576t1.12 0.128 0.864 0.736 0.352 1.12v1.984h18.016q0.8 0 1.408-0.576t0.576-1.408v-8q0-0.832-0.576-1.408t-1.408-0.608h-16q-0.736 0-1.248-0.416t-0.64-0.992 0-1.152 0.64-1.024 1.248-0.416h16q2.464 0 4.224 1.76t1.76 4.256v8q0 2.496-1.76 4.224t-4.224 1.76h-18.016v2.016q0 0.64-0.352 1.152t-0.896 0.704-1.12 0.096-1.024-0.544l-4-4q-0.64-0.608-0.608-1.44z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </div>
