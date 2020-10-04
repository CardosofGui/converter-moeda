<?php include("estrutura-base/cabecalho.php"); 

    include("conexao.php");

    $user = empty($_POST["txtNome"]) ? "" : $_POST["txtNome"];
    $email = empty($_POST["txtEmail"]) ? "" : $_POST["txtEmail"];
    $senha = empty($_POST["txtSenha"]) ? "" : $_POST["txtSenha"];
    
    $cadastroRealizado = false;

    try {
        $cadastrar = $conn ->prepare("INSERT INTO tbUsuario(nomeUsuario, emailUsuario, senhaUsuario) VALUES('$user','$email','$senha')");
        $cadastrar ->execute();

        if($cadastrar->fetch()){
            $cadastroRealizado = true;
        }else{
            $cadastroRealizado = false;
        }

    } catch (PDOException $e) {
        echo "Erro". $e;
    }

?>

    <section id="section-cadastro">
        <div class="center">
            <?php 
                if($cadastroRealizado){
                    session_start();
                    echo "Cadastro bem sucedido!";
                }else{
                    echo "Você não está realizando um cadastro!";
                }
            ?>
        </div>
    </section>

<?php include("estrutura-base/rodape.php"); ?>