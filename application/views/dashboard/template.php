<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord</title>

    <!-- Bootstrap Core CSS -->
    <?php echo link_tag('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
    <?php echo link_tag(array("href"=>"assets/images/icon.png","rel"=>"icon","type"=>"image/png")) ?>
    <!-- MetisMenu CSS -->
    <?php echo link_tag('assets/bower_components/metisMenu/dist/metisMenu.min.css') ?>

    <!-- Timeline CSS -->
    <?php echo link_tag('assets/css/timeline.css') ?>

    <!-- Custom CSS -->
    <?php echo link_tag('assets/css/sb-admin-2.css') ?>

    <!-- Morris Charts CSS -->
    <?php echo link_tag('assets/bower_components/morrisjs/morris.css') ?>

    <!-- Custom Fonts -->
    <?php echo link_tag('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Saf Instant</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?=$this->session->userdata('username')?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="<?=site_url('ad_access')?>/dashboard?disconnect=true"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class=" text-center" >
                                    <i class="fa fa-bars"></i> Menu
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access')?>"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access/config')?>"><i class="fa fa-gear"></i> Configuration générale</a>
                        </li>
                        <li>
                        <li>
                            <a href="<?=site_url('ad_access/admins')?>"><i class="fa fa-user"></i> Gestion des administrateurs</a>
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access')?>/profile"><i class="fa fa-user fa-fw"></i> Editer mon profile</a>
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access')?>/slideprincipal"><i class="fa fa-image fa-fw"></i> Slide principal</a>
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access')?>/slideservices"><i class="fa fa-image fa-fw"></i> Slide avantage des services</a>
                        </li>
                        <li>
                            <a href="<?=site_url('ad_access')?>/marque"><i class="fa fa-image fa-fw"></i> Clients</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
            </div>
            <!-- /.row -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                     <div class="panel-heading">
                          <div class="row">
                               <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                               </div>
                               <div class="col-xs-9 text-right">
                                    <div class="huge" id="visiteurs-number">0</div>
                                    <div>Visiteurs!</div>
                                    </div>
                               </div>
                          </div>
                          <a href="#">
                          <div class="panel-footer">
                               <span class="pull-left">Voir les details</span>
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                               <div class="clearfix"></div>
                           </div>
                           </a>
                     </div>
              </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo script_tag('assets/bower_components/jquery/dist/jquery.min.js') ?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo script_tag('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo script_tag('assets/bower_components/metisMenu/dist/metisMenu.min.js') ?>

    <!-- Custom Theme JavaScript -->
    <?php echo script_tag('assets/js/sb-admin-2.js') ?>

    <?php echo script_tag('assets/js/admin-main.js') ?>

    <script type='text/javascript'>
        $(document).ready(function(){
            function getClients(){
                var l = window.location;
                var base_url = window.location.origin;
                $.ajax({
                        type: "POST",
                        url: base_url + "/basic-ci/ad_access/queries",
                        data: {clients: 'clients'},
                        dataType: "text",
                        cache:false,
                        success: 
                        function(data){
                        $("#visiteurs-number").empty();
                        $("#visiteurs-number").append(JSON.parse(data).connected);
                        }
                });
                setTimeout(getClients,10000);
            }
            getClients();
        });
    </script>
</body>

</html>
