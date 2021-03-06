<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('/css/text.css')?>" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>Gerenciamento de <b>Empregados</b></h2>
				</div>
				<div class="col-sm-6">
					<a href="<?= base_url("index.php/user/logout")?> " class="btn btn-warning"><i class="material-icons">&#xE152;</i> <span>Log Out</span></a>
					<a href="<?= base_url("index.php/user/create")?> " class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cadastrar novo membro</span></a>
					<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Deletar</span></a>						
					
				</div>
			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>
						<span class="custom-checkbox">
							<input type="checkbox" id="selectAll">
							<label for="selectAll"></label>
						</span>
					</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($funcionarios as $funcionario) : ?> 
				<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox1" name="options[]" value="1">
							<label for="checkbox1"></label>
						</span>
					</td>
					<td><?= $funcionario['nome'] ?></td>
					<td><?= $funcionario['email'] ?></td>
					<td><?= $funcionario['endereco'] ?></td>
					<td><?= $funcionario['telefone'] ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<div id="editEmployeeModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="salvar/<?= $funcionario['email'] ?>" method="post">
									<div class="modal-header">						
										<h4 class="modal-title">Editar Funcionário</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<div class="form-group">
											<label>Nome</label>
											<input type="text" name="nome" class="form-control" required value="<?= $funcionario['nome'] ?>"> 
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control" required value="<?= $funcionario['email'] ?>">
										</div>
										<div class="form-group">
											<label>Endereço</label>
											<input type="text" name="endereco" class="form-control" required value="<?= $funcionario['endereco'] ?>">
										</div>
										<div class="form-group">
											<label>Telefone</label>
											<input type="text" name="telefone" class="form-control" required value="<?= $funcionario['telefone'] ?>">
										</div>					
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-info">
									</div>
								</form>
							</div>
						</div>
					</div>
						<a href="<?= base_url("index.php/user/delete/{$funcionario["email"]}") ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>
				</tr>
				<?php endforeach ?>
				
			</tbody>
		</table>
	</div>

	<div class="clearfix">
        <div class="hint-text">Mostrando <b>5</b> de <b>25</b> funcionários</div>
        <ul class="pagination">
            <li class="page-item disabled"><a href="#">Anterior</a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link">Próximo</a></li>
        </ul>
    </div>

	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">                      
						<h4 class="modal-title">Cadastrar Funcionário</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">                    
						<div class="form-group">
							<label>Nome</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Endereço</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Telefone</label>
							<input type="text" class="form-control" required>
						</div>                  
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Salvar">
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Deletar Empregado</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Você tem certeza que deseja apagar as gravações?</p>
						<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>