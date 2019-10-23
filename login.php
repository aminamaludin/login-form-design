<?php 

 /**
  * File fungsi_db.php
  *
  */

  /**
  * Class Fungsi_db
  * @package    Login
  * @author     (Amin <aminamaludin001@gmail.com>)
  * @version    v.0.0.1 (dalam pencarian error)
  */

 ?>


<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     
      <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
      <link rel="stylesheet" href="style.css" >
     
    </head>
<body>
<div class="container">
  
    
  <div class="row">
      <form>
        <div class="row">
         
            <div class="col s12 m6 offset-m3">
                  <div class="card center-align mg">
                    
                      <div class="card-content">
                          <span class="card-title">Login</span>
                          <div class="input-field">
                              <input id="email" type="email" class="validate">
                              <label for="email">Username</label>
                          </div>
                          <div class="input-field" >
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
                            
                          </div>
                          <button class="btn waves-effect waves-light" type="submit" name="login">Login
                              <i class="material-icons right">send</i>
                          </button>

                      </div>
                      <p>Belum punya akun ? <a href="register.php">Daftar sekarang !</a></p>
                      <br>
                     
                          
                    </div>
                  </div>
            </div>
       
     
      </form>  
   
  </div>
</div>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
