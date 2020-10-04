<?php include("estrutura-base/cabecalho.php"); ?>

<?php 

    session_start();
    $logged = $_SESSION['verificacao'];
    if($logged == true){
        echo "Logado com sucesso";
    }else{
        include("cadastro-login/form-login.php");
    }

?>
    

<?php include("estrutura-base/rodape.php"); ?>