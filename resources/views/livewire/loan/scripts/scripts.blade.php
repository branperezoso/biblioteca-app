<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('student', msg => {
            console.log(msg);
            //$('#theModal').modal('hide');
            noty(msg, 2);
        });
        /*
                window.livewire.on('user-updated', msg => {
                    $('#theModal').modal('hide');
                    noty(msg);
                });

                window.livewire.on('user-deleted', msg => {
                    // $('#theModal').modal(hide);
                    noty(msg);
                });

                window.livewire.on('hide-modal', msg => {
                    $('#theModal').modal('hide');
                    // noty(msg);
                });

                window.livewire.on('show-modal', msg => {
                    $('#theModal').modal('show');
                    // noty(msg);
                });
                window.livewire.on('user-withsales', msg => {
                    // $('#theModal').modal('show');
                    noty(msg);
                });*/

    });
</script>
