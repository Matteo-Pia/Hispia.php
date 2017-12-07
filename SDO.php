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




<form class="container addel mt-5 mb-5 pb-5 pt-5">
			


    <div class="justify-content-md-center">

            

                
                <label for="person" class="control-label">
                       Trattamento effettuato
                    </label>  

                <div class="form-group addel-target">
                    
                    <div class="input-group">
                       <select class="form-control" id="TratmentList02" >
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
</form>



<?php include('script.php'); ?>
</body>
</html>