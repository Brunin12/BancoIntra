<script type="module">
    $(() => {
        const sleep = 550;
        $('.card:eq(0)').hide()
        $('.card:eq(1)').hide()
        $('#carousel').hide()
        $('#hulk').hide()
        $('.small-box:eq(1)').hide()
        $('.small-box:eq(2)').hide()
        $('.small-box:eq(0)').hide().show(sleep);

        setTimeout(() => {
            $('.small-box:eq(1)').show(sleep - 200);
            setTimeout(() => {
                $('.small-box:eq(2)').show(sleep - 300);
                setTimeout(() => {
                    $('.card:eq(0)').show(sleep - 100);
                    setTimeout(() => {
                        
                        $('#carousel').show(sleep);
                        setTimeout(() => {
                            $('.card:eq(1)').show(sleep);
                            setTimeout(() => {
                                $('#hulk').show(sleep);
                            }, sleep);
                        }, sleep);
                    }, sleep);
                }, sleep - 400);
            }, sleep - 300);
        }, sleep - 200);




        $('#hulk').click(() => {
            $('.content-wrapper').addClass('animation__shake');
            setTimeout(() => {
                $('.content-wrapper').removeClass('animation__shake');
            }, 2000); // Aguarda 2 segundos antes de remover a classe
        });
    });
</script>