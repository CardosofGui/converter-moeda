<?php 
    include("estrutura-base/cabecalho.php"); 
    session_start();
    $_SESSION['verificacao'];
?>

    <section id="section-cadastro">
        <div class="center">
            <form action="cadastro-valida.php" method="post" id="form-cadastro">
                <fieldset>
                    <legend>Faça seu cadastro</legend>
                    <div><input type="text" name="txtNome" id="txtNome" required placeholder="Usuario"></div>
                    <div><input type="email" name="txtEmail" id="txtEmail" required placeholder="E-mail"></div>
                    <div><input type="password" name="txtSenha" id="txtSenha" required placeholder="Senha"></div>
                    <div>
                        <input type="reset" value="RESETAR">
                        <input type="submit" value="ENVIAR">
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

<?php include("estrutura-base/rodape.php"); ?>