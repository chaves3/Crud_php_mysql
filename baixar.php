<?php	

	include_once("config.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>nome_item</th>';
	$html .= '<th>descricao</th>';
	$html .= '<th>quantidade</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_transacoes = "SELECT * FROM lista";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_transacoes['id'] . "</td>";
		$html .= '<td>'.$row_transacoes['nome_item'] . "</td>";
		$html .= '<td>'.$row_transacoes['descricao'] . "</td>";
		$html .= '<td>'.$row_transacoes['quantidade'] . "</td></tr>";
		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório de lista pra compras</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_de_compras.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>