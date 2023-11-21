<?php
$slides = [
    [
        'image' => base_url('assets/dist/img/photo1.png'),
        'alt' => 'Slide 1 Caption'
    ],
    [
        'image' => base_url('assets/dist/img/photo2.png'),
        'alt' => 'Slide 2 Caption'
    ],
    [
        'image' => base_url('assets/dist/img/photo3.jpg'),
        'alt' => 'Slide 3 Caption'
    ]
];
?>
<div class="row">
    <div class="col">
        <?= carousel($slides); ?>
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
                        &lt;?php
// Exemplo de uso da função carousel
$slides = [
    [
        'image' => 'slide1.jpg',
        'caption' => 'Slide 1 Caption'
    ],
    [
        'image' => 'slide2.jpg',
        'caption' => 'Slide 2 Caption'
    ],
    [
        'image' => 'slide3.jpg',
        'caption' => 'Slide 3 Caption'
    ]
];

echo carousel($slides);
?&gt;

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
