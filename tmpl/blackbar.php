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
        <div id="notranslate">   
        <div id="worldone" name="'.$lang.'">
           <div id="worldinsertdiv" class="notranslate">
                <div class="worldcont_two"></div>
                <div class="worldcont_three">
        <table cellpadding="0" cellspacing="0" id="hovred"  border="0" class="top_table">';
         foreach($lang_country_array as $val) {
            echo '<tr>';
             foreach($val as $key=>$valtwo) {
                 if($method=="new-windows") {
                    $uri = &JURI::getInstance();
                     echo '<td valign="top" nowrap><a class="languagelink" target="_blank" href="http://translate.google.com/translate?client=tmpg&hl=en&langpair='.$lang.'|'.$key.'&u='.$uri->toString().'"><table cellpadding="0" cellspacing="0"><tr><td><img height="11" width="16" alt="'.$valtwo.'" src="'.JURI::root().'/modules/mod_ajaxwtranslate/tmpl/images/'.$key.'.gif" class="translate_flag" /></td><td>'.$valtwo.'</td></tr></table></a></td>';
                 } else {
                     echo '<td valign="top" nowrap><a class="languagelink" href="" onclick="return false;" name="'.$key.'"><table cellpadding="0" cellspacing="0"><tr><td><img height="11" width="16" alt="'.$valtwo.'" src="'.JURI::root().'/modules/mod_ajaxwtranslate/tmpl/images/'.$key.'.gif" class="translate_flag" /></td><td>'.$valtwo.'</td></tr></table></a></td>';
                 }
             }
            echo '</tr>';
        }
        echo "</table>
                </div>
           </div>
        </div></div>";
if($method=="standard") echo '<div id="type_work" style="display:none;">Redirect</div>';
if($method=="new-windows") echo '<div id="type_work" style="display:none;">new windows</div>';
if($use_cookie!=1) echo '<div id="use_cookie" style="display:none;">cookie</div>';
if($hide_panel==1) echo '<div id="ag_hide_panel" style="display:none;">1</div>';
if(!empty($not_translator)) echo '<div id="not_translator" style="display:none;">'.$not_translator.'</div>';
