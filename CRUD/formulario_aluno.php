<form method="post">
	<input type='hidden' name='id' value="<?php echo $id ?? ''; ?>">
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label> <input type="email"
			name="email" value="<?php echo $email ?? ''; ?>" class="form-control"
			id="exampleInputEmail1" aria-describedby="emailHelp"
			placeholder="Enter email">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Senha</label> <input
			type="password" name="senha" class="form-control"
			id="exampleInputPassword1" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
