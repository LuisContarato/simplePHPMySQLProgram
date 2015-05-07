<?php session_start(); ?>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
</head>
<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova tarefa</legend>
			<table>
			<tr> 
				<td>
					Nome:
				</td>
				<td>
					<input type="text" name="nome" />
				</td>
				</tr>
				<tr>
				<td>
					Telefone:
				</td>
				<td>
					<input type="text" name="telefone"/>
				</td>
				</tr>
				<tr>
				<td>
					Email:
				</td>
				<td>
					<input type="email" name="email"/>
				</td>
				</tr>
				</table>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>
	<?php
		if (isset($_GET['nome']) && isset($_GET['telefone']) && isset($_GET['email'])) {
			$_SESSION['nome'][] = $_GET['nome'];
		}
		$agenda = array();
		if (isset($_SESSION['nome']) && isset($_SESSION['telefone']) && isset($_SESSION['email'])) {
			$agenda['nome'][] = $_SESSION['nome'];
			$agenda['telefone'][] = $_SESSION['telefone'];
			$agenda['email'][]= $_SESSION['email'];
		}
	?>

	<table>
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Email</th>
		</tr>

		<?php for ($i = 0 ; $i < 1; $i++) : ?>
		<tr>
			<td><?php
				$nome = $agenda['nome'][$i]; 
				echo $nome; ?> </td>
		</tr>
		<?php endfor; ?>
	</table>
</body>
</html>