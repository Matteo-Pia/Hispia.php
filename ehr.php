<!DOCTYPE html>
<html>
<title>EHR</title>
<?php include ('head.php'); ?>
<script src="js/CodiceFiscale.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script type="text/javascript">
        function formsubmit(form) {
            window.globalForm = form;
            var isMale = form.gender[0].checked;
            var date = form.date.value.match(/^\s*(\d+).(\d+).(\d+)/);
            var generality = {
                name: form.name.value,
                lastname: form.lastname.value,
                day: date[3],
                month: date[2],
                year: date[1],
                isMale: isMale,
                communeName: form.communeName.value
            };
            taxCode = new CodiceFiscale(generality);
            taxCode2 = new CodiceFiscale(generality);

            form.taxCode.value = taxCode.taxCode();
        }
    </script>
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


		<form class="container col-md-8 mt-5 mb-5 pb-2" id="main" action="#" onsubmit="formsubmit(this); return false;">
			
		<div class="pt-2">
			<div class="form-row justify-content-md-center mt-3" >
				<label>
					<strong>Dati Paziente
					</strong>
				</label>
			</div>
			<div class="form-row justify-content-md-center">

				<div class="col-md-3">
					<label for="lastname">
						Cognome
					</label>
					<input type="text" name="lastname" minlength="2" class="form-control" id="lastname"  placeholder="Cognome"   required>
					<div class="invalid-feedback">
						Inserisci un cognome valido.
					</div>
				</div>
				<div class="col-md-3">
					<label for="name">
						Nome
					</label>
					<input type="text" name="name" minlength="2" class="form-control" id="name" placeholder="Nome" required>
					<div class="invalid-feedback">
						Inserisci un nome valido.
					</div>
				</div>
				<div class="col-md-3">
					<label for="gender">Sesso
					</label><br>
					<label class="custom-control custom-radio">
						<input id="m" name="gender" type="radio" class="custom-control-input" value="M" required>
						<span class="custom-control-indicator">
						</span>
						<span class="custom-control-description"  >
							Maschio
						</span>
					</label>
					<label class="custom-control custom-radio">
						<input id="f" name="gender" type="radio" class="custom-control-input" value="F" required>
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
					<label for="communeName">Nato a
					</label>
					<input type="text" class="form-control" id="communeName" name="communeName" placeholder="Comune di nascita" required>
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
					<label for="date" class=" control-label">
						Data di Nascita
					</label>
					<input type="date" name="date" id="date" class="form-control" required>
				</div>
				<div class="col-md-2">
					<label for="taxCode">Codice Fiscale 
                <input style="width:45px;height:25px" type="submit" value="Calc" name="codecalc">
            
					</label>
					<input type="text" minlength="2" name="taxCode" class="form-control" id="taxCode" placeholder="XXXXXX00X00X000X"  pattern="[A-Za-z]{6}[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{3}[A-Za-z]" >
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
			<div class="form-row justify-content-center"> <button type="submit" form="main" class="btn btn-primary btn-lg btn-block" name="mainbutton">Cerca la cartella</button>
			</div>
			</form>


			<?php include('script.php'); ?>

		</body>
		</html>