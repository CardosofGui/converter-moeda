<?php include("estrutura-base/cabecalho.php"); 

    session_start();
    $logged = $_SESSION['verificacao'];

    if($logged == true){
        include("form-conversor.php");
    }else{
        echo "Cadastre-se antes!";
    }


?>

<?php include("estrutura-base/rodape.php"); ?>