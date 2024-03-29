<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration Bensi electronics</title>

    <!-- Bootstrap Core CSS -->
    <?php echo link_tag('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
     <?php echo link_tag(array("href"=>"assets/images/icon.png","rel"=>"icon","type"=>"image/png")) ?>
    <!-- MetisMenu CSS -->
     <?php echo link_tag('assets/bower_components/metisMenu/dist/metisMenu.min.css') ?>

    <!-- Custom CSS -->
    <?php echo link_tag('assets/css/sb-admin-2.css') ?>

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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Veuillez vous connecter</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?=site_url("ad_access")?>/adminlogin">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nom d'utilisateur" name="user" type="text" value="<?=set_value('user')?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mot de passe" name="password" type="password" value="<?=set_value('password')?>">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name='connexion' value='connexion'>Connexion</button>
                            </fieldset>
                        </form>
                        <div class='validation'><?=$validation?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
     <?php echo script_tag('assets/bower_components/jquery/dist/jquery.min.js') ?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo script_tag('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo script_tag('assets/bower_components/metisMenu/dist/metisMenu.min.js') ?>

    <!-- Custom Theme JavaScript -->
    <?php echo script_tag('assets/js/sb-admin-2.js') ?>

</body>

</html>
