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

$lang_country_array=array_chunk($lang_country_array, 4, TRUE);

echo '
    <a href="#" id="translate_translate" name="'.$lang.'" onclick="return false;">'.$translator.'</a>
    <div id="translate_popup" style="display:none;  direction: ltr;" class="notranslate">
    <table class="translate_links">';
         foreach($lang_country_array as $val) {
            echo '<tr>';
             foreach($val as $key=>$valtwo) {
                 if($method=="new-windows") {
                    $uri = &JURI::getInstance();
                 echo '<td valign="top"><a class="languagelink" href="http://translate.google.com/translate?client=tmpg&hl=en&langpair='.$lang.'|'.$key.'&u='.$uri->toString().'" target="_blank"><img height="11" width="16" alt="'.$valtwo.'" src="'.JURI::root().'/modules/mod_ajaxwtranslate/tmpl/images/'.$key.'.gif" class="translate_flag" />'.$valtwo.'</a></td>';
                 } else {
                 echo '<td valign="top"><a class="languagelink" href="" onclick="return false;" name="'.$key.'"><img height="11" width="16" alt="'.$valtwo.'" src="'.JURI::root().'/modules/mod_ajaxwtranslate/tmpl/images/'.$key.'.gif" class="translate_flag" />'.$valtwo.'</a></td>';
                 }
             }
            echo '</tr>';
        }
echo "</table></div>";
if($method=="new-windows") echo '<div id="type_work" style="display:none;">new windows</div>';
if($use_cookie!=1) echo '<div id="use_cookie" style="display:none;">cookie</div>';
if(!empty($not_translator)) echo '<div id="not_translator" style="display:none;">'.$not_translator.'</div>';