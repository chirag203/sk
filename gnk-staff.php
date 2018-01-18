<?php  include 'header.php';
$staff = mysql_query("select * from `lok_staff` order by `position` ASC");

?>              
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                    
                  <div class="col_one col_last nobottommargin">
						<?php while($rr = mysql_fetch_array($staff)){?>
					<div class="col_one_third clearfix">
                    
                        <div class="team-member">
                        
                            <div class="team-image">
                            
                                <img src="<?php echo $rr["img_url"]; ?>" alt="Team Member" title="Team Member" />
                                                   
                            </div>
                            
                            <div class="team-desc">
                            
                                <h4><?php echo $rr["name"]; ?></h4>
								    
							<div class="fa fa-user">
							 <a href="<?php echo $rr["link"]; ?>">Info</a>
							</div>
							
                            </div>
                        </div>
						
                    </div>
					<?php } ?>
				</div>
                
                
                </div>
            
            
            </div>
        
        
        </div>
             <div class="clear"></div>
         <?php include 'footer.php'; ?>