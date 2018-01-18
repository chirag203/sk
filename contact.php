<?php include 'header.php'; ?>
<?php $cdetail=mysql_query("select * from `lok_contact_page`"); 
$rr=mysql_fetch_array($cdetail);?>
<div class="content-wrap">


    <div class="container clearfix">

        <!--  text -->
        <div class="col_full">



            <h2>Lets exprience with us!</h2>

            <p style="font-size: 14px; line-height: 22px;margin-bottom: 0px;"><img src="<?php echo $rr["img_url"]; ?>" class="alignleft notopmargin" alt="Image" title="Image" data-animate="bounceInLeft" /><?php echo $rr["content"]; ?></p>

        </div>

        <div class="clear"></div>
        <div class="line"></div>

        <div class="col_two_third nobottommargin">

            <div id="contact-form-container">

                <h2>Send us an <span>Email</span></h2>

                <div id="contact-form-result"></div>

                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="functions/sendemail.php" method="post">

                    <div class="col_one_third nobottommargin">
                        <label for="template-contactform-name">Name <small>*</small></label>
                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="required input-block-level" />
                    </div>

                    <div class="col_one_third nobottommargin">
                        <label for="template-contactform-email">Email <small>*</small></label>
                        <input type="text" id="template-contactform-email" name="template-contactform-email" value="" class="required email input-block-level" />
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <label for="template-contactform-service">Department</label>
                        <select id="template-contactform-service" name="template-contactform-service" class="input-block-level">
                                        <option value="">-- Select One --</option>
                                        <option value="Director lokbharti">Director lokbharti</option>
                                        <option value="KVK">KVK</option>
                                        <option value="Collabration">Collabration</option>
                                        <option value="Suggestion">Suggestion</option>
                                    </select>
                    </div>

                    <div class="clear"></div>

                    <div class="col_full nobottommargin">
                        <label for="template-contactform-subject">Subject <small>*</small></label>
                        <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required input-block-level" />
                    </div>

                    <div class="col_full nobottommargin">
                        <label for="template-contactform-message">Message <small>*</small></label>
                        <textarea class="required input-block-level" id="template-contactform-message" name="template-contactform-message" rows="10" cols="30"></textarea>
                    </div>

                    <div class="col_full nobottommargin hidden">
                        <label for="template-contactform-botcheck">Botcheck</label>
                        <textarea class="required input-block-level" id="template-contactform-botcheck" name="template-contactform-botcheck" rows="10" cols="30"></textarea>
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="btn" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                    </div>

                </form>

            </div>


        </div>

        <div class="col_one_third entry_content col_last nobottommargin">
            <div class="topmargin">
                <div class="product-feature">
                   <span class="fa fa-map-marker"></span>
                   <h3>Address</h3>
                   <p><?php echo $rr["address"]; ?></p>
                </div>
                <div class="product-feature"><span class="fa fa-phone"></span>
                    <h3>Call us</h3>
                    <p><?php echo $rr["phone"]; ?></p>
                </div>

                <div class="product-feature"><span class="fa fa-envelope-o"></span>
                    <h3>Email </h3>
                    <p><?php echo $rr["email"]; ?><br></p>
                </div>


            </div>
</div>
</div>
<div class="clear"></div>
<br><br>
<script type="text/javascript">
    $("#template-contactform").validate({
        submitHandler: function(form) {

            $(form).find('.btn').prepend('<i class="fa fa-spinner fa-spin"></i>').addClass('disabled').attr('disabled', 'disabled');

            $(form).ajaxSubmit({
                target: '#contact-form-result',
                success: function() {
                    $("#template-contactform").fadeOut(500, function() {
                        $('#contact-form-result').fadeIn(500);
                    });
                },
                error: function() {
                    $('#contact-form-result').fadeIn(500);
                    $("#template-contactform").find('.btn').remove('<i class="fa fa-spinner fa-spin"></i>').removeClass('disabled').removeAttr('disabled');
                }
            });

        }
    });

</script>
<?php include 'footer.php'; ?>
                    <h3> Address</h3>
