<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
	
	<title>
		
	</title>

    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>

<div id="title"><i class="far fa-user"></i> choix du type de compte </div>
    <form class="form-style-9" method="POST" action="inscriptionacteur.php">
      <div class="form-group"align="center">
       <button type="submit" name="ok" class="btn btn-success" >Pharmacien</button>
       <input type="hidden" name="type-compte" value="pharmacien ">
      </div> 
   </form> 
   <form class="form-style-9" method="POST" action="inscription.php">
      <div class="form-group" align="center">
       <button type="submit" name="ok" class="btn btn-success">Livreur</button>
         <input type="hidden" name="type-compte" value="livreur">
      </div> 
   </form> 
   <form class="form-style-9" method="POST" action="inscription.php">
      <div class="form-group"align="center">
       <button type="submit" name="ok" class="btn btn-success">Client</button>
         <input type="hidden" name="type-compte" value="client">
      </div> 
   </form> 
   



<style type="text/css">
body {
    display: flex;
    flex-direction:  column;
    justify-content: center;
    align-items: center;
    padding-top: 20px;
    background: #f6f6f6;
}

form {
    box-shadow:  0 3px 5px -1px rgba(0,0,0,.2), 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12);
    padding:  20px;
    display:  flex;
    flex-direction: column;
    width: 350px;
    background: #fff;
    margin-bottom: 50px;
}

#title {
    margin-bottom: 20px;
    font-size: 1.5rem;
    text-transform: uppercase;
    color: rgba(0,0,0,0.5);
}

#title > svg {
    font-size: 2rem !IMPORTANT;
    margin-right: 5px !IMPORTANT;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
