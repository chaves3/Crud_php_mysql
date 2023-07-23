<?php 

switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		
		 $nome = $_POST["nome"];
		 $descricao = $_POST["descricao"];
		 $quantidade = $_POST["quantidade"];


		 $sql =  "INSERT INTO lista (nome_item, descricao, quantidade) VALUES ('".$nome."', '".$descricao."', '".$quantidade."')";

		
		  $res = $conn->query($sql);
          

          if ($res==true) {
          	  print "<script>alert('Cadastrado com sucesso')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
          
          }else{
             
              print "<script>alert('Não foi possivel cadastrar')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
        
          }

	break;
	
	case 'editar':
		 $nome = $_POST["nome"];
		 $descricao = $_POST["descricao"];
		 $quantidade = $_POST["quantidade"];
         
         $sql = "UPDATE lista SET nome_item='{$nome}',  descricao='{$descricao}', quantidade='{$quantidade}' WHERE id=".$_REQUEST["id"];

		 $res = $conn->query($sql);
         
          if ($res==true) {
          	  print "<script>alert('Editado com sucesso')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
          
          }else{
             
              print "<script>alert('Não foi possivel Editar')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
        
          }

		break;

	case 'excluir':
		
		$sql = "DELETE  FROM lista WHERE id=".$_REQUEST["id"];

			 $res = $conn->query($sql);
         
          if ($res==true) {
          	  print "<script>alert('Excluído com sucesso')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
          
          }else{
             
              print "<script>alert('Não foi possivel Excluir')</script>";
          	  print "<script>location.href= '?page=listar'</script>";
        
          }

		break;	


}







 ?>