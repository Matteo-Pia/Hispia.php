<!DOCTYPE html>
<html>
<title>SDO</title>
<?php include ('head.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td><h2 align="center">Scheda Dimissione Ospedaliera</h2></td>
			</tr>
		</tbody>
	</table>


	<?php include('navbar.php'); ?>


	<section class=" section1 tt1 mt-4"> Benvenuto su <a href="http:\\Hispia.ga">Hispia.ga</a>, il Sistema informativo ospedaliero che ti guiderà durante la navigazione.<br>
		In questo sito potrai potrai prenotare, gestire e visualizzare tutti i tuoi record clinici in modo facile e intuitivo.<br>
		Questa piattaforma è dedicata sia ai cittadini che agli operatori sanitari, se non disponi delle credenziali di accesso all'area amministrativa alcune funzionalità risulteranno disabilitate. <br>
		Se dovessi riscontrare dei problemi o avere dubbi non esitare a contattarci attraverso la sezione <a href="#">contatti</a> </section> 



		<div class="container mt-5 mb-5 pb-5 pt-5">
			<form class="addel container pt-2" id="main">


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
						<input type="text" pattern="[0-9]{9}" class="form-control" id="inputSDO" placeholder="Numero SDO" required>
					</div>





					<div class="form-group col-md-6">
						<label for="SDOlist">Motivo dimissione</label>
						<select class="form-control" id="SDOlist" required="true">
							<?php include ('SDOlist.php') ?>
						</select>
					</div>
				</div>

				<div class="form-row justify-content-md-center"> 
					<div class="col-md-8">




						<label for="diagnosi" class="control-label">
							Diagnosi
						</label>  

						<div class="form-group addel-target">

							<div class="input-group">
								<select class="form-control" id="diagnosi" required>
									<?php include ('diagnosi.php') ?>
								</select>
								<span class="input-group-btn">
									<button type="button" class="btn btn-danger addel-delete">
										<i class="fa fa-remove">

										</i>
									</button>
								</span>
							</div>
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-success btn-block addel-add">
								<i class="fa fa-plus"></i>
							</button>
						</div>


					</div>
				</div>
				</form>
				<form class="addel p-2">
			
				<div class="form-row justify-content-md-center"> 
					<div class="col-md-8">
						<label for="Tratment" class="control-label">
							Trattamento effettuato
						</label>  

						<div class="form-group addel-target">

							<div class="input-group">
								<select class="form-control" id="Tratment" >
									<?php include ('procedure.php') ?>
								</select>
								<span class="input-group-btn">
									<button type="button" class="btn btn-danger addel-delete">
										<i class="fa fa-remove">

										</i>
									</button>
								</span>
							</div>
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-success btn-block addel-add">
								<i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
				</div>
				<?php include('addelscript.php'); ?>
		
			<div class="container col-md-8 justify-content-md-center mt-3 mb-5 pb-2">
			<div class="form-row justify-content-center"> <button type="submit" form="main" class="btn btn-primary btn-lg btn-block">Conferma i dati di dimissione</button>
			</div>
			</form>
		</div>
			</div>	
	</div>	<?php include('script.php'); ?>
</body>
</html>