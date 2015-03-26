<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 function nmepscor_rii4_1_5_css_alter(&$css) {
    foreach ($css as $key => $value) {
        if (preg_match('/^ie::(\S*)/', $key)) {
            unset($css[$key]); 
        } else {
            $css[$key]['browsers']['IE'] = TRUE;
        }
    } 
}
 
/**
 * This preprocess function targets IE8 and lower browsers for the file ie.lte-8.css in our 
 * 'nmepscor_rii5_1_5.css OMEGA subtheme
 * located at /sites/all/themes/
 * */
 //function nmepscor_rii4_1_5_preprocess_html(&$variables) {
  //drupal_add_css(path_to_theme() . '/css/ie-lte-8.css', array(
  //  'group' => CSS_THEME,
  //  'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE),
  //  'preprocess' => FALSE)
  //);
  
  // drupal_add_css(path_to_theme() . '/css/ie-lte-11.css', array(
  //'group' => CSS_THEME, 
  //'browsers' => array('IE' => 'lte IE 11', '!IE' => FALSE), 
 // 'preprocess' => FALSE)
 // );
  
//}
 
// Modification for the contact form title

/**
 * Implements hook_form_alter()
 * @author Chris Allen
 */
 
function nmepscor_rii4_1_5_form_contact_site_form_alter(&$form, &$form_state, $form_id) {
  // Set and rename Contact Form title from 'Contact' to "NM EPSCoR Contacts"
  drupal_set_title('NM EPSCoR Contacts');
}
  
?>

