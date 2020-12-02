
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/estilo.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body  class="app sidebar-mini">
    <!-- Navbar-->
   <!-- Navbar-->
   <header id="cabeza"  class="app-header"><a id="logo1" class="app-header__logo" href="#">Gs-Management</a>
      <!-- Sidebar toggle button--><a id="menu3" class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
      <ul class="app-nav">
        <li class="app-search">
         
        </li>
        <!--Notification Menu-->
       
          
        <!-- User Menu-->
        <!-- User Menu-->
        <li class="dropdown"><a id="menu5" class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" ><i class="fa fa-user fa-lg"></i> Hola! <?php echo $this->session->userdata('login'); ?></a></li>
          <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/userlogin/logout"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="__overlay" data-toggle="sidebar"></div>
    <aside id="menu2" class="app-sidebar">
      <div id="menuUser" class="app-sidebar__user">
        <div>
         <h3>Usuario</h3>
         <h><?php echo $this->session->userdata('login'); ?></h>
        </div>
      </div>
      <ul id="menu1" class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo base_url(); ?>index.php/userlogin/inicio"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Menu</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Registrar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/usuario/registrarusuario"><i class="icon fa fa-circle-o"></i> Usuario</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/cliente/registrarcliente"><i class="icon fa fa-circle-o"></i> Cliente</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/asignacion/registrarasignacion"><i class="icon fa fa-circle-o"></i> Asignacion</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/material/registrarmaterial"><i class="icon fa fa-circle-o"></i> Material</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/transaccionmaterial"><i class="icon fa fa-circle-o"></i>Transaccion Material</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/detalle/listardetalle"><i class="icon fa fa-circle-o"></i>Detalle de Entrega</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/welcome/registrar"><i class="icon fa fa-circle-o"></i> Servicios</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Listar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/usuario/listarusuario"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/cliente/listarcliente"><i class="icon fa fa-circle-o"></i> Clientes</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/asignacion/listarasignacion"><i class="icon fa fa-circle-o"></i> Asignacion</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/material/listarmaterial"><i class="icon fa fa-circle-o"></i> Material</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/welcome/listar"><i class="icon fa fa-circle-o"></i> Servicios</a></li>
          </ul>
        </li>
       
        
       
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul>
    </aside>
    <main id="fondo1" class="app-content">
      <div id="fondotitulo" class="app-title">
        <div id="contenedortitulo">
          <h1 id="titulo1" ><i class="fa fa-dashboard"></i>Modificar</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Modificar</li>
          <li class="breadcrumb-item"><a href="">Usuario</a></li>
        </ul>
      </div>    

         <div class="container">
         
                        <?php
                           $atributos = array('class' => 'form-group', 'id' => 'myform');
                           echo form_open_multipart('usuario/modificarbd',$atributos);
                           foreach ($infousuario->result() as $row)
                           {
                           ?>
            <div class="col-md-8">
            <div class="tile">
            <h3 class="tile-title">Modificar Usuario</h3>
            <div class="tile-body">
            
            <input type="hidden" name="id" value="<?php echo $row->idUsuario; ?>">

                <div class="form-group row">
                  <label class="control-label col-md-4">Nombre de Usuario</label>
                  <div class="col-md-8">
                    <input class="form-control" name="nombreusuario" type="text" placeholder="Ingrese el Nombre" required="" value="<?php echo $row->nombres ?>">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-md-4">Primer Apellido</label>
                  <div class="col-md-8">
                    <input class="form-control" name="primerapellido" type="text" placeholder="Ingrese el Primer Apellido" required="" value="<?php echo $row->primerApellido ?>" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-md-4">Segundo Apellido</label>
                  <div class="col-md-8">
                    <input class="form-control" name="segundoapellido" type="text" placeholder="Ingrese el Segundo Apellido " required="" value="<?php echo $row->segundoApellido ?>" >
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-md-4">Carnet de Identidad</label>
                  <div class="col-md-8">
                    <input class="form-control" name="ci" type="text" placeholder="Ingrese su CI." required="" value="<?php echo $row->ci ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Genero</label>
                  <div class="col-md-9">
                  <div class="animated-checkbox">
                    <label>
                      <input name="sexo" value="M" type="checkbox"  value="<?php echo $row->sexo ?>"><span  class="label-text">M</span>
                    </label>
                   </div>
                    <div class="animated-checkbox">
                     <label>
                      <input  name="sexo" value="F"  type="checkbox" value="<?php echo $row->sexo ?>"><span class="label-text">F</span>
                     </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Telefono/Celular</label>
                  <div class="col-md-8">
                    <input class="form-control" name="telefono" type="text" placeholder="Ingrese el numero de Telefono " required=""  value="<?php echo $row->telefono ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Fecha de Nacimiento</label>
                  <div class="col-md-8">
                    <input class="form-control" name="fechanacimiento" type="date"  value="<?php echo $row->fechaNacimiento ?>"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Login</label>
                  <div class="col-md-8">
                    <input class="form-control" name="login" type="text" placeholder="Ingrese un login" required=""  value="<?php echo $row->login ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4">Password</label>
                  <div class="col-md-8"> 
                    <input class="form-control" name="password" type="text" placeholder="Ingrese una contraseña" required=""  value="<?php echo $row->password ?>">
                    <?php
                     $caracteres='123456NICO';                    
                      $cantidad=strlen($caracteres);
                      $clave="";
                      for($i=0;$i<10;$i++)
                      {
                      $clave=$clave.$caracteres[rand(0,$cantidad-1)];
                      }
                      echo $clave;
                      echo "<br>";
                      $passasegurado=password_hash($clave,PASSWORD_BCRYPT,[5]);
                      ?> 
                      <h6>Contraseña Sugerida</h6>
                  </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-4">Seleccione Un tipo de Usuario</label>
                    <select name="tipousuario" class="form-control" id="exampleSelect1"  value="<?php echo $row->tipoUsuario ?>">
                      <option>Administrador</option>
                      <option>Socializador</option>
                      <option>Instalador</option>
                     
                    </select>
                  </div>

              
         
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php 
             }
        echo form_close(); ?>
                </div>


     
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url(); ?>bootstrap/dist/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="bootstrap/dist/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/plugins/dropzone.js"></script>
    <script type="text/javascript">
     $('#divMiCalendario').datetimepicker({
          format: 'YYYY-MM-DD HH:mm'       
      });
      $('#divMiCalendario').data("DateTimePicker").show();
   </script>
   
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

<script>
function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú";

especiales = [8,13,32];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{

 return false;
}
}
</script>


<script>

function SoloNumeros(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
}
}
</script>
  </body>
</html>