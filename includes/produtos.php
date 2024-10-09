<?php
$produtos = [
    [
        'nome' => 'Cadeira Ergonômica',
        'descricao' => 'Cadeira projetada para oferecer conforto e suporte durante longas horas de trabalho.',
        'foto' => 'assets/cadeira-ergonomica.jpg',
        'preco' => 'R$ 450.00'
    ],
    [
        'nome' => 'Mochila de Lona',
        'descricao' => 'Mochila resistente e espaçosa, ideal para uso diário ou viagens.',
        'foto' => 'assets/mochila.jpeg',
        'preco' => 'R$ 120.00'
    ],
    [
        'nome' => 'Garrafa Térmica',
        'descricao' => 'Mantém bebidas quentes ou frias por até 12 horas. Feita em inox.',
        'foto' => 'assets/garrafa.jpeg',
        'preco' => 'R$ 70.00'
    ],
    [
        'nome' => 'Fone de Ouvido Bluetooth',
        'descricao' => 'Fones sem fio com cancelamento de ruído e ótima qualidade sonora.',
        'foto' => 'assets/fone.jpeg',
        'preco' => 'R$ 200.00'
    ],
    [
        'nome' => 'Relógio de Pulso Digital',
        'descricao' => 'Relógio moderno com múltiplas funções, como cronômetro e alarme.',
        'foto' => 'assets/relogio.jpeg',
        'preco' => 'R$ 150.00' 
    ],
    [
        'nome' => 'Conjunto de Canetas Coloridas',
        'descricao' => 'Pacote com 10 canetas de cores variadas, ideais para escrita e desenho.',
        'foto' => 'assets/canetas.jpeg',
        'preco' => 'R$ 30.00' 
    ],
    [
        'nome' => 'Camiseta Básica',
        'descricao' => 'Camiseta de algodão, disponível em diversas cores e tamanhos.',
        'foto' => 'assets/camiseta.jpeg',
        'preco' => 'R$ 40.00' 
    ],
    [
        'nome' => 'Notebook',
        'descricao' => 'Laptop leve e potente, ideal para trabalho e entretenimento.',
        'foto' => 'assets/notebook.jpeg',
        'preco' => 'R$ 3.200.00' 
    ],
    [
        'nome' => 'Lampada LED Inteligente',
        'descricao' => 'Lâmpada que pode ser controlada pelo smartphone e tem opções de cores.',
        'foto' => 'assets/lampada.jpeg',
        'preco' => 'R$ 60.00' 
    ],
    [
        'nome' => 'Aspirador de Pó Portátil',
        'descricao' => 'Aspirador compacto, perfeito para pequenas sujeiras e móveis.',
        'foto' => 'assets/aspirador.jpeg',
        'preco' => 'R$ 180.00' 
    ],
    [
        'nome' => 'Kit de Ferramentas Básico',
        'descricao' => 'Conjunto com 10 ferramentas essenciais para pequenos reparos.',
        'foto' => 'assets/ferramentas.jpeg',
        'preco' => 'R$ 120.00' 
    ],
    [
        'nome' => 'Colchão Inflável',
        'descricao' => 'Colchão resistente e fácil de inflar, ideal para acampamentos.',
        'foto' => 'assets/colchao.jpeg',
        'preco' => 'R$ 100.00' 
    ]
    ];
    for ($i = 0; $i < count($produtos); $i++){
        echo '<div class="product">';
        echo '<img src="' . $produtos[$i]['foto'] . '" alt="' . $produtos[$i]['nome'] . '">';
        echo '<h2>' . $produtos[$i]['nome'] . '</h2>';
        echo '<p>' . $produtos[$i]['descricao'] . '</p>';
        echo '<p>Preço:' . $produtos[$i]['preco'] . '</p>';
        echo '</div>';
    };

