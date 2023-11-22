<div class="row">
    <div class="col">
        <?= box('box teste', 'Lorem ipsum dolor sit amet.', 'bag', 'info', base_url('teste')) ?>
    </div>
    <div class="col">
        <?= box('box teste', 'Lorem ipsum dolor sit amet', 'cash', 'success', base_url('teste')) ?>
    </div>
    <div class="col">
        <?= box('box teste', 'Lorem ipsum dolor sit amet.' , 'user', 'warning', base_url('teste')) ?>
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
&lt;?= box('Titulo', 'Texto', 'icone', 'cor' 'Link'); ?&gt;
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
