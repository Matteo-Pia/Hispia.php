<!DOCTYPE html>
<html>
<title>DRG</title>
<?php include ('head.php'); ?>
<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td><h2 align="center">Raggruppamento per Diagnosi</h2></td>
			</tr>
		</tbody>
	</table>


	<?php include('navbar.php'); ?>


	<section class=" section1 tt1 mt-4"> Attraverso questo DRG grouper sarà possibile raggruppare i pazienti appartenenti a classi differenti in categorie o tipologie simili per intensità di consumo di risorse  e clinicamente significative. </a> </section> 

		<form class="container mt-5 mb-5 pb-5 pt-5">
			<div class="pt-2">
				
				<div class="form-row justify-content-md-center">

					<div class="col-md-2">
						<label for="validationCustom01">
							Cognome
						</label>
						<input type="text" minlength="2" class="form-control" id="validationCustom01" placeholder="Cognome"   required>
						<div class="invalid-feedback">
							Inserisci un cognome valido.
						</div>
					</div>
					<div class="col-md-2">
						<label for="validationCustom02">
							Nome
						</label>
						<input type="text" minlength="2" class="form-control" id="validationCustom02" placeholder="Nome"   required>
						<div class="invalid-feedback">
							Inserisci un nome valido.
						</div>
					</div>
					<div class="col-md-2">
						<label>Sesso
						</label><br>
						<label class="custom-control custom-radio">
							<input id="radio1" name="radio" type="radio" class="custom-control-input" value="Maschio" required>
							<span class="custom-control-indicator">
							</span>
							<span class="custom-control-description"  >
								M
							</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="radio2" name="radio" type="radio" class="custom-control-input" value="Femmina" required>
							<span class="custom-control-indicator">
							</span>
							<span class="custom-control-description">
								F
							</span>
						</label>
					</div>
					<div class="col-md-2">
						<label for="validationCustom05">Codice Fiscale 
					</label>
					<input type="text" minlength="2" class="form-control" id="validationCustom05" placeholder="XXXXXX00X00X000X"  pattern="[A-Za-z]{6}[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{3}[A-Za-z]" required>
					<div class="invalid-feedback">
						Controlla il codice fiscale
					</div>
				</div>
				</div>
				<div class="form-row justify-content-md-center">
					<div class="col-md-2">
						<label for="birthDate" class=" control-label">
							Data di Nascita
						</label>
						<input type="date" id="birthDate" class="form-control" required>
					</div>
					<div class="col-md-2">
						<label for="RicoDate" class=" control-label">
							Data di Ricovero
						</label>
						<input type="date" id="RicoDate" class="form-control" required>
					</div>
					<div class="col-md-2">
						<label for="DimDate" class=" control-label">
							Data di Dimissione
						</label>
						<input type="date" id="DimDate" class="form-control" required>
					</div>
					<div class=col-md-2>
						<label for="inputBirthWeigth">Peso alla nascita (gr)</label>
						<input type="number" minlength="3" maxlength="4" class="form-control" id="inputBirthWeigth" placeholder="Solo Neonati" disabled>
					</div>
				</div>
				<div class="form-row justify-content-md-center">
					<div class="form-group col-md-2">
					<label for="inputSDO">N# SDO</label>
					<input type="text" pattern="[0-9]{9}" class="form-control" id="inputSDO" placeholder="Numero SDO">
				</div>

					
			
			
			
				<div class="form-group col-md-6">
					<label for="SDOlist">Motivo dimissione</label>
					<select class="form-control" id="SDOlist" required="true">
      <?php include ('SDOlist.php') ?>
    </select>
</div>

</div>
		<div class="container col-md-8 justify-content-md-center mt-3">
			<div class="form-row justify-content-between">
				<div class="form-group">
					<label for="DiagnosiList00">Diagnosi Primaria</label>

				</div>
				<div class="col-md-9">
					<select class="form-control" id="DiagnosiList00" required >
						<?php include ('Diagnosi.php') ?>
					</select>
				</div>
			</div>
			<div class="form-row justify-content-between">
				<div class="form-group">
					<label for="DiagnosiList01">Diagnosi Secondarie</label>

				</div>
				<div class="col-md-9">
					<select class="form-control" id="DiagnosiList01" >
						<?php include ('Diagnosi.php') ?>
					</select>
				</div>
			</div>
			<div class="form-row justify-content-end">

				<div class="col-md-9">
					<select class="form-control" id="DiagnosiList02">
						<?php include ('Diagnosi.php') ?>
					</select>
				</div>
				<div class="col-md-9 mt-2">
					<select class="form-control" id="DiagnosiList03">
						<?php include ('Diagnosi.php') ?>
					</select>
				</div>				
			</div>
		</div>
		<div class="container col-md-8 justify-content-md-center mt-3">
			<div class="form-row justify-content-between">
				<div class="form-group">
					<label for="DiagnosiList">Trattamenti Effettuati</label>

				</div>
				<div class="col-md-9">
					<select class="form-control" id="TratmentList00" >
						<?php include ('procedure.php') ?>
					</select>
				</div>
			</div>
			<div class="form-row justify-content-end">

				<div class="col-md-9">
					<select class="form-control" id="TratmentList01">
						<?php include ('procedure.php') ?>
					</select>
				</div>
				<div class="col-md-9 mt-2">
					<select class="form-control" id="TratmentList02" >
						<?php include ('procedure.php') ?>
					</select>
				</div>
				<div class="col-md-9 mt-2">
					<select class="form-control" id="TratmentList03" >
						<?php include ('procedure.php') ?>
					</select>
				</div>
			</div>
		</div>
	</div>



				
		<div class="container col-md-8 justify-content-md-center mt-3">
			<div class="form-row justify-content-center"> <button type="submit" class="btn btn-primary btn-lg btn-block">Procedi con il DRG</button>
			</div>
		</div>

	</form>


	<?php include('script.php'); ?>
</body>
</html>