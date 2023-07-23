<h1>Lista Itens</h1>

<<?php 

$sql = " SELECT * FROM  lista";

$res = $conn->query($sql);

$qtd = $res->num_rows;


if ($qtd > 0) {
    print "<table class='table table-hover table-striped' table-bordered>";
        print "<tr>";
    	print "<th>ID</th>";
    	print "<th>NOME DO ITEM</th>";
    	print "<th>DESCRIÇÃO</th>";
    	print "<th>QUANTIDADE</th>";
    	print "<th>AÇÕES</th>";
    	print "</tr>";
    while ($row = $res->fetch_object()) {
    	print "<tr>";
    	print "<td>".$row->id."</td>";
    	print "<td>".$row->nome_item."</td>";
    	print "<td>".$row->descricao."</td>";
    	print "<td>".$row->quantidade."</td>";
    	print "<td>
           
           <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class = 'btn btn-success'>EDITAR</button>

           <button  onclick=\"if(confirm('Tem certeza que você quer deletar esse item?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class =  'btn btn-danger'>EXCLUIR</button>

    	</td>";
    	print "</tr>";
    }

  print "</table>";

}else{
   
print "<p class='alert alert-danger'>Não encontrou resultados!</p>";


}


 ?>