<!DOCTYPE html>
<html>
<title>RIS</title>
<?php include ('head.php'); ?>

<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td><h2 align="center">Sistema Informativo Radiologico</h2></td>
			</tr>
		</tbody>
	</table>


	<?php include('navbar.php'); ?>


	<section class="section1 tt1 mt-4"> Il RIS è dedicato alla gestione e visualizzazione degli esami radiologici. Per prenotare un nuovo esame inserisci i dati del paziente e l'esame sulla richiesta. </section>




		<form class="container   col-md-8 mt-5 mb-5" id="main">
			<div class="pt-2">
				<div class="form-row justify-content-md-center mt-3" >
					<label>
						<strong>Dati Anagrafici
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
				<div class="form-row justify-content-md-center">
					<div class="col-md-4">
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
			</div>
			<div class="form-row justify-content-md-center mt-3" >
				<label>
					<strong>
						Informazioni Paziente
					</strong>
				</label>
			</div>
			<div class="form-row justify-content-md-center">
				<div class="form-group col-md-3">
					<label for="inputAddress2">Residente in via</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Indirizzo">
				</div>
				<div class="form-group col-md-3">
					<label for="inputCity">Comune di</label>
					<input type="text" class="form-control" id="inputCity" placeholder="Residenza">
				</div>
				<div class="form-group col-md-1">
					<label for="ProvinciaR">Provincia</label>
					<select class="form-control" id="ProvinciaR" required="true">
						<?php include ('Province.php'); ?>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">CAP</label>
					<input type="number" minlength="5" maxlength="5" class="form-control" id="inputZip" placeholder="CAP">
				</div>
			</div>
			<div class="form-row justify-content-md-center mt-3" >
				<label><strong>Informazioni Esame</strong></label>
			</div>
			<div class="form-row justify-content-md-center">
				<div class="form-group col-md-2">
					<label for="peso">Peso paziente</label>
					<input type="number" maxlength="3" class="form-control" id="peso" placeholder="Peso in kg">
				</div>
				<div class="form-group col-md-2">
					<label for="ASL">ASL di Provenienza</label>
					<input type="text" class="form-control" id="ASL" placeholder="solo esterni">
				</div>
				<div class="form-group col-md-3">
					<label for="reparto">reparto di provenienza</label>
					<select class="form-control" id="reparto">
						<?php include ('reparti.php'); ?>
					</select>
				</div>
				<div class="form-group col-md-2">
									<label for="inputCode">Codice Richiesta
									</label>
									<input type="text" class="form-control" id="inputCode" placeholder="Inserisci il codice" required>
								</div>
			</div>
		</div>
	</div>

 

<div class="container justify-content-md-center col-md-9 mt-3">
	<select id="my-select" name="esame">
		<option value="" selected disabled>Scegli gli esami da prenotare</option>
		<optgroup label="Radiologia Tradizionale" title="Tradizionale">
			<?php include('rx.php'); ?>
		</optgroup>
		<optgroup label="Tomografia Computerizzata" title="Tomografia Computerizzata">
			<?php include('tc.php'); ?>
		</optgroup>  

		<optgroup label="Risonanza Magnetica" title="Risonanza Magnetica">
			<?php include('rm.php'); ?> 
		</optgroup>  
		<optgroup label="Ecografia" title="Ecografia">
			<?php include('eco.php'); ?>
		</optgroup>
		<optgroup label="Medicina Nucleare" title="Medicina Nucleare">
			<?php include('mn.php'); ?>
		</optgroup> 
		<optgroup label="Radioterapia" title="Radioterapia">
			<?php include('rt.php'); ?>
		</optgroup>     

	</select>

	<script type="text/javascript">
		$(function() {
// initialize sol
$('#my-select').searchableOptionList();
});
</script>
<?php include('solscript.php'); ?>
</div>

<div class="container col-md-9 justify-content-md-center mt-3 mb-5 pb-4 pt-3">
	<div class="form-row justify-content-center"> <button type="submit" form="main" class="btn btn-primary btn-lg btn-block">Procedi con la prenotazione</button>
	</div>
</form>

</body>
</html>