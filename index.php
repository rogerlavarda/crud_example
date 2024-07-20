<?php
    require_once 'app/Entity/Projeto.php';

    use \App\Entity\Projeto;

    $projetos = Projeto::getProjetos();
    //print_r($projetos); exit;

    include 'includes/header.php';    
    include 'includes/listagem.php';    
    include 'includes/footer.php';
?>