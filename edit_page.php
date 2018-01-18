<?php include 'header.php';
$page_name=$_REQUEST["editpage"];
$page=mysql_query("select * from `lok_custom_page` where `page_name`='".$page_name."'");
$r=mysql_fetch_array($page);
$page1=mysql_query("select * from `lok_page_slider` where `page_title`='".$page_name."'");
$a_menu = mysql_query("select * from `lok_menu` where `menu_link`='".$page_name."'");
$rr2=mysql_fetch_assoc($a_menu);
$rr2["id"];
?>
<div class="content-wrap">
         
            
                <div class="container clearfix">                    
                  <div class="col_two_third nobottommargin text-center">
                   <div class="fslider">                    
                        <div class="flexslider">
                            <div class="slider-wrap">
                            <?php while($rr=mysql_fetch_array($page1)){?>                            
                                <div class="slide">                                
                                    <img src="<?php echo $rr["img_url"]; ?>" alt="Landing Gallery 1" />
                                </div>
                                <?php } ?>                                 
                            </div>
                             </div>
                      </div>                    
                    <br>
                    <!--<h2><?php echo $r["page_name"]; ?></h2>-->
                  <div>
                      <?php echo $r["content"]; ?>
                  </div>
                    </div>
                     <div class="col_one_third col_last nobottommargin">      
							<div class="list-group">
                               <ul class="sidenav nomargin">
                               <?php 
                                   function menuname($id,$name){
                                      $pack = mysql_query("select * from `lok_menu` where `id` = '".$id."'");
                                        $a = mysql_fetch_assoc($pack);
                                        return $a[$name];                                       
                                   }
                  $s_menu = mysql_query("select * from `lok_side_menu1` where `side_menu_id` = '".$r["parent_menu"]."'");
                     while($rr1 = mysql_fetch_assoc($s_menu)){?>
                     
    <li class="<?php if($rr2["id"]==$rr1["main_menu_id"]){echo "active";} ?>"><a href="<?php echo menuname($rr1["main_menu_id"],"menu_link");?>"><i class="fa fa-chevron-left"></i><?php echo menuname($rr1["main_menu_id"],"menu_name"); ?></a></li>
				<?php } ?>
					</ul>
                 </div>                  
                  </div>
            </div>
<?php include 'footer.php';?>
