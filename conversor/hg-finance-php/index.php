<?php

/*
 * Obtendo os dados HG Finance
 *
 * Consulte nossa documentacao em https://console.hgbrasil.com/documentation/finance
 * Contato: https://console.hgbrasil.com/tickets
 *
 * Ontenha uma chave gratuitamente: https://console.hgbrasil.com/keys
 *
 * Copyright 2018 - HG Brasil - HG Finance
 *
*/

include 'hg_finance.php';

// Primeiro parametro do construtor recebe a chave da API
$HGFinance = new HGFinance('114ababa');

// Voce pode configurar via metodos
// $HGFinance->set_key('SUA-CHAVE');
// $HGFinance->set_locale('en');
// $HGFinance->set_use_ssl(true);

// Metodo para obter os todos dados
$HGFinance->get();

// Voce pode acessar qualquer endpoint da API
// $HGFinance->get('currencies');
// $HGFinance->get('taxes');
// $HGFinance->get('historical', array('start_date' => '2018-12-20', 'end_date' => '2018-12-24'));

// Verificando a autenticacao da chave

$finance = $HGFinance->get();


// Retorno dos resultados da API

?>
