<?php
    $links = [
        [
            'name' => 'Home',
            'route' => '/'
        ],
        [
            'name' => 'About',
            'route' => '/about.php'
        ],
        [
            'name' => 'Sintaxe Basica',
            'route' => 'documentation/referenciaDaLinguagem/sintaxeBasica.php'
        ]    
    ];  

    echo '<ul>';
    foreach($links as $link) {
        echo '<li>';
        
        echo "<a href=". $link['route']  .">".   $link['name']  . '</a>';   

        echo '</li>';
    }
    echo '<ul>';
?>