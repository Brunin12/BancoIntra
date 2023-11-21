<div class="row mb-3">
    <div class="col">
        <?= box(
            'Lucro',
            'R$ 4.000 P/mês',
            'bag' // Novo ícone para Renda
        ) ?>
    </div>
    <div class="col">
        <?= box(
            'Faturamento',
            'R$ 10.000 p/mês',
            'cash' // Novo ícone para Faturamento
        ) ?>
    </div>
    <div class="col">
        <?= box(
            'Despesas',
            'R$ 6.000 p/mês',
            'card' // Novo ícone para Despesas
        ) ?>
    </div>
</div>
<div class="row mb-3">
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
<div class="row mb-3">
    <div class="col">
        <?= carousel($slides); ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col w-100">
        <?= card(
            'Resumo',
            'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, veritatis corrupti eaque ducimus impedit enim deleniti omnis earum dolor facere itaque et culpa magnam quod asperiores! Ad tenetur magnam aut!'
        ) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <a class="nav-link btn btn-success " id="hulk">Hulk Esmaga!!!</a>
    </div>
</div>