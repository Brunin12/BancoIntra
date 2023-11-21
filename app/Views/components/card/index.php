<div class="row">
    <div class="col">
        <?= card('Card teste', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nobis minima ut harum deleniti voluptas quaerat, exercitationem repudiandae est vero fugit voluptates fuga. Tempore blanditiis ullam velit expedita voluptates distinctio!') ?>
    </div>
    <div class="col">
        <?= card('Card teste', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nobis minima ut harum deleniti voluptas quaerat, exercitationem repudiandae est vero fugit voluptates fuga. Tempore blanditiis ullam velit expedita voluptates distinctio!') ?>
    </div>
    <div class="col">
        <?= card('Card teste', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nobis minima ut harum deleniti voluptas quaerat, exercitationem repudiandae est vero fugit voluptates fuga. Tempore blanditiis ullam velit expedita voluptates distinctio!') ?>
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
&lt;?= card('Titulo', 'Texto', '&lt;a>Link&lt;/a>'); ?&gt;
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
