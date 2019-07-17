<?php
    $links = [
        [
            'name' => 'Home',
            'route' => '/',
            'children' => null
        ],
        [
            'name' => 'About',
            'route' => '/about.php',
            'children' => null
        ],
        [
            'name' => 'Documentation',
            'route' => '/index.php',
            'children' => [
                [
                    'name' => 'Sintaxe Basica',
                    'route' => 'documentation/referenciaDaLinguagem/sintaxeBasica.php'
                ]
            ]
        ],    
    ];  

    echo '<ul>';
    foreach($links as $link) {
        echo '<li>';
        
        echo "<a href=". $link['route']  .">".   $link['name']  . '</a>';   

        if($link['children']) {
            foreach($link['children'] as $child) {

            echo '<ul><li>';
        
            echo "<a href=". $child['route']  .">".   $child['name']  . '</a>';   

            echo '</li></ul>';

            }
        }

        echo '</li>';
    }
    echo '<ul>';
?>