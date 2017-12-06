<!DOCTYPE html>
<html>
<title>Contatti</title>
<?php include ('head.php'); ?>
<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td><h2 align="center">Contatti</h2></td>
			</tr>
		</tbody>
	</table>


	<?php include('navbar.php'); ?>


	<section class="section1 tt1 mt-4"> Benvenuto nella sezione contatti. <br>
		Prima di compilare il form con la tua domanda assicurati di aver controllato la sezione <a href="faq.php">Faq</a> dove troverai le risposte ai quesiti più frequentemente richiesti dagli utenti del SIO. <br> 
		Assicurati di compilare il form in tutte le sue parti e di inserire una mail valida dove risponderemo alla tua domanda al più presto. <br>
		Se invece preferisci parlare con un operatore ti ricordiamo che il numero di telfono da contattare è <a href="tel:800xxxxx">800xxxxx</a>  attivo dal lunedì al sabato dalle 08:00 alle 14:30. </section>


		<form class="container col-md-7 mt-5 pt-5 pb-5">
			<div class="p-2">
				<div class="form-row justify-content-md-center">
					<div class="form-group col-md-7">
					<label for="ValidationCustom01">Nome</label>
					<input type="text" class="form-control" id="ValidationCustom01" placeholder="Nome" required="true">
				</div></div>
				<div class="form-row justify-content-md-center">
					<div class="form-group col-md-7 ">
						<label for="inputEmail4">Email</label>
						<input type="email" class="form-control" id="inputEmail4" placeholder="Email@example.com" required="true">
					</div></div>
					<div class="form-row  justify-content-md-center">
						<div class="form-group col-md-7">
							<label for="inputState">Oggetto della domanda</label>
							<select id="inputState" class="form-control" required="true">
								<option selected value="" disabled>scegli un oggetto</option>
								<option value="1">problemi col sito</option>
								<option value="2">non riesco ad accedere</option>
								<option value="3">problemi col CUP</option>
								<option value="4">problemi col RIS</option>
								<option value="5">problemi con la vita in generale</option>
								<option value="6">altro...</option>

							</select>
						</div> 
					</div>
				</div>
				<div class="form-row justify-content-md-center">
					<div class="form-group col-md-7">
						<label for="exampleFormControlTextarea1">Il tuo messaggio</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" minlength="10" maxlength="300" placeholder="min-10 max-300 caratteri..." required></textarea>
					</div>
				</div>
				<div class="form-row justify-content-md-center ">
					<button type="submit" class="btn btn-primary">Invia il messaggio</button>
				</div>
				
			</form>

			<section class=tt1>
				<p>È tutto molto bello</p>

			</section>

			<?php include('script.php'); ?>

		</body>
		</html>