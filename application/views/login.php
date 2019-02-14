<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Para uma EJ</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('/css/text.css')?>" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">

        
<div class="table-wrapper">
        <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Gerenciamento de <b>Empregados</b></h2>
					</div>
					
                </div>
            </div>

            <center>
        <?php

        echo form_open("user/index");
            echo form_label("Email:", "username",array("style"=>"font-size: 170%"));
            echo form_input(array(
                "name" => "username",
                "id" => "login",
                "class" => "form-control",
                "style" => "width:35%",
                "maxlength" => "300"
                                ));    
            echo("<br>");                
                                
             echo form_label("Senha:", "senha",array("style"=>"font-size: 170%"));
             echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "style" => "width:35%",
                "maxlength" => "100"
                                ));
            echo("<br>"); 

            echo anchor('user/home', 'Login', array('class' => 'btn btn-primary btn-lg'));
                                ?>
<!--O botão abaixo vai ser modificado para ficar dentro do forms mas por enquanto para ser só um protótipo 
só vai redirecionar para o 'home' pós-login -->                 
        </center>
    </div>
</div>
                            
                            
     </body>

</html>                                