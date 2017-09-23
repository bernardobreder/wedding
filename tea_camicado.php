<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<?php include "header.php" ?>
		<?php include "connection.php" ?>
		<title>Paula e Bernardo - Chá de Panela</title>
	</head>
	<body>
		<div class="container">
		
			<div class="page-header">
				<h1>Lista de presente do Chá de Panela</h1>
			</div>
			<p>O mercado Pão de Açucar não faz lista de presente. Então, a lista abaixo foi feita no no mercado para que possa gerenciar a quantidade de produtos ainda disponível.</p>
			<p>Antes de reservar o produto, primeiro certifique que tenha o produto no mercado, pois pode ser que tenha acabado. O mercado sempre renova os seus produtos semanalmente.</p>
			
			<table class="table table-hover table-content">
				<tr>
				   <th class="hidden-xs" width="200px">Imagem</th>
				   <th>Nome</th>
				   <th class="hidden-xs" width="100px">Disponível</th>
				   <th class="text-center" width="100px">Reserve</th>
			    </tr>
				<?php
					$query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'", 
						mysql_real_escape_string($user),
            			mysql_real_escape_string($password));
					$resultset = mysql_query("SELECT * FROM (SELECT p.id, p.title, p.url, p.count - (select count(*) from book b where b.product_id = p.id) count FROM product p) t WHERE t.count > 0");
					while ($row = mysql_fetch_object($resultset)) {
				?>
					<tr class="book-item-<?php echo $row->id ?>">
						<td><img src="<?php echo $row->url ?>" class="img-responsive img-thumbnail" width="200px" height="200px"/></td>
						<td><p><?php echo $row->title ?></p></td>
						<td class="text-center"><p><?php echo $row->count ?></p></td>
						<td class="text-center"><button type="button" class="btn btn-success" onclick="teaOrder(<?php echo $row->id; ?>)">Reservar</button></td>
					</tr>
				<?php } ?>
			</table>
			
		</div>
		<?php include "footer.php" ?>
	</body>
</html>