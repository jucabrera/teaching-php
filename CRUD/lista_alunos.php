<h1>Alunos</h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Email</th>
			<th scope="col">Ações</th>
		</tr>
	</thead>
	<tbody>
  <?php
		foreach ( $alunos as $aluno ) :
			?>
    <tr>
			<th scope="row"><?php echo $aluno['id']?></th>
			<td><?php echo $aluno['email']?></td>
			<td><a href="index.php?acao=alterar&id=<?php echo $aluno['id']?>">Alterar</a>
				| <a href="index.php?acao=excluir&id=<?php echo $aluno['id']?>">Excluir</a></td>
		</tr>
    <?php
		endforeach
		;
		?>
  </tbody>
</table>

