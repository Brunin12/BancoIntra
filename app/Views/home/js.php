<script type="module">
    $(() => {
        $('.card:eq(0)').hide().fadeIn(1500); // Exibe a primeira carta (índice 0)
        $('.card:eq(1)').hide().fadeIn(1500); // Exibe a segunda carta (índice 1)
        $('.card:eq(2)').hide().fadeIn(1500); // Exibe a terceira carta (índice 2)
        $('.card:eq(3)').hide().fadeIn(1500); // Exibe a quarta carta (índice 3)

        $('#hulk').click(() => {
            $('.content-wrapper').addClass('animation__shake');
            setTimeout(() => {
                $('.content-wrapper').removeClass('animation__shake');
            }, 2000); // Aguarda 2 segundos antes de remover a classe
        });
    });
</script>
