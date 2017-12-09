<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Informazioni su questo sito
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informazioni sul sito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Questo sito raffigura un prototipo di <a href="https://it.wikipedia.org/wiki/Hospital_Information_System" target="_blank">Sistema Informativo Ospedaliero</a>, interattivo e multiutente, utilizzabile sia dai pazienti che dagli operatori sanitari. <br><br>
      È stato creato nel mese di novembre 2017 come progetto individuale per il corso di informatica, tenuto dal <a href="https://unica.it/unica/it/ateneo_s07_ss01_sss02.page?mu=Guide/PaginaDocente.do;jsessionid=BCF8084F0690F389DA7CF18516AA36F4.jvm1?docente_id=47738&ANNO_ACCADEMICO=2017&mostra_percorsi=S" target="_blank">Prof. Pierro Antonio</a>, all'interno del Corso di Laurea in Tecniche di Radiologia Medica, per Immagini e Radioterapia presso l'Università di Cagliari, dallo studente <a href="mailto:matteo.pia@outlook.com">Pia Matteo</a>.<br><br>
      Per la codifica html, CSS e javascript sono stati utilizzati i modelli resi disponibili gratuitamente da <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>.<br><br>
      La grafica è stata realizzata utilizzando immagini con licenza Creative Commons; in particolare le icone sono state scaricate dal sito <a href="https://www.flaticon.com/" target="_blank">flaticon.com</a> e sono di proprietà dei relativi autori. <br><br>

      Altri strumenti e servizi utilizzati:<br>
      <a href="https://www.sublimetext.com/" target="_blank">Sublime Text 3</a><br>
      <a href="https://github.com/" target="_blank">github.com</a><br>
      <a href="https://www.apachefriends.org/it/index.html" target="_blank">XAMPP</a><br>
      <a href="https://www.gearhost.com/" target="_blank">gearhost.com</a><br>
      <a href="http://www.freenom.com/it/index.html" target="_blank">freenom.com</a><br>
      <a href="https://www.jqueryscript.net/form/Dynamic-Form-Element-Creation-And-Deletion-Plugin-Addel.html" target="_blank">addel (script)</a><br>
      <a href="https://www.jqueryscript.net/form/jQuery-Plugin-For-Seachable-Option-List-with-Checkboxes.html" target="_blank">Sol (script)</a>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
        
      </div>
    </div>
  </div>
</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" title="Centro Unico di Prenotazione" href="cup.php"> CUP </a>
				</li>
				<li class="nav-item">
					<a class="nav-link"
					title="Cartella Elettronica" href="EHR.php">EHR</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ris.php"> RIS </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Prep.php">Prep</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sdo.php">SDO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="drg.php">DRG</a>
				</li>
				
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Faq.php">FAQ</a>
			</li>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Contatti.php">Contatti</a>
		</li>
		<li class="nav-item dropdown">
			<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
    Accedi
  </button>

  <form class="dropdown-menu p-4 dropdown-menu-right" style="min-width: 350px" >
  
  	
  <div class="form-group">
  	<div class="row">
  	<label for="validationCustom01"><strong>Accedi per usufruire delle funzionalità del SIO, se non disponi dei dati di accesso visita la pagina di <a href="accedi.php">accesso guidato.</a> </strong></label>
  </div>
    <label for="FormControlInput1">Codice Fiscale</label>
    <input type="Username" class="form-control" id="FormControlInput1" placeholder="XXXXXX00X00X000X"  pattern="[A-Za-z]{6}[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{3}[A-Za-z]" required>
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password</label>
    <input type="password" minlength="6" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" required="true">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">campo riservato agli operatori</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Codice dipendente" >
  </div>

  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Ricordami
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Accedi</button>

</form>
</div>
			


		<!--<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>-->
<?php include('script.php'); ?>

	</nav>

	