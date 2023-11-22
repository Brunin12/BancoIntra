<div class="row mb-3">
    <div class="col">
        <?= box(
            'Lucro',
            'R$ 4.000 P/mês',
            'bag', 'success' // Novo ícone para Renda
        ) ?>
    </div>
    <div class="col">
        <?= box(
            'Faturamento',
            'R$ 10.000 p/mês',
            'cash', 'info' // Novo ícone para Faturamento
        ) ?>
    </div>
    <div class="col">
        <?= box(
            'Despesas',
            'R$ 6.000 p/mês',
            'card', 'warning' // Novo ícone para Despesas
        ) ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <?= social(
            'Bruno Parreira', 
            'Desenvolvedor Full Stack', 
            base_url('android-chrome-512x512.png'),
            'info', 
            [
                'label' => 'Experiencia', 
                'value' => '4 Anos', 
                'label2' => 'Projetos', 
                'value2' => '37', 
                'label3' => 'Renda Passiva', 
                'value3' => '1.3717 trilhões de Reais',
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