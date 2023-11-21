<div class="row">
    <div class="col">
        <?= social(
            'Bruno Parreira', // Nome
            'Desenvolvedor Full Stack', // Slogan ou descrição
            base_url('android-chrome-512x512.png'), // URL da imagem do perfil
            'info', // Classe para estilização (pode ser 'success', 'warning', etc.)
            [
                'label' => 'Experiencia', // Rótulo para a primeira informação
                'value' => '4 Anos', // Valor associado à primeira informação
                'label2' => 'Projetos', // Rótulo para a segunda informação
                'value2' => '37', // Valor associado à segunda informação
                'label3' => 'Renda Passiva', // Rótulo para a terceira informação
                'value3' => '1.3717 trilhões de Reais', // Valor associado à terceira informação
            ]
        ); ?>

    </div>
</div>
<blockquote class="quote-info">
    <h5 id="tip">Código</h5>
    <p>Copie este código e use em qualquer local da View</p>
    <div class="language-html highlighter-rouge">
        <div class="highlight">
            <div class="row">
                <div class="col-10">
                    <pre class="highlight">
                        <code id="codeSnippet">
&lt;?= social(
    'Bruno Parreira', // Nome
    'Desenvolvedor Web', // Slogan ou descrição
    'img/user_profile.jpg', // URL da imagem do perfil
    'info', // Classe para estilização (pode ser 'success', 'warning', etc.)
    [ 
        'label' => 'Followers', // Rótulo para a primeira informação
        'value' => '500', // Valor associado à primeira informação
        'label2' => 'Posts', // Rótulo para a segunda informação
        'value2' => '120', // Valor associado à segunda informação
        'label3' => 'Following', // Rótulo para a terceira informação
        'value3' => '300', // Valor associado à terceira informação
    ]
); ?&gt;
                        </code>
                    </pre>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary w-100 h-100" onclick="copyCode()">
                        Copiar
                    </button>
                </div>
            </div>
        </div>
    </div>
</blockquote>

<script>
    function copyCode() {
        const codeSnippet = document.getElementById('codeSnippet');
        const textarea = document.createElement('textarea');
        textarea.value = codeSnippet.textContent;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        alert('Código copiado!');
    }
</script>