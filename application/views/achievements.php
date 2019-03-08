<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('media/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('media/css/home.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url('media/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('media/js/init.js'); ?>"></script>
  <style type="text/css">
    


#field {
    margin-bottom:20px;
}

  </style>
  <!--<script type="text/javascript">
    
    $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

  </script>-->
</head>
<body>
<div class="main">
    <div class="row " style=" background-color: #C5CAE9; color: #fff; padding-top: 15px; padding-left: 15px; padding-bottom: 10px; margin-top: -40px; ">
    <h2>Achievements</h2>
    </div>
     <div class="row">
     <br>
    <div class="col m6 s12 hoverable offset-m3">
    <?php $attributes = array("name" => "achievement");
      echo form_open("profile/achievement", $attributes);?>
      <div class="row">
      <div class="row">
        <div class="input-field col s12 hide ">
          <input   value="<?php echo $this->session->userdata('uid'); ?>" id="first_name" type="text" class="validate" name="uid">
          <label for="first_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolname" type="text" class="validate" name="title" >
          <label for="name">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="schoolboard" type="text" class="validate"  name="descr">
          <label for="board">Description</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Add
      <i class="material-icons right">send</i>
      </button>
    </div>
    </div>
    <?php echo form_close(); ?>
  </div>

<?php
foreach($query as $row)
 {?>
   <div class="row  ">
      <div class="col s12 m8 offset-m2">
        <div class="card-panel  grey lighten-5 hoverable">
          <span  style=" font-size: 18px; font-weight: bold;  "><?php echo $row->title; ?>
          </span><hr>
          <p > <?php echo $row->descr; ?></p>
          <a class="btn-floating btn-large waves-effect waves-light red right" href="<?php echo base_url().'index.php/profile/Deleteachievement/'.$row->id; ?>"><i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
<?php }?>
</div>