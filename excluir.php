<?php
    require_once 'app/Entity/Projeto.php';
    use \App\Entity\Projeto;

    //validação da requisição
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){ 
        header('location: index.php?status=error');
        exit;
    }

    //consulta o projeto
    $objProjeto = Projeto::getProjeto($_GET['id']);
    
    //validação do objeto Projeto
    if(!$objProjeto instanceof Projeto){
        header('location: index.php?status=error');
        exit; 
    }

    if(isset($_POST['excluir'])){
        $objProjeto->excluir();
        header('location: index.php?status=success');
    }


    include 'includes/header.php';
    include 'includes/confirmar-exclusao.php';
    include 'includes/footer.php';
?>