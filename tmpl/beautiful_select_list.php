<?php 
/**
 * Module to translate the text using ajax technology from googla
 *
 * @version 1.0
 * @author Dima Kuprijanov (ageent.ua@gmail.com)
 * @copyright (C) 2010 by Dima Kuprijanov (http://www.ageent.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 **/
// no direct access

defined('_JEXEC') or die('Restricted access');

if(in_array(3,$array_languages)) {
    echo "<div id='image_list'>";
    foreach($lang_country_array as $key=>$val) {
        $action=$array_languages[$key];
        if($action==3) echo '<a class="languagelink" href="" onclick="return false;" name="'.$key.'"><img height="11" width="16" alt="'.$val.'" src="'.JURI::root().'/modules/mod_ajaxwtranslate/tmpl/images/'.$key.'.gif" /></a>'; 
    }
    echo "</div>";
}

echo '<div id="wrapselect"><select id="pleaseTranslate" name="'.$lang.'" class="styled">';
echo '<option value="" selected="selected">Select Language</option>';
    foreach($lang_country_array as $key=>$val) {
        $action=$array_languages[$key];
        if($action==1) echo '<option value="'.$key.'">'.$val.'</option>'; 
    }
echo "</select></div>";
if($method=="standard") echo '<div id="type_work" style="display:none;">Redirect</div>';
if($method=="new-windows") echo '<div id="type_work" style="display:none;">new windows</div>';
if($use_cookie!=1) echo '<div id="use_cookie" style="display:none;">cookie</div>';
if(!empty($not_translator)) echo '<div id="not_translator" style="display:none;">'.$not_translator.'</div>';
echo '<div id="ajaxeffect_img" style="display:none;">'.$effect_img.'</div>';