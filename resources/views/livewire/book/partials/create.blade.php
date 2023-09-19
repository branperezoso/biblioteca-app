<div>
    <h2>Crear Libro</h2>
    <div class="container">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Código de Barras:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="barcode">
                    </td>
                </tr>
                <tr>
                    <th>Título:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="title">
                    </td>
                </tr>
                <tr>
                    <th>Autor:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="author">
                    </td>
                </tr>
                <tr>
                    <th>Edición:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="edition">
                    </td>
                </tr>
                <tr>
                    <th>Área:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="area">
                    </td>
                </tr>
                <tr>
                    <th>Casa Editorial:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="publishing_house">
                    </td>
                </tr>
                <tr>
                    <th>Comentario:</th>
                    <td>
                        <textarea class="form-control" wire:model="comment"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Cantidad:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="quantity">
                    </td>
                </tr>
                <tr>
                    <th>Origen:</th>
                    <td>
                        <input type="text" class="form-control" wire:model="origin">
                    </td>
                </tr>
                <tr>
                    <th>Foto:</th>
                    <td>
                        <input type="file" class="form-control-file" wire:model="photo">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
