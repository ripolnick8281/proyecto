<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/login.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body  > 
  
   <section id="fondo" class="material-half-bg">
      <div id="fondo2" class="cover"></div>
    </section>
        
    <section class="login-content">
        
      <div class="logo">
        <h1 id="titulologin">Gs-Management</h1>
       
      </div>
      
      <div id="formlogin"  class="login-box">  
  
     
     <form class="login-form"  <?php echo form_open_multipart('userlogin/validarusuario');?>
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
          <div class="form-group">
            <label id="labellogin"  class="control-label">Nombre De Usuario</label>
            <input id="colorinput" class="form-control" name="login"type="text" placeholder="nombre de usuario" autofocus  required="" >
          </div>
          <div class="form-group">
            <label id="labellogin"  class="control-label">Contraseña</label>
            <input id="colorinput" class="form-control" name="password" type="password" placeholder="contraseña"  required="">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <span class="label-text"></span>
                </label>
              </div>
              <?php       
                  switch ($msg) {
                  case '1':
                  echo "El Usuario o Password no son Validos";
                  break;
                  case '2':
                  echo "Acceso no válido";
                  break;
                  case '3':
                  echo "Gracias por usar el sistema";
                  break;
                  default:
                  echo "";
                  break;
                 }
                 ?>
            </div>
          </div>
          <div class="form-group btn-container">
            <button  id="btnlogo" type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INICIAR</button>
         
          </div>
        
         
          <?php echo form_close();?>
        </form >
     
      </div>
    </section>
        
    

         
