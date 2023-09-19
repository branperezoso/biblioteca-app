<div>
    <h2>Editar Libro</h2>
    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="barcode">Código de Barras:</label>
            <input type="text" class="form-control" id="barcode" wire:model="barcode">
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" wire:model="title">
        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" class="form-control" id="author" wire:model="author">
        </div>
        <div class="form-group">
            <label for="edition">Edición:</label>
            <input type="text" class="form-control" id="edition" wire:model="edition">
        </div>
        <div class="form-group">
            <label for="area">Área:</label>
            <input type="text" class="form-control" id="area" wire:model="area">
        </div>
        <div class="form-group">
            <label for="publishing_house">Casa Editorial:</label>
            <input type="text" class="form-control" id="publishing_house" wire:model="publishing_house">
        </div>
        <div class="form-group">
            <label for="comment">Comentario:</label>
            <input type="text" class="form-control" id="comment" wire:model="comment">
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" class="form-control" id="quantity" wire:model="quantity">
        </div>
        <div class="form-group">
            <label for="origin">Origen:</label>
            <input type="text" class="form-control" id="origin" wire:model="origin">
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo" wire:model="photo">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
