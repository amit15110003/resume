<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Resume</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/home.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  
</head>
<body>

<ul id="slide-out" class="side-nav fixed">
    <li><div class="userView " >
      <img class="background" src="<?php echo base_url('media/image/random.jpg'); ?>">
      <br>
      <a href="#!name"><span class="white-text name"><?php echo $this->session->userdata('uname'); ?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $this->session->userdata('email'); ?></span></a>
    </div></li>
    <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
    <li><a href="<?php echo base_url("index.php/education"); ?>">Educational Details</a></li>
    <li><a href="<?php echo base_url("index.php/profile/skills"); ?>">Skills</a></li>
    <li><a href="<?php echo base_url("index.php/work"); ?>">Research/Work Experience</a></li>
    <li><a href="<?php echo base_url("index.php/profile/achievement"); ?>">Achievements</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url("index.php/resume"); ?>">Resume</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("index.php/welcome/logout"); ?>">Log Out</a></li>
  </ul>
 
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
