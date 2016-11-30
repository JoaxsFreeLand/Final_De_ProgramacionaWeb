<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('plantilla/login_admin');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('plantilla/login_admin');?>/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('plantilla/login_admin');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>S_admin">Panel de administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">




                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Mi cuenta<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?=base_url();?>S_admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <a href="<?=base_url();?>S_admin"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url();?>S_admin">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Tabla anuncio</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="success">
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Tipo</th>
                                        <th>Precio</th>
                                        <th>Moneda</th>
                                        <th>ATC</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php
                                      foreach ($anuncio as $anunci) {
                                          $linkdelete= base_url("/S_admin/delete/?id={$anunci->id_anuncio}");
                                        echo "
                                              <tr>
                                                <td>{$anunci->id_anuncio}</td>
                                                <td>{$anunci->titulo}</td>
                                                <td>{$anunci->tipo}</td>
                                                <td>{$anunci->precio}</td>
                                                <td>{$anunci->moneda}</td>
                                                <td><a href='$linkdelete' class='btn btn-sm btn-default'>Eliminar</a></td>
                                              </tr>
                                              ";
                                      }
                                   ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Tabla Clientes</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="success">
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Cedula</th>
                                        <th>Correo</>
                                        <th>Telefono</th>
                                        <th>ATC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($cliente as $client) {
                                          $linkdeletet= base_url("/S_admin/deletet/?id={$client->id_cliente}");
                                        echo "
                                              <tr>
                                                <td>{$client->id_cliente}</td>
                                                <td>{$client->nombre}</td>
                                                <td>{$client->cedula}</td>
                                                <td>{$client->correo}</td>
                                                <td>{$client->telefono}</td>
                                                <td><a href='$linkdeletet' class='btn btn-sm btn-default'>Eliminar</a></td>
                                              </tr>
                                              ";
                                      }
                                   ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6">
                        <h2>Panel de Administrador</h2>
                        <p>Entra con tu usuario y ve los cambios en la pag. principal<a target="_blank" href="<?=base_url();?>Welcome">CLIK AQUI PARA VER CAMBIOS </a>.</p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('plantilla/login_admin');?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('plantilla/login_admin');?>/js/bootstrap.min.js"></script>

</body>

</html>
