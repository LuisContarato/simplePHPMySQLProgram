<html>
<head>
	<meta charset="utf-8" />
	<title>Gerenciador de Tarefas</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset class = "container">
			<legend>Nova tarefa</legend>
			<table>
				<tr>
					<label>
						Tarefa:
					</label>
				</tr>
				<tr>
					<input type="text" name="nome" class = "nome" />
				</tr>
				<tr>
					<label>
						Descrição (opcional):
					</label>
				</tr>
				<tr>
					<textarea name="descricao"></textarea>
				</tr>
				<tr>
					<label>
						Prazo (Opcional):
					</label>
				</tr>
				<tr>
					<textarea name = "prazo"></textarea>
				</tr>
				<tr>
					<fieldset class = "radioButton">
						<legend>Prioridade:</legend>
						<label>
							<input type="radio" name="prioridade" value="1" checked /> Baixa
							<input type="radio" name="prioridade" value="2" /> Média
							<input type="radio" name="prioridade" value="3" /> Alta
						</label>
					</label>
				</fieldset>
			</tr>
			<tr>
				<label>
					Tarefa concluída:
					<input type="checkbox" name="concluida" value="sim" />
				</label>
			</tr>
			<tr>
				<input type="submit" value="Cadastrar" />
			</tr>
		</table>
	</fieldset>
</form>
<table>
	<tr>
		<th>Tarefa</th>
		<th>Descricao</th>
		<th>Prazo</th>
		<th>Prioridade</th>
		<th>Concluída</th>
	</tr>
	<?php foreach ($lista_tarefas as $tarefa) : ?>
		<tr>
			<td><?php echo $tarefa['nome']; ?> </td>
			<td><?php echo $tarefa['descricao']; ?> </td>
			<td><?php echo $tarefa['prazo']; ?> </td>
			<td><?php 
				if ($tarefa['prioridade'] == 1) { echo 'Baixa'; }
				if ($tarefa['prioridade'] == 2) { echo 'Média'; }
				if ($tarefa['prioridade'] == 3) { echo 'Alta'; } ?> 
			</td>
			<td><?php echo $tarefa['concluida']; ?> </td>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>