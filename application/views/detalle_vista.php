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
  <header id="cabeza"  class="app-header"><a id="logo1" class="app-header__logo" href="#">Gs-Management</a>
      <!-- Sidebar toggle button--><a id="menu3" class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
         
        </li>
        <!--Notification Menu-->
       
          
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
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label"> Registrar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/usuario/registrarusuario"><i class="icon fa fa-circle-o"></i> Usuario</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/cliente/registrarcliente"><i class="icon fa fa-circle-o"></i> Cliente</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/asignacion/registrarasignacion"><i class="icon fa fa-circle-o"></i> Asignacion</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/material/registrarmaterial"><i class="icon fa fa-circle-o"></i> Material</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/transaccionmaterial"><i class="icon fa fa-circle-o"></i>Transaccion Material</a></li>
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/welcome/registrar"><i class="icon fa fa-circle-o"></i> Servicios</a></li>
          </ul>
        </li>
       
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/welcome/registrar"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
           
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Listar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/usuario/listarusuario"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/cliente/listarcliente"><i class="icon fa fa-circle-o"></i> Clientes</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/asignacion/listarasignacion"><i class="icon fa fa-circle-o"></i> Asignacion</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/material/listarrmaterial"><i class="icon fa fa-circle-o"></i> Material</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>index.php/welcome/listar"><i class="icon fa fa-circle-o"></i> Servicios</a></li>s
            
          </ul>
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
          <h1 id="titulo1" ><i class="fa fa-dashboard"></i>Clientes</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Listar</li>
          <li class="breadcrumb-item active"><a href="#">Clientes</a></li>
        </ul>
      </div>

      <div class="row">
        <div   class="col-md-12">
          <div id="colorform3" class="tile">
            <div id="colorform" class="tile-body">
              <div id="colorform2" class="table-responsive">
                <table   class="table table-hover table-bordered" id="sampleTable">
                  <thead id="formcabecera">
                    <tr>
                      <th>No.</th>
                      <th>Cantidad Entregada </th>
                      <th>Fecha de Recepcion </th>
                      <th>Nombre del Material </th>
                      <th>Descripciom</th>
                      <th>Presentacion</th>
                      <th>login</th>
                      <th>Tipo de Usuario</th>
                  
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $indice=1;
                    foreach ($detalle->result() as $row)
                    {
                      ?>

                      <tr>
                        <td><?php echo $indice; ?> </td>  
                        <td><?php echo $row->cantidad; ?> </td>
                        <td><?php echo $row->fechaRecepcion; ?> </td>
                        <td><?php echo $row->nombre; ?> </td>
                        <td><?php echo $row->descripcion; ?> </td>
                        <td><?php echo $row->medida; ?> </td>
                        <td><?php echo $row->login; ?> </td>
                        <td><?php echo $row->tipoUsuario; ?> </td>
                         
                      </tr>
                     <?php
                     $indice++;

                        }
                     ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/dist/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/dist/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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
  </body>
</html>