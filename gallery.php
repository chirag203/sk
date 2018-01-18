<?php include 'header.php';
$gallery = mysql_query("select * from `lok_gallery` order by `id` ASC");
$i=0;
?>
 <div class="content-wrap">
                        
                <div class="container clearfix">
                
                 <ul id="portfolio-filter" class="clearfix">
                    
                    <li class="activeFilter"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".pf-colour">Colour</a></li>
                        <li><a href="#" data-filter=".pf-bw">B/W</a></li>
                    </ul>                     
                    <div id="portfolio" class="clearfix">   
                    <?php  while($rr = mysql_fetch_array($gallery)) {
                      $ii = mysql_num_rows($gallery);                        
                        ?>                               
                    <div class="portfolio-item pf-colour">                        
                            <div class="portfolio-image">                            
                                 <a href="#"><img src="<?php echo $rr["img_url"]; ?>" alt="Cloud Icon" title="Cloud Icon" /></a>                                
                                <div class="portfolio-overlay">                                
                                    <div class="p-overlay-icons clearfix">                                    
                                        <a href="<?php echo $rr["img_url"]; ?>" class="p-o-image" data-lightbox="image"></a>                                                                           
                                    </div>                                
                                </div>                            
                            </div>                            
                            <div class="portfolio-title">                            
                                <h3 title="Cloud Icon"><a href="#">Photo-<?php if($i<=$ii){echo $i=$i+1;} ?></a></h3>                            
                            </div>
                    </div>
                    <?php } ?>
                    </div>
     </div>
</div>
 <div class="clear"></div>

<?php include 'footer.php';?>