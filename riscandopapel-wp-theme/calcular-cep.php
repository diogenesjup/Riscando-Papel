<?php

	ini_set("display_errors", FALSE );
	ini_set("log_errors", TRUE );
	ini_set("error_log","log_erros_php.log");
    
    $saida = "";

    $cep_destino = $_POST["cepUsuario"];

	$parametros = array();

	// P A C
	
	// Código e senha da empresa, se você tiver contrato com os correios, se não tiver deixe vazio.

	$parametros['nCdEmpresa'] = '';
	$parametros['sDsSenha'] = '';

	// CEP de origem e destino. Esse parametro precisa ser numérico, sem "-" (hífen) espaços ou algo diferente de um número.
	$parametros['sCepOrigem'] = '06182110';
	$parametros['sCepDestino'] = $cep_destino;

	// O peso do produto deverá ser enviado em quilogramas, leve em consideração que isso deverá incluir o peso da embalagem.
	$parametros['nVlPeso'] = '1';

	// O formato tem apenas duas opções: 1 para caixa / pacote e 2 para rolo/prisma.
	$parametros['nCdFormato'] = '1';

	
	// O comprimento, altura, largura e diametro deverá ser informado em centímetros e somente números
    $parametros['nVlComprimento'] = '16';
	$parametros['nVlAltura'] = '5';
	$parametros['nVlLargura'] = '15';
	$parametros['nVlDiametro'] = '0';

	// Aqui você informa se quer que a encomenda deva ser entregue somente para uma determinada pessoa após confirmação por RG. Use "s" e "n".
	$parametros['sCdMaoPropria'] = 'n';
	
	// O valor declarado serve para o caso de sua encomenda extraviar, então você poderá recuperar o valor dela. Vale lembrar que o valor da encomenda interfere no valor do frete. Se não quiser declarar pode passar 0 (zero).
    $parametros['nVlValorDeclarado'] = '0';

	// Se você quer ser avisado sobre a entrega da encomenda. Para não avisar use "n", para avisar use "s".
    $parametros['sCdAvisoRecebimento'] = 'n';

	// Formato no qual a consulta será retornada, podendo ser: Popup – mostra uma janela pop-up | URL – envia os dados via post para a URL informada | XML – Retorna a resposta em XML

	$parametros['StrRetorno'] = 'xml';

	// Código do Serviço, pode ser apenas um ou mais. Para mais de um apenas separe por virgula. SEDEX (40010) e PAC (respectivamente)

	$parametros['nCdServico'] = '41106'; //40010

	$parametros = http_build_query($parametros);

	$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';

	$curl = curl_init($url.'?'.$parametros);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$dados = curl_exec($curl);

	$dados = simplexml_load_string($dados);

	//echo "<p style='padding-top:12px;'>Valor estimado do frete:</p>";

	foreach($dados->cServico as $linhas) {

		if($linhas->Erro == 0) {

			//echo $linhas->Codigo.'</br>';

			//echo "<span style='color:#747474;'>";

			if($linhas->Codigo=="41106") $saida = $saida . "<p>Valor estimado do frete:</p>
			<p style=''><img src='images/pac.png' style='height:24px;width:auto;margin-right:8px;' /> R$ ".$linhas->Valor." (".$linhas->PrazoEntrega." dias)</p>";

			//if($linhas->Codigo=="40010") echo "<p style='font-size:16px;'><img src='https://8rnuts.servidorseguro.cloud/wp-content/uploads/2020/09/sedex.png' style='height:24px;width:auto;margin-right:8px;' />";

			//echo "R$ ";

			//echo $linhas->Valor .'</span></p>';

			//echo "<p><b>Tempo de entrega:</b> ";

			//echo $linhas->PrazoEntrega.' Dias</p>';

		}else {

			$saida = "<p>". $linhas->MsgErro. "</p>";

		}

	}


    // S E D E X



	$parametros = array();
	
	// Código e senha da empresa, se você tiver contrato com os correios, se não tiver deixe vazio.

	$parametros['nCdEmpresa'] = '';
	$parametros['sDsSenha'] = '';

	// CEP de origem e destino. Esse parametro precisa ser numérico, sem "-" (hífen) espaços ou algo diferente de um número.
	$parametros['sCepOrigem'] = '09560050';
	$parametros['sCepDestino'] = $cep_destino;

	// O peso do produto deverá ser enviado em quilogramas, leve em consideração que isso deverá incluir o peso da embalagem.
	$parametros['nVlPeso'] = '1';

	// O formato tem apenas duas opções: 1 para caixa / pacote e 2 para rolo/prisma.
	$parametros['nCdFormato'] = '1';

	
	// O comprimento, altura, largura e diametro deverá ser informado em centímetros e somente números
    $parametros['nVlComprimento'] = '16';
	$parametros['nVlAltura'] = '5';
	$parametros['nVlLargura'] = '15';
	$parametros['nVlDiametro'] = '0';

	// Aqui você informa se quer que a encomenda deva ser entregue somente para uma determinada pessoa após confirmação por RG. Use "s" e "n".
	$parametros['sCdMaoPropria'] = 'n';
	
	// O valor declarado serve para o caso de sua encomenda extraviar, então você poderá recuperar o valor dela. Vale lembrar que o valor da encomenda interfere no valor do frete. Se não quiser declarar pode passar 0 (zero).
    $parametros['nVlValorDeclarado'] = '0';

	// Se você quer ser avisado sobre a entrega da encomenda. Para não avisar use "n", para avisar use "s".
    $parametros['sCdAvisoRecebimento'] = 'n';

	// Formato no qual a consulta será retornada, podendo ser: Popup – mostra uma janela pop-up | URL – envia os dados via post para a URL informada | XML – Retorna a resposta em XML

	$parametros['StrRetorno'] = 'xml';

	// Código do Serviço, pode ser apenas um ou mais. Para mais de um apenas separe por virgula. SEDEX (40010) e PAC (respectivamente)

	$parametros['nCdServico'] = '40010'; //40010

	$parametros = http_build_query($parametros);

	$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';

	$curl = curl_init($url.'?'.$parametros);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$dados = curl_exec($curl);

	$dados = simplexml_load_string($dados);

	//echo "<p style='padding-top:12px;'>Valor estimado do frete:</p>";

	foreach($dados->cServico as $linhas) {

		if($linhas->Erro == 0) {

			//echo $linhas->Codigo.'</br>';

			//echo "<span style='color:#747474;'>";

			if($linhas->Codigo=="40010") $saida = $saida . "<p style=''><img src='images/sedex.png' style='height:24px;width:auto;margin-right:8px;' /> R$ ".$linhas->Valor." (".$linhas->PrazoEntrega." dias)</p>";

			//if($linhas->Codigo=="40010") echo "<p style='font-size:16px;'><img src='https://8rnuts.servidorseguro.cloud/wp-content/uploads/2020/09/sedex.png' style='height:24px;width:auto;margin-right:8px;' />";

			//echo "R$ ";

			//echo $linhas->Valor .'</span></p>';

			//echo "<p><b>Tempo de entrega:</b> ";

			//echo $linhas->PrazoEntrega.' Dias</p>';

		}else {

			$saida = "<p>". $linhas->MsgErro. "</p>";

		}

	}

	echo $saida;

?>