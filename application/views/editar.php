<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codeigniter 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
	<h1 class="mt-5" style="color:darksalmon">Crud Codeigniter - Editar registro</h1>
	<div class="row mt-5">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			
		<?php echo form_open('welcome/update'); ?>
            <?php foreach($data_total as $key) { ?>

				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-floating mb-3">
						<input type="text" name="nombre" class="form-control" value="<?php echo $key->nombre ?>" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Nombre</label>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-floating mb-3">
						<input type="text" name="apellido" class="form-control" value="<?php echo $key->apellido ?>" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Apellido</label>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="input-group mb-3">
					<span class="input-group-text">@</span>
						<div class="form-floating">
							<input type="email" name="email" class="form-control" value="<?php echo $key->email ?>" id="floatingInputGroup1" placeholder="Username">
							<label for="floatingInputGroup1">Email</label>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-floating mb-3">
						<input type="date" name="fecha" class="form-control" value="<?php echo $key->fn ?>" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Fecha nacimiento</label>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<select class="form-select form-select-lg mb-3" name="sexo" value="<?php echo $key->genero ?>" aria-label=".form-select-lg example">
						<option value="<?php echo $key->genero ?>" selected><?php echo $key->genero ?></option>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
						
					</select>
				</div>
                <input type="text" name="id" value="<?php echo $key->id ;?>" hidden>
				</div>
                <?php } ?>
				<div class="col-2">
					<button type="submit" class="btn btn-warning btn">Guardar</button>
				</div>
			   
			<?php echo form_close(); ?>
		</div>
		<div class="col-lg-2"></div>
	</div>