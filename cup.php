<!DOCTYPE html>
<html>
<head>
	<title>CUP</title>
	<?php include ('head.php'); ?>
</head>
<body>
	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td>
					<h2 align="center">
						Centro Unico di Prenotazione
					</h2>
				</td>
			</tr>
		</tbody>
	</table>
	<?php include('navbar.php'); ?>
	<section class="section1 tt1 mt-4"> Benvenuto al Centro Unico di Prenotazione, attraverso questo form potrai prenotare un esame scegliendo la sede che più si avvicina alle tue esigenze. In alternativa puoi telefonare al numero gratuito <a href="tel:1533">1533</a> o recarti in uno qualsiasi dei centri di prenotazione del territorio.
		Ti ricordiamo che per poter prenotare un esame è necessario avere a dizposizione il codice fiscale e la ricetta rossa con la prescrizione dell'esame.  Ricorda che non tutti gli esami sono prenotabili dal cittadino, è necessario essere operatori abilitati per sbloccare tutte le funzionalità. <br>
		Se dovessi riscontrare dei problemi o avere dubbi non esitare a contattarci attraverso la sezione <a href="contatti.php">contatti</a> 
	</section>
	<form class="container   col-md-8 mt-5 mb-5">
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
					<label for="inputCity">Città/paese</label>
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
			<div class="form-row justify-content-md-center">
				<div class="form-group col-md-3">
					<label for="inputTel">Telefono</label>
					<input type="number" class="form-control" id="inputTel" placeholder="Numero di telefono">
				</div>
				<div class="form-group col-md-6">
					<label for="inputEmail1">Email</label>
					<input type="text" class="form-control" id="inputEmail1" placeholder="email@example.com">
				</div>
			</div>
			<div class="form-row justify-content-md-center mt-3" >
				<label><strong>Informazioni Esame</strong></label>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table"  >
				<tbody>
					<tr>
						<td width="50%" height="300">
							<div class="form-row justify-content-md-center">
								<div class="bd-example col-md-9 ml-auto">
									<nav id="navbar-example2" class="navbar navbar-light bg-light">
										<label class="navbar-brand">Scegli l'esame<small id="smallHelp" class="form-text text-muted smallHelp">(se disabilitati prenotabili<br>solo da autorizzati)</small></label>

										<ul class="navbar-nav form-row ml-auto">
											<li class="nav-item">
												<input class="form-control ml-auto" type="search" placeholder="Cerca" aria-label="Non funziona">
											</li>
										</ul>
									</nav>
									<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="form-group container scroll" required>
										<?php include('Lista esami clean.php'); ?>
									</div>
								</div>
							</div>
						</td>
						<td width="50%">
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputCode">Codice impegnativa
									</label>
									<input type="text" class="form-control" id="inputCode" placeholder="Inserisci il codice" required>
								</div>
								<div class="col-md-5">
					<label for="ImpDate" class=" control-label">
						Data dell'impegnativa
					</label>
					<input type="date" id="ImpDate" class="form-control" required>
				</div>
							</div>
							<div class="form-row"> 
								<div class="form-group col-md-9">
									<label for="FormControlTextarea1">Quesito diagnostico</label>
									<textarea class="form-control" id="FormControlTextarea1" rows="3" placeholder="Inserisci il quesito sull' impegnativa" required></textarea>
								</div>
							</div>

							<div class="form-row">

								<button class="btn btn-primary btn-lg btn-block col-md-9" type="submit"  data-toggle="data-toggle" data-placement="top" title="Invia i dati">Verifica Disponibilità</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		
		</form>



		<?php include('script.php'); ?>
	</body>
	</html>