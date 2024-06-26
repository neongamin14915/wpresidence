<?php
global $wpestate_submission_page_fields;

?>

<div class="profile-onprofile row">
  <div class="wpestate_dashboard_section_title"><?php esc_html_e('Property Description','wpresidence');?></div>
  <input type="hidden" name="is_user_submit" value="1">

        <div class="col-md-12">
               <label for="title"><?php esc_html_e('*Title (mandatory)','wpresidence'); ?> </label>
               <input type="text" id="title" class="form-control" value="<?php print stripslashes(wpestate_submit_return_value('wpestate_title',$get_listing_edit,'') ) ; ?>" size="20" name="wpestate_title" />
        </div>

        <?php if(   is_array($wpestate_submission_page_fields) && in_array('wpestate_description', $wpestate_submission_page_fields)) { ?>
        <div class="col-md-12">
                 <label for="description"><?php esc_html_e('Description','wpresidence');?></label>
                  <?php
                  $submit_description= wpestate_submit_return_value('wpestate_description',$get_listing_edit,'')  ;
                    wp_editor(
                            stripslashes($submit_description),
                            'description',
                            array(
                                'textarea_rows' =>  6,
                                'textarea_name' =>  'wpestate_description',
                                'wpautop'       =>  true, // use wpautop?
                                'media_buttons' =>  false, // show insert/upload button(s)
                                'tabindex'      =>  '',
                                'editor_css'    =>  '',
                                'editor_class'  => '',
                                'teeny'         => false,
                                'dfw'           => false,
                                'tinymce'       => false,
                                'quicktags'     => array("buttons"=>"strong,em,block,ins,ul,li,ol,close"),
                               )
                            );
                   ?>

            </div>
            <?php }?>






</div>

<div class="profile-onprofile row">

<?php if(   is_array($wpestate_submission_page_fields) &&
           (    in_array('property_label', $wpestate_submission_page_fields) ||
                in_array('property_price', $wpestate_submission_page_fields) ||
                in_array('property_label_before', $wpestate_submission_page_fields) ||
                in_array('property_second_price', $wpestate_submission_page_fields) ||
                in_array('property_second_price_label', $wpestate_submission_page_fields) ||
                in_array('property_label_before_second_price', $wpestate_submission_page_fields) ||
                in_array('property_year_tax', $wpestate_submission_page_fields) ||
                in_array('property_hoa', $wpestate_submission_page_fields)
            )
        ) { ?>



            <div class="wpestate_dashboard_section_title"><?php esc_html_e('Property Price','wpresidence');?></div>




                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_price', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6">
                        <label for="property_price"> <?php esc_html_e('Price in ','wpresidence');print esc_html( wpresidence_get_option('wp_estate_currency_symbol', '') ).' '; esc_html_e('(only numbers)','wpresidence'); ?>  </label>
                        <input type="number" step="any" id="property_price" class="form-control" size="40" name="property_price"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_price',$get_listing_edit,'numeric') ) ; ?>">
                    </div>
                <?php }?>
                
                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_label', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6  ">
                        <label for="property_label"><?php esc_html_e('After Price Label (ex: "/month")','wpresidence');?></label>
                        <input type="text" id="property_label" class="form-control" size="40" name="property_label"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_label',$get_listing_edit,'') ) ; ?>">
                    </div>
                <?php }?>

                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_label_before', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6 ">
                        <label for="property_label_before"><?php esc_html_e('Before Price Label (ex: "from ")','wpresidence');?></label>
                        <input type="text" id="property_label_before" class="form-control" size="40" name="property_label_before"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_label_before',$get_listing_edit,'') ) ; ?>">
                    </div>
                <?php }?>




                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_second_price', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6">
                        <label for="property_second_price"> <?php esc_html_e('Second Price in ','wpresidence');print esc_html( wpresidence_get_option('wp_estate_currency_symbol', '') ).' '; esc_html_e('(only numbers)','wpresidence'); ?>  </label>
                        <input type="number" step="any" id="property_second_price" class="form-control" size="40" name="property_second_price"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_second_price',$get_listing_edit,'numeric') ) ; ?>">
                    </div>
                <?php }?>
                
                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_second_price_label', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6  ">
                        <label for="property_second_price_label"><?php esc_html_e('After Second Price Label (ex: "/month")','wpresidence');?></label>
                        <input type="text" id="property_second_price_label" class="form-control" size="40" name="property_second_price_label"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_second_price_label',$get_listing_edit,'') ) ; ?>">
                    </div>
                <?php }?>

                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_label_before_second_price', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6 ">
                        <label for="property_label_before_second_price"><?php esc_html_e('Before Second Price Label (ex: "from ")','wpresidence');?></label>
                        <input type="text" id="property_label_before_second_price" class="form-control" size="40" name="property_label_before_second_price"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_label_before_second_price',$get_listing_edit,'') ) ; ?>">
                    </div>
                <?php }?>









                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_year_tax', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6 ">
                        <label for="property_label"><?php esc_html_e('Yearly Tax Rate','wpresidence');?></label>
                        <input type="text" id="property_year_tax" class="form-control" size="40" name="property_year_tax"
                          value="<?php print stripslashes(wpestate_submit_return_value('property_year_tax',$get_listing_edit,'numeric') ) ; ?>">
                    </div>
                <?php }?>

                <?php if(   is_array($wpestate_submission_page_fields) && in_array('property_hoa', $wpestate_submission_page_fields)) { ?>
                    <div class="col-md-6  ">
                        <label for="property_label"><?php esc_html_e('Homeowners Association Fee(monthly)','wpresidence');?></label>
                        <input type="text" id="property_hoa" class="form-control" size="40" name="property_hoa"
                        value="<?php print stripslashes(wpestate_submit_return_value('property_hoa',$get_listing_edit,'numeric') ) ; ?>">
                    </div>
                <?php }?>

                


<?php }?>
</div>
