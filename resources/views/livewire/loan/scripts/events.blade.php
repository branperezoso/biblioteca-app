<script>
    document.addEventListener('DOMContentLoaded', function() {
        // window.livewire.on('book-deleted', msg => {
        //     console.log(msg);
        //     //$('#theModal').modal('hide');
        //     noty(msg, 2);
        // });
        // window.livewire.on('book-insuficiente', msg => {
        //     console.log(msg);
        //     //$('#theModal').modal('hide');
        //     noty(msg, 2);
        // });
        window.livewire.on('book-qty', msg => {
            // $('#theModal').modal('hide');
            noty(msg);
        });
                window.livewire.on('book-error', msg => {
        // $('#theModal').modal('hide');
        noty(msg, 2);
                });

                window.livewire.on('student-not-found', msg => {
        $('#ncontrol').focus();
    noty(msg,2);
                });

                window.livewire.on('print-ticket', data => {
        console.log(data);
    // if (@this.pdf)
    window.open("print://" + data, "_self").close();
                });
                window.livewire.on('save-ok', data => {
        console.log(data);
    noty(data);
                });
    //establecer fecha actual
    var now = new Date();

    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    // var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
   /* var today = (day)+"-"+(month)+"-"+now.getFullYear()  ;

    $('#return_date').val(today);
alert($('#return_date').val());
*/
/*
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