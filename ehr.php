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
		Per quanto riguarda gli esami radiografici potrai visualizzare solamente i referti e i dati informativi; per visualizzare le immagini dovrai accedere dalla pagina del <a href="ris.php">RIS</a></section> 


		<form class="container col-md-9 mt-5 ">
			<div class="p-2">
				<div class="form-row">

					<div class="col-md-4 m-3">
						<label for="validationCustom01">Cognome</label>
						<input type="text" minlength="2" class="form-control" id="validationCustom01" placeholder="Cognome"   required>
						<div class="invalid-feedback">
							Inserisci un cognome valido.
						</div>
					</div>

					<div class="col-md-4 m-3">
						<label for="validationCustom02">Nome</label>
						<input type="text" minlength="2" class="form-control" id="validationCustom02" placeholder="Nome"   required>
						<div class="invalid-feedback">
							Inserisci un nome valido.
						</div>

					</div>


					
					<div class="col-md-3 m-3">
						<label><strong>Sesso</strong></label><br>
						<label class="custom-control custom-radio">
							<input id="radio1" name="radio" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Maschio</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="radio2" name="radio" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Femmina</span>
						</label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 m-3">
						<label for="validationCustom03">Nato a</label>
						<input type="text" class="form-control" id="validationCustom03" placeholder="Comune di nascita" required>
						<div class="invalid-feedback">
							Inserisci una città valida.
						</div>
					</div>	
					<div class="col-md-3 m-3">
				<label for="validationCustom04">Provincia</label>
				<input type="text" class="form-control" id="validationCustom04" placeholder="Provincia" required>
				<div class="invalid-feedback">
					Inserisci una provincia valida.
				</div>
			</div>

					<div class="col-md-3 m-3">

						<label for="birthDate" class=" control-label">Data di Nascita</label>

						<input type="date" id="birthDate" class="form-control">
					</div>

				</div>
				<div class="form-row">
					<div class="col-md-4 m-3">
						<label for="validationCustom05">Codice Fiscale</label>
						<input type="text" minlength="2" class="form-control" id="validationCustom05" placeholder="XXXXXX00X00X000X"  pattern="[A-Za-z]{6}[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{3}[A-Za-z]" required>
						<div class="invalid-feedback">
							Controlla il codice fiscale
						</div>

					</div>
				</div>

				<div class="form-row">
			<div class="col-md-6 m-3">
				<button class="btn btn-primary" type="submit"  data-toggle="data-toggle" data-placement="top" title="Invia i dati">Cerca la cartella</button>	
			</div>
		</div>

			</form>
			<?php include('script.php'); ?>

		</body>
		</html>