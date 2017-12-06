<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>


	<table class="col-md-6" border="0" cellspacing="5" cellpadding="10" align="center">
		<tbody>
			<tr>
				<td><a style="text-decoration: none " href="index.php"><h1>HISPIA.ga</h1></a></td>
			</tr>
			<tr>
				<td><h2 align="center">Domande e risposte</h2></td>
			</tr>
		</tbody>
	</table>

   
	<?php include('navbar.php'); ?>


	<section class="section1 tt1 mt-4"> In questa sezione sono state raccolte le domande che più frequentemente vengono poste dagli utenti del sito, in modo che ognuno possa trovare la soluzione ai propri problemi di navigazione.
	Se non dovessi trovare la risposta che cerchi usa pure la sezione <a href="contatti.php">contatti</a> </section> 

	<div id="accordion" role="tablist" class="section1  mt-4">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Come faccio a fare questo?
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        È semplicissimo, devi andare qui e fare così.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Come faccio a fare l'altro?
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Basta essere in possesso di questo e quello e recarti presso quel luogo lì.<br>
        Se non conosci il luogo più vicino a te fatti aiutare da uno bravo in questo tipo di cose.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Come faccio a fare tutto insieme?
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       Ma che ne sooo... vai via.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingfour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
          Ti sei arrabbiato?
        </a>
      </h5>
    </div>
    <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
      <div class="card-body">
       No. Però smettila.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingfive">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
          Ok, ciao.
        </a>
      </h5>
    </div>
    <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
      <div class="card-body">
       Ciao.
      </div>
    </div>
  </div>
</div>
<?php include('script.php'); ?>

</body>
</html>