<div class="row">
    <div class="col">
        <?= table('
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>João</td>
            <td>25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Maria</td>
            <td>28</td>
        </tr>
        <tr>
            <td>3</td>
            <td>pedro</td>
            <td>8</td>
        </tr>
        <!-- Mais linhas da tabela -->
    </tbody>
</table>
'); ?>

    </div>
    <div class="col">
        <?= table('
<table class="table">
    <thead>
        <tr>
            <th scope="col">Dia</th>
            <th scope="col">Livro</th>
            <th scope="col">Professor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>13</td>
            <td>Matematica</td>
            <td>Claudiano Arlindo Kubitheck</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Geografia</td>
            <td>Algemania Boarosa</td>
        </tr>
        <!-- Mais linhas da tabela -->
    </tbody>
</table>
'); ?>

    </div>
    <div class="col">
        <?= table('
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Produto</th>
            <th scope="col">ID_Dono</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Iphone 38 pro max</td>
            <td>25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Notebook Caloi</td>
            <td>28</td>
        </tr>
        <!-- Mais linhas da tabela -->
    </tbody>
</table>
'); ?>

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
&lt;?= table('
&lt;table class="table">
    &lt;thead>
        &lt;tr>
            &lt;th scope="col">ID</th>
            &lt;th scope="col">Nome</th>
            &lt;th scope="col">Idade</th>
        &lt;/tr>
    &lt;/thead>
    &lt;tbody>
        &lt;tr>
            &lt;td>1</td>
            &lt;td>João</td>
            &lt;td>25</td>
        &lt;/tr>
        &lt;tr>
            &lt;td>2</td>
            &lt;td>Maria</td>
            &lt;td>28</td>
        &lt;/tr>  
    &lt;/tbody>
&lt;/table>
'); ?
&gt;
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