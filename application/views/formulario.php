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
<div class="container">
        <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Gerenciamento de <b>Empregados</b></h2>
					</div>
					
                </div>
            </div>
<h2> Novo Funcionário:</h2>
    <?php
    echo form_open_multipart("/user/create");
    echo("<div class='form-group'>");
    echo form_label("Nome:", "nome");
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
        "maxlenght" => "255",
        "value" => set_value("nome", "")
    ));
    echo form_error("nome");
    echo("</div>");
    
    echo("<div class='form-group'>");
    echo form_label("Telefone:", "telefone");
    echo form_input(array(
        "name" => "telefone",
        "id" => "telefone",
        "class" => "form-control",
        "maxlenght" => "25",
        "value" => set_value("telefone", "")
    ));
    echo form_error("telefone");
    echo("</div>");
    echo("<div class='form-group'>");
    echo("</div>");
    echo("<div class='form-group'>");
    echo form_label("Email:", "email");
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
        "maxlenght" => "25",
        "value" => set_value("email", "")
    ));
    echo form_error("email");
    echo("</div>");
    echo("<div class='form-group'>");
    echo form_label("Endereço:", "endereco");
    echo form_input(array(
        "name" => "endereco",
        "id" => "endereco",
        "class" => "form-control",
        "maxlenght" => "200",
        "value" => set_value("endereco", "")
    ));
    echo form_error("endereco");
    ?>
    <br>
    <button type="submit" class="btn btn-success"><i class="icon-fa fa fa-check"></i>Salvar</button>
    <a href="<?= base_url("index.php/user/home") ?>" class="btn btn-danger"><i class="icon-fa fa fa-times"></i>Cancelar</a> 
    <?php
    echo form_close();
    ?>
</div>