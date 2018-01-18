 <?php include 'header.php'; ?>
        <div id="slider" style="background-image: url('images/patterns/dark/pattern5.png');">
        
            <div class="container clearfix">
            
            
                <div class="flexslider preloader2">
            
            
                    <div class="slider-wrap">
                    
               <?php $qu=mysql_query("select * from `lok_home_slider` order by `position` asc"); 
					while($rr=mysql_fetch_array($qu)){?>
                    
                        <div class="slide">
                        
                            <img src="<?php echo $rr["img_url"]; ?>" alt="Sliders"/>
                            
                            <div class="slide-caption caption-left" style="display:<?php if($rr["slider_title"]=='' && $rr["slider_content"]==''){echo "none;";}?>">
                            
                                <h5 style="color:#fff;padding-bottom: 0px;display:<?php if($rr["slider_title"]==''){echo "none;";}?>"><?php echo $rr["slider_title"]; ?></h5>
                                
                                <p style="margin-bottom:0px;display:<?php if($rr["slider_content"]==''){echo "none;";}?>"><?php echo $rr["slider_content"]; ?></p>
                            
                            </div>
                        
                        </div>
					<?php } ?>
                    </div>
                
                
                </div>
                
                
                <div class="slider-line"></div>
                
                
                <script type="text/javascript">
                
                    $(window).load(function(){                    
                        $('#slider .flexslider').flexslider({                            
                            selector: ".slider-wrap > .slide",
                            animation: "slide",
                            easing: "swing",
                            direction: "horizontal",
                            slideshow: true,
                            slideshowSpeed: 7000,
                            animationSpeed: 600,
                            pauseOnHover: true,
                            video: true,
                            controlNav: false,
                            directionNav: true,
                            start: function(slider){
                                slider.removeClass('preloader2');
                            }
                            
                        });
                    
                    });
                
                </script>
            
            
            </div>
        
        
        </div>
        
        
        <div id="content">
        
        
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                         <?php $qu1=mysql_query("select * from `lok_banner_section`"); 
					$rr1=mysql_fetch_array($qu1);?>
                <style>.promo{background: url(<?php echo $rr1["banner_url"]; ?>) repeat !important;}</style>
                    <div class="promo">
                    
                        <div class="promo-desc">
                          <h3> <?php echo $rr1["banner_text"]; ?></h3>
                        </div>
                        
                        <div class="promo-action"><a href="<?php echo $rr1["button_link"]; ?>" target="_blank"> <?php echo $rr1["button_text"]; ?></a></div>
                    
                    </div>
                    
                    
                    <div class="clear"></div>
					
                    <div class="clear"></div>
					
                   <h3>Lokbharti's <span>Event</span></h3>
                     <?php $qu2=mysql_query("select * from `lok_home_events` order by `position` asc"); 
                     $qu3=mysql_query("select * from `lok_home_events` order by `position` desc"); 
					 $rr3=mysql_fetch_array($qu3); 
 					while($rr2=mysql_fetch_array($qu2)){?>
                  
<div class="col_one_third <?php if($rr3["id"]){echo "col_last";} ?>">
                    
                        <div class="ipost">
                        
                            <div class="col_half nobottommargin">
                            
                                <div class="ipost-image">
                                
                                    <a href="#" class="image_fade"><img src="<?php echo $rr2["img_url"]; ?>" title="Post 1" alt="Post 1" /></a>
                                  
                                
                                </div>
                            
                            </div>
                            
                            <div class="col_half col_last nobottommargin">
                            
                                <div class="ipost-title">            <h5><a href="<?php echo $rr2["title_link"]; ?>" target="_blank"><?php echo $rr2["title"]; ?></a></h5></div>
                                
                                <ul class="ipost-meta clearfix">
                                
                                    <li><i class="fa fa-calendar"></i><?php echo $rr2["date"]; ?></li>
                                    
                                
                                </ul>
                                
                                <div class="ipost-content">
                                  <p><?php echo $rr2["content"]; ?></p>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
					<?php } ?>
					<!--<h2 style="text-align:center;">No Events.!</h2>-->
                    
                    
                    <div class="dotted-divider"></div>
                    
                    
                    <div class="col_two_third">
                    
                    
                        <div class="tab_widget nobottommargin" id="tabwidget-1">
                        
                            <ul class="tabs">
                                <li><a href="#tab-tab1" data-href="#tab-tab1"><i class="fa fa-star"></i> Our Mission</a></li>
                               
                            </ul>
                            
                            <div class="tab_container">
                                
                                <div id="tab-tab1" class="tab_content entry_content clearfix">
                                <?php $qu4=mysql_query("select * from `lok_home_mission`"); 
					$rr4=mysql_fetch_array($qu4);?>
                                    <p><?php echo $rr4["mission_text"]; ?></p>
                                    <div class="col_half nobottommargin col_last">
                                    
                                       
                                    
                                  </div>
                                    
                                    <div class="clear"></div>
                                
                              </div>
                               
                            </div>
                        
                        </div>
                        
                        
                        <script type="text/javascript">
                        
                            jQuery(document).ready(function($) {
                                
                                tab_widget('#tabwidget-1');
                            
                            });
                        
                        </script>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_third col_last">
                    
                    
                        <h4>Quotes</h4>
                            
                        <div class="testimonial-scroller" data-prev="#widget-testimonial-2-prev" data-next="#widget-testimonial-2-next">
                        
                            
                            <div class="testimonials" id="widget-testimonial-2">
                            
                            <?php $qu5=mysql_query("select * from `lok_home_quotes`"); 
					while($rr5=mysql_fetch_array($qu5)){?>
                                <div class="testimonial-item">
                                
                                    <div class="testi-content"><?php echo $rr5["quotes_text"]; ?></div>
                                    
                                    <div class="testi-author"><?php echo $rr5["quotes_author"]; ?><span><a href=""></a></span></div>
                                
                                </div>
					<?php } ?>
                            
                            </div>
                            
                        
                        </div>
                        
                        
                        <div id="widget-testimonial-2-prev" class="widget-scroll-prev"></div>
                        <div id="widget-testimonial-2-next" class="widget-scroll-next"></div>
                    
                    
                    </div>
                    
                    
                    <div class="clear"></div>
                    
                    
                    <div style="position: relative;">
                      <ul id="clients-scroller" class="our-clients clearfix">
                        <?php $qu6=mysql_query("select * from `lok_home_bimages` order by `position` asc"); 
					while($rr6=mysql_fetch_array($qu6)){?>
                        	<li><a href="<?php echo $rr6["link_url"]; ?>"><img src="<?php echo $rr6["img_url"]; ?>" alt="<?php echo $rr6["name"]; ?>" title="<?php echo $rr6["name"]; ?>" /></a></li>
					<?php } ?>   
                      </ul>
                        
                        <div class="widget-scroll-prev" id="ourclients_prev"></div>
                        <div class="widget-scroll-next" id="ourclients_next"></div>
                        
                        <script type="text/javascript">
                        
                            jQuery(document).ready(function($) {
                                
                                var clientsCarousel = $("#clients-scroller");
                                
                                clientsCarousel.carouFredSel({
                                    width : "100%",
                                    height : "auto",
                                    circular : false,
                                    responsive : true,
                                    infinite : false,
                                    auto : false,
                                    items : {
                                        width : 160,
                                        visible: {
                                            min: 1,
                                            max: 6
                                        }
                                    },
                                    scroll : {
                                        wipe : true
                                    },
                                    prev : {	
                                        button : "#ourclients_prev",
                                        key : "left"
                                    },
                                    next : { 
                                        button : "#ourclients_next",
                                        key : "right"
                                    },
                                    onCreate : function () {
                                        $(window).on('resize', function(){
                                            clientsCarousel.parent().add(clientsCarousel).css('height', clientsCarousel.children().first().outerHeight() + 'px');
                                        }).trigger('resize');
                                    }
                                });
                            
                            });
                        
                        </script>
                    
                  </div>
                
                
                </div>
            
            
            </div>
        
        
        </div>
		
       
        <div class="clear"></div>
        <?php include 'footer.php'; ?>