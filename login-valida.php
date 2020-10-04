<?php include("estrutura-base/cabecalho.php"); 

    // Incluindo BD e recebendo dados
    include("conexao.php");
    $user = $_POST["txtNome"];
    $senha = $_POST["txtSenha"];

    // Iniciando sessao
    session_start();
    $_SESSION['verificacao'] = false;
    
    // Verificando login
    try {
        $verifica = $conn->prepare("SELECT nomeUsuario, senhaUsuario FROM tbusuario WHERE nomeUsuario = '$user' AND senhaUsuario = '$senha'");
        $verifica->execute();
        
        while($login = $verifica->fetch(PDO::FETCH_BOTH)){
            if($login['nomeUsuario'] == $user && $login['senhaUsuario'] == $senha){
                $verificacao = true;
                $_SESSION['verificacao'] = true;
            }else{
                $verificacao = false;
                $_SESSION['verificacao'] = false;
            }
        }
    } catch (PDOException $e) {
        echo "Erro". $e->getMessage();
    }

?>

    <section id="section-login">
        <div class="center">
            <?php 
                if($verificacao == true){
                    echo "Logado";
                }else{
                    echo "Usuario e/ou senha errado!";
                }
            ?>
        </div>
    </section>

<?php include("estrutura-base/rodape.php"); ?>