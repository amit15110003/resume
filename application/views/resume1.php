<div class="main">
<div id="content">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Resume </title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(<?php echo base_url('media/image/noise.jpg'); ?>); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 8px 0;  font-size: 42px; font-weight: bold; letter-spacing: -2px;  }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>

     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript">
var doc = new jsPDF();
var specialElementHandlers = {
'#editor': function (element, renderer) {
return true;
}
};

$(document).ready(function() {
$('#btn').click(function () {
    
doc.fromHTML($('#content').html(), 15, 15, {
'width': 170,
'elementHandlers': specialElementHandlers
});
doc.save('sample-content.pdf');
});
});
</script>
</head>

<body>

    <div id="page-wrap">
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn" style="text-transform: capitalize;"><?php echo $this->session->userdata('uname'); ?> <?php echo $this->session->userdata('lname'); ?></h1>
        
            <p style="border-bottom: 1px solid #999;" >
                Cell: <span class="tel"><?php echo $this->session->userdata('contact'); ?></span><br />
                Email: <a class="email" href="mailto:<?php echo $this->session->userdata('email'); ?>"><?php echo $this->session->userdata('email'); ?></a>
            </p>
        </div>
                
        
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <?php
                if (isset($data))
                {
                  
                }
                else {
                  $data=0;
                }?>
            <dd>
                <h2 style="text-transform: capitalize;"><?php echo $cname;?></h2>
                <p style="text-transform: capitalize;"><strong><?php echo $ccourse;?></strong><br />
                   <strong><?php echo $cyear;?></strong> </p>
                   <h2 style="text-transform: capitalize;" ><?php echo $sname;?></h2>
                <p style="text-transform: capitalize;"><strong><?php echo $sboard;?></strong><br />
                   <strong><?php echo $syear;?></strong> </p>
                   <?php
                    foreach($query as $row)
                     {?>
                  <h2 style="text-transform: capitalize;"><?php echo $row->name; ?></h2>
                 <p style="text-transform: capitalize;"><strong><?php echo $row->duration; ?></strong><br />
                   <strong> <?php echo $row->desc; ?></strong> </p> <?php }?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
                <h2>Area of interest</h2>
                <p style="text-transform: capitalize;" ><?php echo $i;?></p>
                
                <h2>Computer skills</h2>
                <p style="text-transform: capitalize;" ><?php 
                echo $cl; ?></p>

                <h2>Software </h2>
                <p><?php echo $s; ?></p>

                <h2>Appratus Handle </h2>
                <p style="text-transform: capitalize;" ><?php echo $a; ?></p>

                <h2>Language </h2>
                <p style="text-transform: capitalize;" ><?php echo $l; ?></p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
            <?php
            foreach($query1 as $row)
             {?>
                <h2 style="text-transform: capitalize;" ><?php echo $row->project; ?> <span><?php echo $row->duration; ?></span></h2>
                <ul>
                    <li style="text-transform: capitalize;" ><?php echo $row->position; ?></li>
                    <li style="text-transform: capitalize;" ><?php echo $row->supervisor; ?></li>
                </ul>
            <?php }?>
                
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Achievements</dt>
            <dd><?php
            foreach($query2 as $row)
             {?>
                <h2 style="text-transform: capitalize;" ><?php echo $row->title; ?></h2>
                <ul>
                    <li style="text-transform: capitalize;" ><?php echo $row->descr; ?></li>
                </ul>
            <?php }?></dd>
            <dd class="clear"></dd>
        </div>
    
    <button id="cmd">generate PDF</button></div>
</div></div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script  src="<?php echo base_url('media/js/pdf.js'); ?>">
 
</script>
</body>

</html>