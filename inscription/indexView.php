<?php
$title = 'Ymail';

?>

<?php
ob_start();
?>
           <html>
   <head>

       <meta charset="utf-8" />
    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
crossorigin="anonymous">
    <link href="formulaire.css" media="all" rel="stylesheet" type="text/css" />

    <title>formulaire</title>
   </head>
   <body>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="contenu">

    <a href="../#t3"><img id= "colibri" src="colibri_retour.png" alt="retour"></a>

        <div class="container">
           <div class="row main">
           <div class="main-login main-center">


           <form class="" method="post" action="indexController.php" enctype="multipart/form-data">

           <p>Nom*</p>
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="text" class="form-control" name="nom" id="receveur"  placeholder=""/>
</div>
</div>
</div>
           <br><br>

             <p>Indice?*</p>
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="text" class="form-control" name="name" id="receveur"  placeholder=""/>
</div>
</div>
</div>
           <br><br>



           <p>Adresse Email*</p>
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="text" class="form-control" name="mail" id="indice"  placeholder=""/>
</div>
</div>
</div>
           <br><br>


                  <div class="form-group ">
      <button id="button" class="btn btn-primary btn-lg btn-block login-button" style="position: absolute; top:555px; right: 100px;">Valider</button>
</div>
               <br/><br/>

               </form>
                </div>
            </div>
			</div>
       </div>


    </body>
</html>
