<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Login</title>

    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/yeti/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-datetimepicker.css" rel = "stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="color:#FFF">
    <div class="container">
      <div class="jumbotron login-form" style="background-color: #23AE84; padding-top: 20px; margin-top: 20px;s"> 

        <h1>LOG IN</h1>
        <p>Please login with your username and password below.</p>

        <div class="form">
        <?php echo form_open('c_admin');?>
          <div class="form-group">
            <label for="username">Username : </label>
            <input type="text" name="username" id="username"/>
          </div>
          <div class="form-group">
            <label for="password"><?php echo form_label('Password', '$password');?></label>
            <input type="password" name="password" id="password" >
          </div>

          <div class="checkbox">
            <label>
              <?php echo form_label('remember', 'Remember');?>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </label>
          </div>

          <p><?php echo form_submit('submit','Submit', 'class="btn btn-default btn-success"');?></p>
          
        <?php echo form_close();?>

       </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
   <script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
  </body>
</html>