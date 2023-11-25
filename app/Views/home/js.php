<script type="module">
    $(() => {

        function animation() {
            const sleep = 300;
            $('.card:eq(0)').hide()
            $('.card:eq(1)').hide()
            $('.small-box:eq(1)').hide()
            $('.small-box:eq(2)').hide()
            $('.cadastrar:eq(0)').hide()
            $('.small-box:eq(0)').hide().show(sleep + 300);

            setTimeout(() => {
                $('.small-box:eq(1)').show(sleep);
                setTimeout(() => {
                    $('.small-box:eq(2)').show(sleep);
                    setTimeout(() => {
                        $('.card:eq(0)').show(sleep);
                        setTimeout(() => {
                            $('.card:eq(1)').show(sleep);
                            setTimeout(() => {
                                $('.cadastrar:eq(0)').show(sleep);
                            }, sleep);
                        }, sleep);
                    }, sleep);
                }, sleep);
            }, sleep + 300);
        }
        animation()

        function showMsg() {
            Swal.fire({
                title: "Sucesso!",
                text: "Movimentação excluída com sucesso",
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        }

        async function confirmDelete() {
            const result = await Swal.fire({
                title: 'Tem certeza?',
                text: 'Esta ação será irreversível!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, exclua!',
                cancelButtonText: 'Cancelar'
            });

            return result.isConfirmed;
        }

        $('.delete-deposit').click(async function() {
            if (await confirmDelete()) {
                var depositId = $(this).data('id'); 
                window.location.href = '/delete/movement/' + depositId;
            }
        });

        $('.delete-exit').click(async function() {
            if (await confirmDelete()) {
                var exitId = $(this).data('id'); 
                window.location.href = '/delete/movement/' + exitId;
            }
        });
    });
</script>