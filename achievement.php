<?php include 'header.php'; ?>
<link rel="stylesheet" href="timeline.css" type="text/css">
<?php
$achievemnets = mysql_query("select * from `lok_achievements` order by `position` ASC"); 


?>

<div class="content-wrap">
    <div class="container clearfix">
        <div class="container">
            <div class="page-header">
                <h1 id="timeline">Achievement</h1>
            </div>
            <ul class="timeline">
            <?php
            while($rr = mysql_fetch_array($achievemnets))  {    
                if( ($rr["id"]%2) != 0) { ?>
             <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $rr["title"]; ?></h4>
              
            </div>
            <div class="timeline-body">
             <?php echo $rr["content"]; ?>
            </div>
          </div>
        </li>
            <?php } else { ?>
                   <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $rr["title"]; ?></h4>
              
            </div>
            <div class="timeline-body">
             <?php echo $rr["content"]; ?>
            </div>
          </div>
        </li>  
            <?php  } }?>
            </ul>
        </div>
    </div>
</div>

<div class="clear"></div>
<?php include 'footer.php'; ?>
