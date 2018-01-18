<?php require_once 'admin/pages/config.php'; ?>
       <div id="footer" class="footer-dark">
        
            
            <div class="container clearfix">
        
                <div class="footer-widgets-wrap clearfix">
                
                    <div class="col_one_fourth">
                    
                     <div id="linkcat-2" class="widget widget_links clearfix">
                        	
                            <ul class='xoxo blogroll'>
                                <?php $f1=mysql_query("select * from `lok_footer1` order by `position`"); while($r=mysql_fetch_array($f1)){?>
                                <li><a href="<?php echo b_url().$r["menu_link"]; ?>"><?php echo $r["menu_text"]; ?></a></li>
                            <?php } ?>								
                        	</ul>
                            
                        </div>              
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                        <div id="linkcat-2" class="widget widget_links clearfix">
                        	
                            <ul class='xoxo blogroll'>
                              <?php $f2=mysql_query("select * from `lok_footer2` order by `position`"); while($r1=mysql_fetch_array($f2)){?>
                                <li><a href="<?php echo b_url().$r1["menu_link"]; ?>"><?php echo $r1["menu_text"]; ?></a></li>
                            <?php } ?>	
					
								
                               
                          	</ul>
                            
                        </div>
						</div>
						
					<div class="col_one_fourth">
						
						<div id="linkcat-2" class="widget widget_links clearfix">
												
							<ul class='xoxo blogroll'>
							
								<?php $f3=mysql_query("select * from `lok_footer3` order by `position`"); while($r3=mysql_fetch_array($f3)){?>
                                <li><a href="<?php echo b_url().$r3["menu_link"]; ?>"><?php echo $r3["menu_text"]; ?></a></li>
                            <?php } ?>	
						<ul>
                    </div>
				</div>	
                    
                    
                    <div class="col_one_fourth col_last">
                    
					<div class="widget portfolio-widget clearfix">
                          <h4>Contact</h4>
                            <?php $f4=mysql_query("select * from `lok_footer4`"); $r4=mysql_fetch_array($f4)?>
                            <p> <?php echo $r4["title"]; ?></p>
                            
                            <div style="background: url('images/world_map.png') no-repeat center center; height: 100px;">
                            
                                <ul style="font-size: 13px;" class="fa-ul">
                                
                                    <li><i class="fa fa-li fa-map-marker"></i><?php echo $r4["address"]; ?></li>
                                    <li><i class="fa fa-li fa-phone"></i><?php echo $r4["phone"]; ?></li>
                                    <li><i class="fa fa-li fa-envelope-o"></i><?php echo $r4["email"]; ?></li>
                                
                                </ul>
                            
                            </div>
                        
						</div>                
                    
                    
                    </div>
               
                
                </div>
            
            
            </div>        
        
		</div>
		
        <div class="clear"></div>       
        
        <div id="copyrights" class="copyrights-dark">
        
            <div class="container clearfix">
        
            
                <div class="col_half">
                
                <?php echo $r4["copyright"]; ?>
                
                </div>
                
                <div class="col_half col_last tright">
                
                    <a href="#">Privacy Policy</a><span class="link-divider">/</span><a href="#">Terms of Service</a><span class="link-divider">/</span><a href="#">FAQs</a>
                
                </div>
            
            
            </div>
        
        </div>



    
    
    <div id="gotoTop" class="fa fa-angle-up"></div>


<script type="text/javascript" src="js/custom.js"></script>


</body>

</html>