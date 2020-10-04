<?php 
    include("conversor/hg-finance-php/index.php");
    
    $finance = $HGFinance->get();
    $dolar = $finance['currencies']['USD']['buy'];
    $euro = $finance['currencies']['EUR']['buy'];
    $btc = $finance['currencies']['BTC']['buy'];

    $quantia = empty($_POST['txtQuantia']) ? '' : $_POST['txtQuantia'];
    $moeda = empty($_POST['txtMoeda']) ? '' : $_POST['txtMoeda'];
    $resultado = '';

    if($moeda == 'dolar'){
        $resultado = "$quantia reais em Dolar: ".number_format($quantia/$dolar,2);
    }else if($moeda == 'euro'){
        $resultado = "$quantia reais Euro: ".number_format($quantia/$euro,2);
    }else if($moeda =='BTC'){
        $resultado = "$quantia reais em BTC: ".number_format($quantia/$btc,8);
    }
?>

    <section id="section-conversor">
        <div class="center">
            <form action="conversor.php" method="post" id="form-conversor">
                <fieldset>
                    <legend>Converta sua moeda!</legend>
                    <div><input type="text" name="txtQuantia" id="txtQuantia" required placeholder="Quantia em reais"></div>
                    <div>
                        <select name="txtMoeda" id="txtMoeda">
                            <option value="dolar">Dolar</option>
                            <option value="euro">Euro</option>
                            <option value="BTC">BTC</option>
                        </select>
                        <p><?php echo $resultado; ?></p>
                    </div>
                    <div>
                        <input type="reset" value="RESETAR">
                        <input type="submit" value="ENVIAR">
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

<?php include("estrutura-base/rodape.php"); ?>