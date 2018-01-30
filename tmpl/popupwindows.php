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

?>

<script type="text/javascript">
(function (agjoker) {

        
        height=agjoker(window).height()+agjoker(window).scrollTop();
        width=agjoker(window).width()+agjoker(window).scrollLeft();
        centerleft=(width-439)/2;
        centertop=(agjoker(window).height()-183)/2;

        if(getCookie('sourse_languages')!=null){
            diaplay="display:none;";
        } else {
            diaplay="";
        }
        agjoker("body").prepend("<div id='dont_toch_two' style='width:"+width+"px;height:"+height+"px; "+diaplay+" position:fixed; left:0px; top:0px; background: #000000; z-index: 1000;  opacity: 0.7; filter: alpha(opacity = 50);'></div>");
        agjoker("body").prepend("<div  id='dont_toch_one' style='"+diaplay+"'><div id='ajxadfsdf' style='min-height:270px; min-width:439;opacity: 1; z-index: 2000;  background:#F4F0E7; position: fixed; left:"+centerleft+"px; top:"+centertop+"px'><div><img src='<?php echo JURI::root(); ?>/modules/mod_ajaxwtranslate/tmpl/images/martil.jpg' align='' border='0'></div><div style='position: relative; top:0px;margin:20px 0 0 0;'><table><tr><td nowrap='nowrap' vertical-align='top' align='right'><div style='font-size:20px;margin: 0 0 13px 35px'>Chose language:</div><div style='font-size:20px;'>בחרו שפה:</div></td><td nowrap='nowrap'><?php 
        foreach($lang_country_array as $key=>$val) {
         echo "<td valign='top'><a class='languagelink' href='' onclick='return false;' name='".$key."' style='margin: 0 0px 0 5px;'><img height='47' width='70' alt='".$val."' src='".JURI::root()."/modules/mod_ajaxwtranslate/tmpl/images/".$key.".gif' alt='".$key."' class='translate_flag' /></a></td>";
        }
    ?></td></tr></table></div></div></div>");
 
    function getCookie(name) {
        var prefix = name + "="
        var cookieStartIndex = document.cookie.indexOf(prefix)
        if (cookieStartIndex == -1)
                return null
        var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length)
        if (cookieEndIndex == -1)
                cookieEndIndex = document.cookie.length
        return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex))
    }
})(Ageent);
</script> 


<?php

if($method=="new-windows") echo '<div id="type_work" style="display:none;">new windows</div>';
if($use_cookie==1) echo '<div id="use_cookie" style="display:none;">cookie</div>'."<div id='pleaseTranslate' style='display:none;'></div>";
if(!empty($not_translator)) echo '<div id="not_translator" style="display:none;">'.$not_translator.'</div>';

?>