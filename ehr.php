<!DOCTYPE html>
<html>
<title>EHR</title>
<?php include ('head.php'); ?>
<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			<tr>
				<td><h2 align="center">Fascicolo Sanitario Elettronico</h2></td>
			</tr>
		</tbody>
	</table>


	<?php include('navbar.php'); ?>


	<section class="section1 tt1 mt-4">Attraverso la compilazione di questo modulo potrai accedere al tuo fascicolo sanitario aggiornato in formato elettronico. Potrai inoltre cercare uno specifico esame attraverso il relativo codice univoco. Ti ricordiamo che è necessario disporre di codice fiscale e della password fornita durante la procedura di registrazione. <br>
	Se non hai già effettuato il login puoi farlo attraverso il pulsante in alto a destra o nella pagina di  <a href="accedi.php">accesso</a> 
		</section> 


		<form class="container col-md-8 mt-5 mb-5 pb-2" id="main">
		<div class="pt-2">
			<div class="form-row justify-content-md-center mt-3" >
				<label>
					<strong>Dati Paziente
					</strong>
				</label>
			</div>
			<div class="form-row justify-content-md-center">

				<div class="col-md-3">
					<label for="validationCustom01">
						Cognome
					</label>
					<input type="text" minlength="2" class="form-control" id="validationCustom01" placeholder="Cognome"   required>
					<div class="invalid-feedback">
						Inserisci un cognome valido.
					</div>
				</div>
				<div class="col-md-3">
					<label for="validationCustom02">
						Nome
					</label>
					<input type="text" minlength="2" class="form-control" id="validationCustom02" placeholder="Nome"   required>
					<div class="invalid-feedback">
						Inserisci un nome valido.
					</div>
				</div>
				<div class="col-md-3">
					<label>Sesso
					</label><br>
					<label class="custom-control custom-radio">
						<input id="radio1" name="radio" type="radio" class="custom-control-input" value="Maschio" required>
						<span class="custom-control-indicator">
						</span>
						<span class="custom-control-description"  >
							Maschio
						</span>
					</label>
					<label class="custom-control custom-radio">
						<input id="radio2" name="radio" type="radio" class="custom-control-input" value="Femmina" required>
						<span class="custom-control-indicator">
						</span>
						<span class="custom-control-description">
							Femmina
						</span>
					</label>
				</div>
			</div>
			<div class="form-row justify-content-md-center mt-3">
				<div class="col-md-2">
					<label for="validationCustom03">Nato a
					</label>
					<input type="text" class="form-control" id="validationCustom03" placeholder="Comune di nascita" required>
					<div class="invalid-feedback">
						Inserisci una città valida.
					</div>
				</div>	
				<div class="col-md-1">
					<label for="ProvinciaN">Provincia
					</label>
					<select class="form-control" id="ProvinciaN" required="true">
      <?php include ('Province.php'); ?>
    </select>
				</div>
				<div class="col-md-2">
					<label for="birthDate" class=" control-label">
						Data di Nascita
					</label>
					<input type="date" id="birthDate" class="form-control" required>
				</div>
				<div class="col-md-2">
					<label for="validationCustom05">Codice Fiscale <label type="button" class="btn btn-info btn-sm-2">Calcola</label>
					</label>
					<input type="text" minlength="2" class="form-control" id="validationCustom05" placeholder="XXXXXX00X00X000X"  pattern="[A-Za-z]{6}[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{3}[A-Za-z]" required>
					<div class="invalid-feedback">
						Controlla il codice fiscale
					</div>
				</div>
				<div class="form-group col-md-2">
						<label for="IDpaziente">ID paziente</label>
						<input type="text" pattern="[0-9]{9}" class="form-control" id="IDpaziente" placeholder="IDpaziente">
					</div>
			</div>
<div class="container col-md-9 justify-content-md-center mt-3 mb-5 pb-2">
			<div class="form-row justify-content-center"> <button type="submit" form="main" class="btn btn-primary btn-lg btn-block">Cerca la cartella</button>
			</div>
			</form>
			<?php include('script.php'); ?>

		</body>
		</html>