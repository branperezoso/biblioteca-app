<div class="container">
    <div class="row justify-content-center">
        {{-- datos generales del estudiante --}}
        @include('livewire.loan.partials.studentdetails')
        
        {{-- carrito de libros --}}
        @include('livewire.loan.partials.bookslist')
    </div>
</div>
<script src="{{ asset('js/onscan.js') }}"></script>
@include('livewire.loan.scripts.events')

@include('livewire.loan.scripts.scan')

{{--

<script src="{{ asset('js/keypress.js') }}"></script>
@include('livewire.sales.scripts.shortcuts')
@include('livewire.sales.scripts.events')
@include('livewire.sales.scripts.general')
--}}