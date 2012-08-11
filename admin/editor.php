<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.5.1
*/error_reporting(6135);$zb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($zb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$he=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($he)$$X=$he;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.js .column{position:absolute;background:#ddf;padding:.3em 1ex .3em 0;margin-top:-.3em;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}.icon{width:18px;height:18px;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#dbs{overflow:hidden;}#logins,#tables{overflow:auto;}#logins a,#tables a{background:#fff;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}function
cookie(assign,days){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}function
verifyVersion(){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}function
selectValue(select){var
selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}function
parentTag(el,tag){var
re=new
RegExp('^'+tag+'$','i');while(!re.test(el.tagName)){el=el.parentNode;}return el;}function
trCheck(el){var
tr=parentTag(el,'tr');tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}function
tableCheck(){var
tables=document.getElementsByTagName('table');for(var
i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var
trs=tables[i].getElementsByTagName('tr');for(var
j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}function
formUncheck(id){var
el=document.getElementById(id);el.checked=false;trCheck(el);}function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return checked;}function
tableClick(event){var
click=(!window.getSelection||getSelection().isCollapsed);var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){if(el.type!='checkbox'){return;}checkboxClick(event,el);click=false;}el=el.parentNode;}el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}trCheck(el);}var
lastChecked;function
checkboxClick(event,el){if(!el.name){return;}if(event.shiftKey&&(!lastChecked||lastChecked.name==el.name)){var
checked=(lastChecked?lastChecked.checked:true);var
inputs=parentTag(el,'table').getElementsByTagName('input');var
checking=!lastChecked;for(var
i=0;i<inputs.length;i++){var
input=inputs[i];if(input.name===el.name){if(checking){input.checked=checked;trCheck(input);}if(input===el||input===lastChecked){if(checking){break;}checking=true;}}}}else{lastChecked=el;}}function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}function
nodePosition(el){var
pos=0;while(el=el.previousSibling){pos++;}return pos;}function
pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');location.href=href;}}function
menuOver(el){el.style.overflow='visible';}function
menuOut(el){el.style.overflow='auto';}function
selectAddRow(field){field.onchange=function(){selectFieldChange(field.form);};field.onchange();var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);}function
columnMouse(el,className){var
spans=el.getElementsByTagName('span');for(var
i=0;i<spans.length;i++){if(/column/.test(spans[i].className)){spans[i].className='column'+(className||'');}}}function
selectSearch(name){var
el=document.getElementById('fieldset-search');el.className='';var
divs=el.getElementsByTagName('div');for(var
i=0;i<divs.length;i++){var
div=divs[i];if(/select/i.test(div.firstChild.tagName)&&selectValue(div.firstChild)==name){break;}}if(i==divs.length){div.firstChild.value=name;div.firstChild.onchange();}div.lastChild.focus();}function
bodyKeydown(event,button){var
target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(button){target.form[button].click();}else{target.form.submit();}return false;}return true;}function
editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var
target=event.target||event.srcElement;var
sibling=(event.keyCode==40?'nextSibling':'previousSibling');var
el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}return false;}if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}return true;}function
functionChange(select){var
input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}input.removeAttribute('maxlength');}else
if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}function
ajax(url,callback,data){var
request=(window.XMLHttpRequest?new
XMLHttpRequest():(window.ActiveXObject?new
ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}return request;}function
ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var
data=eval('('+request.responseText+')');for(var
key
in
data){setHtml(key,data[key]);}}});}function
selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}var
original=td.innerHTML;var
input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var
pos=event.rangeOffset;var
value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}function
eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}function
bodyLoad(version){}function
selectFieldChange(form){}function
whisperClick(event,field){var
el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';return false;}}function
whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var
a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$i;return$i;}function
adminer(){global$c;return$c;}function
idf_unescape($u){$kc=substr($u,-1);return
str_replace($kc.$kc,$kc,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($fd,$zb=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($fd)){foreach($X
as$fc=>$W){unset($fd[$x][$fc]);if(is_array($W)){$fd[$x][stripslashes($fc)]=$W;$fd[]=&$fd[$x][stripslashes($fc)];}else$fd[$x][stripslashes($fc)]=($zb?$W:stripslashes($W));}}}}function
bracket_escape($u,$ua=false){static$Wd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($u,($ua?array_flip($Wd):$Wd));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($B,$Y,$Ca,$ic="",$Ic="",$dc=false){static$t=0;$t++;$I="<input type='checkbox' name='$B' value='".h($Y)."'".($Ca?" checked":"").($Ic?' onclick="'.h($Ic).'"':'').($dc?" class='jsonly'":"")." id='checkbox-$t'>";return($ic!=""?"<label for='checkbox-$t'>$I".h($ic)."</label>":$I);}function
optionlist($Nc,$vd=null,$ne=false){$I="";foreach($Nc
as$fc=>$W){$Oc=array($fc=>$W);if(is_array($W)){$I.='<optgroup label="'.h($fc).'">';$Oc=$W;}foreach($Oc
as$x=>$X)$I.='<option'.($ne||is_string($x)?' value="'.h($x).'"':'').(($ne||is_string($x)?(string)$x:$X)===$vd?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($B,$Nc,$Y="",$Hc=true){if($Hc)return"<select name='".h($B)."'".(is_string($Hc)?' onchange="'.h($Hc).'"':"").">".optionlist($Nc,$Y)."</select>";$I="";foreach($Nc
as$x=>$X)$I.="<label><input type='radio' name='".h($B)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$I;}function
confirm($La=""){return" onclick=\"return confirm('".lang(0).($La?" (' + $La + ')":"")."');\"";}function
print_fieldset($t,$mc,$se=false,$Ic=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Ic)."return !toggle('fieldset-$t');\">$mc</a></legend><div id='fieldset-$t'".($se?"":" class='hidden'").">\n";}function
bold($za){return($za?" class='active'":"");}function
odd($I=' class="odd"'){static$s=0;if(!$I)$s=-1;return($s++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($x,$X=null){static$_b=true;if($_b)echo"{";if($x!=""){echo($_b?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$_b=false;}else{echo"\n}\n";$_b=true;}}function
ini_bool($ac){$X=ini_get($ac);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$i;return$i->quote($O);}function
get_vals($G,$g=0){global$i;$I=array();$H=$i->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$g];}return$I;}function
get_key_vals($G,$j=null){global$i;if(!is_object($j))$j=$i;$I=array();$H=$j->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$j=null,$n="<p class='error'>"){global$i;$Ka=(is_object($j)?$j:$i);$I=array();$H=$Ka->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($j)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$I;}function
unique_array($J,$w){foreach($w
as$v){if(ereg("PRIMARY|UNIQUE",$v["type"])){$I=array();foreach($v["columns"]as$x){if(!isset($J[$x]))continue
2;$I[$x]=$J[$x];}return$I;}}$I=array();foreach($J
as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$I[$x]=$X;}return$I;}function
where($Z){global$ec;$I=array();foreach((array)$Z["where"]as$x=>$X)$I[]=idf_escape(bracket_escape($x,1)).(($ec=="sql"&&ereg('\\.',$X))||$ec=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));foreach((array)$Z["null"]as$x)$I[]=idf_escape($x)." IS NULL";return
implode(" AND ",$I);}function
where_check($X){parse_str($X,$Ba);remove_slashes(array(&$Ba));return
where($Ba);}function
where_link($s,$g,$Y,$Kc="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($g)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Kc:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
cookie($B,$Y){global$aa;$Vc=array($B,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Vc[]=true;return
call_user_func_array('setcookie',$Vc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Wa,$M,$V,$m=null){global$Xa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xa))."|username|".($m!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($Wa!="server"||$M!=""?urlencode($Wa)."=".urlencode($M)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($pc,$yc=null){if($yc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($pc!==null?$pc:$_SERVER["REQUEST_URI"]))][]=$yc;}if($pc!==null){if($pc=="")$pc=".";header("Location: $pc");exit;}}function
query_redirect($G,$pc,$yc,$kd=true,$qb=true,$ub=false){global$i,$n,$c;if($qb)$ub=!$i->query($G);$Ad="";if($G)$Ad=$c->messageQuery("$G;");if($ub){$n=error().$Ad;return
false;}if($kd)redirect($pc,$yc.$Ad);return
true;}function
queries($G=null){global$i;static$id=array();if($G===null)return
implode(";\n",$id);$id[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$i->query($G);}function
apply_queries($G,$R,$mb='table'){foreach($R
as$P){if(!queries("$G ".$mb($P)))return
false;}return
true;}function
queries_redirect($pc,$yc,$kd){return
query_redirect(queries(),$pc,$yc,$kd,false,!$kd);}function
remove_from_uri($Uc=""){return
substr(preg_replace("~(?<=[?&])($Uc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Pa){return" ".($E==$Pa?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($x,$Qa=false){$wb=$_FILES[$x];if(!$wb||$wb["error"])return$wb["error"];$I=file_get_contents($Qa&&ereg('\\.gz$',$wb["name"])?"compress.zlib://$wb[tmp_name]":($Qa&&ereg('\\.bz2$',$wb["name"])?"compress.bzip2://$wb[tmp_name]":$wb["tmp_name"]));if($Qa){$Bd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Bd,$ld))$I=iconv("utf-16","utf-8",$I);elseif($Bd=="\xEF\xBB\xBF")$I=substr($I,3);}return$I;}function
upload_error($n){$wc=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(1).($wc?" ".lang(2,$wc):""):lang(3));}function
repeat_pattern($Xc,$nc){return
str_repeat("$Xc{0,65535}",$nc/65535)."$Xc{0,".($nc
%
65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($O,$nc=80,$Hd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$nc).")($)?)u",$O,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$nc).")($)?)",$O,$_);return
h($_[1]).$Hd.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($fd,$Wb=array()){while(list($x,$X)=each($fd)){if(is_array($X)){foreach($X
as$fc=>$W)$fd[$x."[$fc]"]=$W;}elseif(!in_array($x,$Wb))echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($P){global$c;$I=array();foreach($c->foreignKeys($P)as$q){foreach($q["source"]as$X)$I[$X][]=$q;}return$I;}function
enum_input($U,$ra,$o,$Y,$gb=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$tc);$I=($gb!==null?"<label><input type='$U'$ra value='$gb'".((is_array($Y)?in_array($gb,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($tc[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ca=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$I.=" <label><input type='$U'$ra value='".($s+1)."'".($Ca?' checked':'').'>'.h($c->editVal($X,$o)).'</label>';}return$I;}function
input($o,$Y,$r){global$ce,$c,$ec;$B=h(bracket_escape($o["field"]));echo"<td class='function'>";$od=($ec=="mssql"&&$o["auto_increment"]);if($od&&!$_POST["save"])$r=null;$Kb=(isset($_GET["select"])||$od?array("orig"=>lang(5)):array())+$c->editFunctions($o);$ra=" name='fields[$B]'";if($o["type"]=="enum")echo
nbsp($Kb[""])."<td>".$c->editInput($_GET["edit"],$o,$ra,$Y);else{$_b=0;foreach($Kb
as$x=>$X){if($x===""||!$X)break;$_b++;}$Hc=($_b?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($_b > f.selectedIndex) f.selectedIndex = $_b;\"":"");$ra.=$Hc;echo(count($Kb)>1?html_select("function[$B]",$Kb,$r===null||in_array($r,$Kb)||isset($Kb[$r])?$r:"","functionChange(this);"):nbsp(reset($Kb))).'<td>';$cc=$c->editInput($_GET["edit"],$o,$ra,$Y);if($cc!="")echo$cc;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$tc);foreach($tc[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ca=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$B][$s]' value='".(1<<$s)."'".($Ca?' checked':'')."$Hc>".h($c->editVal($X,$o)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$Hc>";elseif(ereg('text|lob',$o["type"]))echo"<textarea ".($ec!="sqlite"||ereg("\n",$Y)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ra>".h($Y).'</textarea>';else{$xc=(!ereg('int',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$_)?((ereg("binary",$o["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$o["unsigned"]?1:0)):($ce[$o["type"]]?$ce[$o["type"]]+($o["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($xc?" maxlength='$xc'":"").(ereg('char|binary',$o["type"])&&$xc>20?" size='40'":"")."$ra>";}}}function
process_input($o){global$c;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$o["type"])&&ini_bool("file_uploads")){$wb=get_file("fields-$u");if(!is_string($wb))return
false;return
q($wb);}return$c->processInput($o,$Y,$r);}function
search_tables(){global$c,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Gb=false;foreach(table_status()as$P=>$Q){$B=$c->tableName($Q);if(isset($Q["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($P,$_POST["tables"]))){$H=$i->query("SELECT".limit("1 FROM ".table($P)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($P),array())),1));if($H->fetch_row()){if(!$Gb){echo"<ul>\n";$Gb=true;}echo"<li><a href='".h(ME."select=".urlencode($P)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n";}}}echo($Gb?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Ub,$Bc=false){global$c;$I=$c->dumpHeaders($Ub,$Bc);$Sc=$_POST["output"];if($Sc!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($Ub).".$I".($Sc!="file"&&!ereg('[^0-9a-z]',$Sc)?".$Sc":""));session_write_close();return$I;}function
dump_csv($J){foreach($J
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$J[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($r,$g){return($r?($r=="unixepoch"?"DATETIME($g, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$g)"):$g);}function
password_file(){$Ua=ini_get("upload_tmp_dir");if(!$Ua){if(function_exists('sys_get_temp_dir'))$Ua=sys_get_temp_dir();else{$xb=@tempnam("","");if(!$xb)return
false;$Ua=dirname($xb);unlink($xb);}}$xb="$Ua/adminer.key";$I=@file_get_contents($xb);if($I)return$I;$Ib=@fopen($xb,"w");if($Ib){$I=md5(uniqid(mt_rand(),true));fwrite($Ib,$I);fclose($Ib);}return$I;}function
is_mail($db){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Xc="$pa+(\\.$pa+)*@($Va?\\.)+$Va";return
preg_match("(^$Xc(,\\s*$Xc)*\$)i",$db);}function
is_url($O){$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Va?\\.)+$Va(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$_)?strtolower($_[1]):"");}global$c,$i,$Xa,$bb,$ib,$n,$Kb,$Nb,$aa,$bc,$ec,$a,$jc,$Gc,$Ed,$Vd,$T,$ce,$je,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Vc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Vc[]=true;call_user_func_array('session_set_cookie_params',$Vc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$zb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$jc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($u,$C=null){global$a,$T;$Xd=(isset($T[$u])?$T[$u]:$u);if(is_array($Xd)){$ad=($C==1?0:($a=='cs'||$a=='sk'?($C&&$C<5?1:2):($a=='fr'?(!$C?0:1):($a=='pl'?($C
%
10>1&&$C
%
10<5&&$C/10
%
10!=1?1:2):($a=='sl'?($C
%
100==1?0:($C
%
100==2?1:($C
%
100==3||$C
%
100==4?2:3))):($a=='lt'?($C
%
10==1&&$C
%
100!=11?0:($C
%
10>1&&$C/10
%
10!=1?1:2)):($a=='ru'||$a=='uk'?($C
%
10==1&&$C
%
100!=11?0:($C
%
10>1&&$C
%
10<5&&$C/10
%
10!=1?1:2)):1)))))));$Xd=$Xd[$ad];}$oa=func_get_args();array_shift($oa);$Fb=str_replace("%d","%s",$Xd);if($Fb!=$Xd)$oa[0]=number_format($C,0,".",lang(7));return
vsprintf($Fb,$oa);}function
switch_lang(){global$a,$jc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(8).": ".html_select("lang",$jc,$a,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(9)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$a="en";if(isset($jc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($jc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$tc,PREG_SET_ORDER);foreach($tc
as$_)$ja[$_[1]]=(isset($_[3])?$_[3]:1);arsort($ja);foreach($ja
as$x=>$hd){if(isset($jc[$x])){$a=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ja[$x])&&isset($jc[$x])){$a=$x;break;}}}switch($a){case"en":$T=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.',',','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'yes','no','$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','Select data','ltr','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','No rows.','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','descending','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$T=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.',' ','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'ano','ne','$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','Vypsat data','ltr','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádné rozšíření','Není dostupné žádné z podporovaných PHP rozšíření (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Žádné řádky.','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','sestupně','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků','Pozměnit typ');break;case"sk":$T=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.',' ','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'yes','no','$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','Vypísať dáta','ltr','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Žiadne riadky.','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','zostupne','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky','Upraviť všetko');break;case"nl":$T=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'yes','no','$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','Gegevens selecteren','ltr','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Geen rijen.','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Aflopend','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','Alles bewerken');break;case"es":$T=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.',' ','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','Visualizar contenido','ltr','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','No existen registros.','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','descendiente','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros','Editar todos');break;case"de":$T=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.',' ','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'yes','no','$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','Daten auswählen','ltr','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Keine Daten.','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','absteigend','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze','Alle ändern');break;case"fr":$T=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.',',','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Éditeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'yes','no','$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','Afficher les données','ltr','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Aucun résultat.','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','décroissant','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes','Tout modifier');break;case"it":$T=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','Visualizza dati','ltr','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Nessuna riga.','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','discendente','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','Modifica tutto');break;case"et":$T=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.',',','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'yes','no','$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','Vaata andmeid','ltr','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Sissekanded puuduvad.','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','kahanevalt','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu','Muuda kõiki');break;case"hu":$T=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.',' ','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'yes','no','$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválasztás','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','óó:pp:mm','[yyyy].m.d','Kilépés','Tartalom','ltr','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Nincs megjeleníthető eredmény.','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','csökkenő','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop','Összes szerkesztése');break;case"pl":$T=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.',' ','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'tak','nie','$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','Pokaż dane','ltr','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Brak rekordów.','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','malejąco','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów','Zmień typ');break;case"ca":$T=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.',',','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','Selecciona dades','ltr','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','No hi ha cap registre.','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','descendent','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d registre','%d registres'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files','Edita-ho tot');break;case"pt":$T=array('Está seguro?','Não é possível enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.',' ','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo já existe.','Tipos definido pelo usuário','Números','Data e hora','Cadena','Binário','Rede','Geometria','Listas','Editor','Usuário','Senha','Entrar','Salvar Senha','Novo Registro','Última página',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','Selecionar dados','ltr','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não há extension','Nenhuma das extensões PHP suportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Não existem registros.','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d item afetado.','%d itens afetados.'),'Clique duas vezes sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','decrescente','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros','Esquema inválido.');break;case"sl":$T=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.',' ','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'yes','no','$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','Izberi podatke','ltr','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Ni vrstic.','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','padajoče','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic','Spremeni tip');break;case"lt":$T=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.',' ','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Redaktorius','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Naujas įrašas','Paskutinis puslapis',array('%d baitas','%d baigai','%d baitų'),'yes','no','$1-$3-$5','Ieškoti','visur','Rikiuoti','Limitas','Veiksmas','Atrinkti','El. paštas','Nuo','Antraštė','Įrašyti','Priedai','Siųsti',array('Išsiųstas %d laiškas.','Išsiųsti %d laiškai.','Išsiųsta %d laiškų.'),'dabar','HH:MM:SS','[yyyy]-mm-dd','Atsijungti','Atrinkti duomenis','ltr','Serveris','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Redaguoti','Nėra įrašų.','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','mažėjimo tvarka','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis',array('%d įrašas','%d įrašai','%d įrašų'),'visas rezultatas','Klonuoti','Eksportas','Importas','Ieškoti duomenų lentelėse','Lentelė','Įrašai','Keisti tipą');break;case"tr":$T=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.',' ','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'yes','no','$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','Veri seç','ltr','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Sıra yok.','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','azalan','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)','Tür değiştir');break;case"ro":$T=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.',',','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Editor','Nume de utilizator','Parola','Intră','Logare permanentă','Înscriere nouă','Ultima pagină',array('%d octet','%d octeți'),'yes','no','$5.$3.$1','Căutare','oriunde','Sortare','Limit','Acțiune','Selectează','Poșta electronică','De la','Pentru','Inserează','Fișiere atașate','Trimite',array('A fost trimisă %d scrisoare.','Au fost trimise %d scrisori.'),'acum','HH:MM:SS','dd.mm.[yyyy]','Eșire','Selectează','ltr','Server','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Editează','Nu sunt înscrieri.','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','descrescător','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima',array('%d înscriere','%d înscrieri'),'tot rezultatul','Clonează','Export','Importă','Caută în tabele','Tabel','Înscrieri','Editează tot');break;case"id":$T=array('Anda yakin','Tidak dapat mengunggah berkas.','Besar berkas yang diizinkan adalah %s bita.','Berkas tidak ditemukan.','kosong','orisinal','Tiada tabel.','.','Bahasa','Gunakan','Harap gunakan salah satu ekstensi %s.','Berkas sudah ada.','Jenis pengguna','Angka','Tanggal dan waktu','String','Biner','Jaringan','Geometri','Daftar','Editor','Pengguna','Sandi','Masuk','Masuk permanen','Entri baru','Halaman terakhir','%d bita','yes','no','$1-$3-$5','Cari','di mana pun','Urutan','Limit','Tindakan','Pilih','Surel','Dari','Subjek','Sisipkan','Lampiran','Kirim',array('%d surel berhasil dikirim.','%d surel berhasil dikirim'),'now','HH:MM:SS','[yyyy]-mm-dd','Keluar','Pilih data','ltr','Server','Token CSRF invalid. Kirim ulang formulir.','Berhasil keluar.','Dukungan sesi harus aktif.','Sesi habis, silakan masuk lagi.','Akses invalid.','Ekstensi tidak tersedia','Ekstensi PHP yang didukung (%s) tidak tersedia.','Data POST terlalu besar. Kurangi data atau perbesar pengarah konfigurasi %s.','Entri berhasil dihapus.','Entri berhasil diperbarui.','Entri%s berhasil disisipkan.','Edit','Tiada baris.','Simpan','Simpan dan terus mengedit','Simpan dan sisipkan yang lain','Hapus','%d entri terpengaruh.','Klik ganda suatu nilai untuk mengubahnya.','%d baris berhasil diimpor.','Gagal memilih tabel','edit','menurun','Relasi','Gunakan tautan edit untuk mengubah nilai ini.','Halaman','terakhir','%d baris','Seluruh hasil','Gandakan','Ekspor','Impor','Cari data dalam tabel','Tabel','Baris','Ubah jenis');break;case"ru":$T=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.',' ','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'yes','no','$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','ЧЧ:ММ:СС','дд.мм.[гггг]','Выйти','Выбрать','ltr','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Нет записей.','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','по убыванию','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк','Редактировать всё');break;case"uk":$T=array('Ви впевнені?','Неможливо завантажити файл.','Максимально допустимий розмір файлу %sБ.','Файл не існує.','порожньо','початковий','Нема таблиць.',' ','Мова','Обрати','Будь ласка, використовуйте одне з розширень %s.','Файл існує.','Типи користувачів','Числа','Дата і час','Радки','Двійкові','Мережа','Геометрія','Списки','Редактор','Користувач','Пароль','Увійти','Пам\'ятати сесію','Новий запис','Остання сторінка',array('%d байт','%d байта','%d байтів'),'так','ні','$5.$3.$1','Пошук','будь-де','Сортувати','Обмеження','Дія','Вибрати','E-mail','Від','Заголовок','Вставити','Додатки','Надіслати',array('Було надіслано %d повідомлення.','Було надіслано %d повідомлення.','Було надіслано %d повідомлень.'),'зараз','ГГ:ХХ:СС','дд.мм.[рррр]','Вийти','Вибрати дані','ltr','Сервер','Недійсний CSRF токен. Надішліть форму ще раз.','Ви вдало вийшли з системи.','Сесії повинні бути дозволені.','Сесія закінчилась, будь ласка, увійдіть в систему знову.','Неправильні дані входу.','Нема розширень','Жодне з PHP-розширень (%s), що підтримуються, не доступне.','Занадто великий об\'єм POST-даних. Зменшіть об\'єм або збільшіть параметр директиви %s конфигурації.','Запис було видалено.','Запис було змінено.','Запис%s було вставлено.','Редагувати','Нема рядків.','Зберегти','Зберегти і продовжити редагування','Зберегти і вставити знову','Видалити',array('Було змінено %d запис.','Було змінено %d записи.','Було змінено %d записів.'),'Двічі клікніть на значенні щоб змінити його.',array('%d рядок було імпортовано.','%d рядки було імпортовано.','%d рядків було імпортовано.'),'Неможливо вибрати таблицю','редагувати','по спаданню','Зв\'язки','Використовуйте посилання щоб змінити це значення.','Сторінка','остання',array('%d рядок','%d рядки','%d рядків'),'весь результат','Клонувати','Експорт','Імпортувати','Шукати дані в таблицях','Таблиця','Рядків','Змінити тип');break;case"zh":$T=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。',',','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','yes','no','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','选择数据','ltr','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','没有行。','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','降序','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数','编辑全部');break;case"zh-tw":$T=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。',',','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','yes','no','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','選擇資料','ltr','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','沒有行。','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','降冪','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數','編輯全部');break;case"ja":$T=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。',',','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','yes','no','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','時:分:秒','[yyyy].mm.dd','ログアウト','データ','ltr','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','行がありません','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','降順','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数','すべて編集');break;case"ta":$T=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.',',','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'yes','no','$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','த‌க‌வ‌லை தேர்வு செய்','ltr','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','வ‌ரிசை இல்லை.','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','இற‌ங்குமுக‌மான‌','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்','அனைத்தையும் தொகு');break;case"bn":$T=array('তুমি কি নিশ্চিত?','ফাইল আপলোড করা সম্ভব হচ্ছে না।','সর্বাধিক অনুমোদিত ফাইল সাইজ %sB.','ফাইলের কোন অস্তিত্ব নেই।','খালি','প্রকৃত','কোন টেবিল নাই।',',','ভাষা','ব্যবহার','কোন একটা এক্সটেনশন %s ব্যবহার করো।','ফাইল রয়েছে।','ইউজারের টাইপ','সংখ্যা','তারিখ এবং সময়','স্ট্রিং','বাইনারি','নেটওয়ার্ক','জ্যামিতি','তালিকা','সম্পাদক','ইউজারের নাম','পাসওয়ার্ড','লগইন','স্থায়ী লগইন','নতুন বিষয়বস্তু','শেষ পাতা',array('%d বাইট','%d বাইটসমূহ'),'yes','no','$6.$4.$1','খোঁজ','যে কোন স্থানে','সাজানো','সীমা','ক্রিয়া','নির্বাচন','​​ই-মেইল','থেকে','বিষয়','সংযোজন','সংযুক্তি','পাঠাও',array('%d ইমেইল (গুলি) পাঠানো হয়েছে।','%d ইমেইল (গুলি) পাঠানো হয়েছে।'),'এখন','HH:MM:SS','t.m.[jjjj]','লগআউট','তথ্য নির্বাচন করো','ltr','সার্ভার','অবৈধ CSRF টোকেন। ফর্ম আবার পাঠাও।','লগআউট সম্পন্ন হয়েছে।','সেশন সমর্থন সক্রিয় করা আবশ্যক।','সেশানের মেয়াদ শেষ হয়েছে, আবার লগইন করুন।','ভুল পাসওয়ার্ড।','কোন এক্সটেনশান নাই','কোন PHP সমর্থিত এক্সটেনশন (%s) পাওয়া যায় নাই।','খুব বড় POST ডাটা। ডাটা সংক্ষিপ্ত করো অথবা %s কনফিগারেশন নির্দেশ বৃদ্ধি করো','বিষয়বস্তু মুছে ফেলা হয়েছে।','বিষয়বস্তু আপডেট করা হয়েছে।','বিষয়বস্তুসমূহ সংযোজন করা হয়েছে।','সম্পাদনা','কোন সারি নাই।','সংরক্ষণ','সংরক্ষণ করো এবং সম্পাদনা চালিয়ে যাও','সংরক্ষন ও পরবর্তী সংযোজন','মুছে ফেলো','%d টি বিষয়বস্তু প্রভাবিত হয়েছে','কোন মানকে পরিবর্তন করতে এতে ডবল ক্লিক করো।',array('%d টি সারি (সমূহ) ইমপোর্ট করা হয়েছে।','%d টি সারি (সমূহ) ইমপোর্ট করা হয়েছে।'),'টেবিল নির্বাচন করতে অক্ষম','সম্পাদনা','ক্রমহ্রাস','সম্পর্ক','এই মান পরিবর্তনের জন্য সম্পাদনা লিঙ্ক ব্যবহার করো।','পৃষ্ঠা','সর্বশেষ',array('%d সারি','%d সারি সমূহ'),'সম্পূর্ণ ফলাফল','ক্লোন','এক্সপোর্ট','ইমপোর্ট','টেবিলে খোঁজ করো','টেবিল','সারি','সকল সম্পাদনা করো');break;case"ar":$T=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.',',','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','yes','no','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','عرض البيانات','rtl','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','لا توجد نتائج.','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','تنازلي','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر','تعديل الكل');break;case"fa":$T=array('مطمئن هستید؟','قادر به بارگذاري فايل نيستيد',' %sB حداكثر اندازه فايل','فايل وجود ندارد','خالی','اصلی','جدولی وجود ندارد',' ','زبان','استفاده','لطفا یکی از پسوندهای زیر را انتخاب نمائید %s ','فایل موجود است','انواع کاربر','اعداد','تاریخ و زمان','رشته ها','دودویی','شبکه','هندسه','لیستها','ویرایشگر','نام كاربري','كلمه عبور','ورود','','آیتم جدید','صفحه آخر',array('%d بایت','%d بایت'),'yes','no','$1-$3-$5','جستجو','هرکجا','مرتب کردن','محدودیت','عملیات','انتخاب','پست الکترونیک','فرستنده','موضوع','درج','پیوست ها','ارسال',array('%d ایمیل ارسال شد','%d ایمیل ارسال شد'),'اکنون','HH:MM:SS','[yyyy]-mm-dd','خروج','انتخاب داده','rtl','سرور','نامعتبر است. دوباره سعی کنید Token CSRF','با موفقيت خارج شديد','پشتيباني از نشست بايستي فعال گردد','نشست پايان يافته، لطفا دوباره وارد شويد','اعتبار سنجي نامعتبر','پسوند نامعتبر',' پسوند پی اچ پی در دسترس نیست (%s) تعداد','حجم داده ارسالي برزگ است. حجم داده كاهش دهيد و يا مقدار %s را در پيكربندي افزايش دهيد.','آیتم حذف شد','آیتم بروز رسانی شد','%s آیتم درج شد','ویرایش','سطری وجود ندارد','ذخیره','ذخیره و ادامه ویرایش','ذخیره و درج بعدی','حذف',array('%d آیتم متاثر شد','%d آیتم متاثر شد'),'روی مقدار دوبار کلیک کنید تا آنرا ویرایش کنید',array('%d سطر وارد شد','%d سطر وارد شد'),'قادر به انتخاب جدول نیستید','ویرایش','نزولی','رابطه ها','از لینک ویرایش برای ویرایش این مقدار استفاده کنید','صفحه','آخری',array('%d سطر','%d سطر'),'همه نتایج','تکثیر','استخراج','وارد کردن','جستجوی داده در جدول','جدول','سطرها','ویرایش نوع');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$ad=array_search("",$c->operators);if($ad!==false)unset($c->operators[$ad]);}function
dsn($Za,$V,$F,$pb='auth_error'){set_exception_handler($pb);parent::__construct($Za,$V,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$de=false){$H=parent::query($G);$this->error="";if(!$H){$lb=$this->errorInfo();$this->error=$lb[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H)$H=$this->_result;if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$Xa=array();$Xa["sqlite"]="SQLite 3";$Xa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$bd=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($xb){$this->_link=new
SQLite3($xb);$pe=$this->_link->version();$this->server_info=$pe["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($O){return(is_utf8($O)?"'".$this->_link->escapeString($O)."'":"x'".reset(unpack('H*',$O))."'");}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($xb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($xb);}function
query($G,$de=false){$_c=($de?"unbufferedQuery":"query");$H=@$this->_link->$_c($G,SQLITE_BOTH,$n);$this->error="";if(!$H){$this->error=$n;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($O){return"'".sqlite_escape_string($O)."'";}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$x=>$X)$I[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$B=$this->_result->fieldName($this->_offset++);$Xc='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Xc\\.)?$Xc\$~",$B,$_)){$P=($_[3]!=""?$_[3]:idf_unescape($_[2]));$B=($_[5]!=""?$_[5]:idf_unescape($_[4]));}return(object)array("name"=>$B,"orgname"=>$B,"orgtable"=>$P,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($xb){$this->dsn(DRIVER.":$xb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($xb){if(is_readable($xb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$xb)?$xb:dirname($_SERVER["SCRIPT_FILENAME"])."/$xb")." AS a")){$this->Min_SQLite($xb);return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$y,$D=0,$xd=" "){return" $G$Z".($y!==null?$xd."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){global$i;return($i->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1):" $G$Z");}function
db_collation($m,$Fa){global$i;return$i->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($B=""){global$i;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($B!=""?" AND name = ".q($B):""))as$J){$J["Oid"]="t";$J["Auto_increment"]="";$J["Rows"]=$i->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($B!=""?$I[$B]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){global$i;return!$i->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($P){$I=array();foreach(get_rows("PRAGMA table_info(".table($P).")")as$J){$U=strtolower($J["type"]);$Ra=$J["dflt_value"];$I[$J["name"]]=array("field"=>$J["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Ra,$_)?str_replace("''","'",$_[1]):($Ra=="NULL"?null:$Ra)),"null"=>!$J["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$J["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);}return$I;}function
indexes($P,$j=null){$I=array();$cd=array();foreach(fields($P)as$o){if($o["primary"])$cd[]=$o["field"];}if($cd)$I[""]=array("type"=>"PRIMARY","columns"=>$cd,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($P).")")as$J){if(!ereg("^sqlite_",$J["name"])){$I[$J["name"]]["type"]=($J["unique"]?"UNIQUE":"INDEX");$I[$J["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($J["name"]).")")as$qd)$I[$J["name"]]["columns"][]=$qd["name"];}}return$I;}function
foreign_keys($P){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($P).")")as$J){$q=&$I[$J["id"]];if(!$q)$q=$J;$q["source"][]=$J["from"];$q["target"][]=$J["to"];}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$i->result("SELECT sql FROM sqlite_master WHERE name = ".q($B))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$i;return
h($i->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($B){global$i;$tb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($tb)\$~",$B)){$i->error=lang(10,str_replace("|",", ",$tb));return
false;}return
true;}function
create_database($m,$f){global$i;if(file_exists($m)){$i->error=lang(11);return
false;}if(!check_sqlite_name($m))return
false;$z=new
Min_SQLite($m);$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$i;$i->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$i->error=lang(11);return
false;}}return
true;}function
rename_database($B,$f){global$i;if(!check_sqlite_name($B))return
false;$i->Min_SQLite(":memory:");$i->error=lang(11);return@rename(DB,$B);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($P,$B,$p,$Bb,$Ia,$hb,$f,$sa,$Wc){$me=($P==""||$Bb);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$me=true;break;}}$d=array();$Rc=array();$dd=false;foreach($p
as$o){if($o[1]){if($o[1][6])$dd=true;$d[]=($me?"  ":"ADD ").implode($o[1]);if($o[0]!="")$Rc[$o[0]]=$o[1][0];}}if($me){if($P!=""){queries("BEGIN");foreach(foreign_keys($P)as$q){$h=array();foreach($q["source"]as$g){if(!$Rc[$g])continue
2;$h[]=$Rc[$g];}$Bb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).") ON DELETE $q[on_delete] ON UPDATE $q[on_update]";}$w=array();foreach(indexes($P)as$gc=>$v){$h=array();foreach($v["columns"]as$g){if(!$Rc[$g])continue
2;$h[]=$Rc[$g];}$h="(".implode(", ",$h).")";if($v["type"]!="PRIMARY")$w[]=array($v["type"],$gc,$h);elseif(!$dd)$Bb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Bb);if(!queries("CREATE TABLE ".table($P!=""?"adminer_$B":$B)." (\n".implode(",\n",$d)."\n)"))return
false;if($P!=""){if($Rc&&!queries("INSERT INTO ".table("adminer_$B")." (".implode(", ",$Rc).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Rc)))." FROM ".table($P)))return
false;$ae=array();foreach(triggers($P)as$Zd=>$Qd){$Yd=trigger($Zd);$ae[]="CREATE TRIGGER ".idf_escape($Zd)." ".implode(" ",$Qd)." ON ".table($B)."\n$Yd[Statement]";}if(!queries("DROP TABLE ".table($P)))return
false;queries("ALTER TABLE ".table("adminer_$B")." RENAME TO ".table($B));if(!alter_indexes($B,$w))return
false;foreach($ae
as$Yd){if(!queries($Yd))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($P)." $X"))return
false;}if($P!=$B&&!queries("ALTER TABLE ".table($P)." RENAME TO ".table($B)))return
false;}if($sa)queries("UPDATE sqlite_sequence SET seq = $sa WHERE name = ".q($B));return
true;}function
alter_indexes($P,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P)." $X[2]"))return
false;}return
true;}function
truncate_tables($R){return
apply_queries("DELETE FROM",$R);}function
drop_views($re){return
apply_queries("DROP VIEW",$re);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
move_tables($R,$re,$S){return
false;}function
trigger($B){global$i;if($B=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$i->result("SELECT sql FROM sqlite_master WHERE name = ".q($B)),$_);return
array("Timing"=>strtoupper($_[1]),"Event"=>strtoupper($_[2]),"Trigger"=>$B,"Statement"=>$_[3]);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$J["sql"],$_);$I[$J["name"]]=array($_[1],$_[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$cd){return
queries("REPLACE INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ROWID()");}function
explain($i,$G){return$i->query("EXPLAIN $G");}function
found_rows($Q,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($td){return
true;}function
create_sql($P,$sa){global$i;return$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($P));}function
truncate_sql($P){return"DELETE FROM ".table($P);}function
use_sql($k){}function
trigger_sql($P,$Fd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P)));}function
show_variables(){global$i;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$I[$x]=$i->result("PRAGMA $x");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$Mc){list($x,$X)=explode("=",$Mc,2);$I[$x]=$X;}return$I;}function
support($vb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$vb);}$ec="sqlite";$ce=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ed=array_keys($ce);$je=array();$Lc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Kb=array("hex","length","lower","round","unixepoch","upper");$Nb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Xa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$bd=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($kb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($M,$V,$F){global$c;$m=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$pe=pg_version($this->_link);$this->server_info=$pe["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($O){return"'".pg_escape_string($this->_link,$O)."'";}function
select_db($k){global$c;if($k==$c->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$de=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
pg_fetch_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$g);$I->name=pg_field_name($this->_result,$g);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$g);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($M,$V,$F){global$c;$m=$c->database();$O="pgsql:host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$O dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($k){global$c;return($c->database()==$k);}function
close(){}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$c;$i=new
Min_DB;$Oa=$c->credentials();if($i->connect($Oa[0],$Oa[1],$Oa[2])){if($i->server_info>=9)$i->query("SET application_name = 'Adminer'");return$i;}return$i->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($G,$Z,$y,$D=0,$xd=" "){return" $G$Z".($y!==null?$xd."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$Fa){global$i;return$i->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($l){return
array();}function
table_status($B=""){$I=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($B!=""?" AND relname = ".q($B):""))as$J)$I[$J["Name"]]=$J;return($B!=""?$I[$B]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($P)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){ereg('(.*)(\\((.*)\\))?',$J["full_type"],$_);list(,$J["type"],,$J["length"])=$_;$J["full_type"]=$J["type"].($J["length"]?"($J[length])":"");$J["null"]=($J["attnotnull"]=="f");$J["auto_increment"]=eregi("^nextval\\(",$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$J["default"],$_))$J["default"]=($_[1][0]=="'"?idf_unescape($_[1]):$_[1]);$I[$J["field"]]=$J;}return$I;}function
indexes($P,$j=null){global$i;if(!is_object($j))$j=$i;$I=array();$Md=$j->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($P));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Md AND attnum > 0",$j);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Md AND ci.oid = i.indexrelid",$j)as$J){$I[$J["relname"]]["type"]=($J["indisprimary"]=="t"?"PRIMARY":($J["indisunique"]=="t"?"UNIQUE":"INDEX"));$I[$J["relname"]]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Yb)$I[$J["relname"]]["columns"][]=$h[$Yb];$I[$J["relname"]]["lengths"]=array();}return$I;}function
foreign_keys($P){global$Gc;$I=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($P)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$_)){$J['source']=array_map('trim',explode(',',$_[1]));$J['table']=$_[2];if(preg_match('~(.+)\.(.+)~',$_[2],$sc)){$J['ns']=$sc[1];$J['table']=$sc[2];}$J['target']=array_map('trim',explode(',',$_[3]));$J['on_delete']=(preg_match("~ON DELETE ($Gc)~",$_[4],$sc)?$sc[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($Gc)~",$_[4],$sc)?$sc[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($B){global$i;return
array("select"=>$i->result("SELECT pg_get_viewdef(".q($B).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$i;$I=h($i->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$_))$I=$_[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($_[3]).'})(.*)~','\\1<b>\\2</b>',$_[2]).$_[4];return
nl_br($I);}function
exact_value($X){return
q($X);}function
create_database($m,$f){return
queries("CREATE DATABASE ".idf_escape($m).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($l){global$i;$i->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($B,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($B));}function
auto_increment(){return"";}function
alter_table($P,$B,$p,$Bb,$Ia,$hb,$f,$sa,$Wc){$d=array();$id=array();foreach($p
as$o){$g=idf_escape($o[0]);$X=$o[1];if(!$X)$d[]="DROP $g";else{$oe=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$d[]=($P!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$id[]="ALTER TABLE ".table($P)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$oe!="")$id[]="COMMENT ON COLUMN ".table($P).".$X[0] IS ".($oe!=""?substr($oe,9):"''");}}$d=array_merge($d,$Bb);if($P=="")array_unshift($id,"CREATE TABLE ".table($B)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($id,"ALTER TABLE ".table($P)."\n".implode(",\n",$d));if($P!=""&&$P!=$B)$id[]="ALTER TABLE ".table($P)." RENAME TO ".table($B);if($P!=""||$Ia!="")$id[]="COMMENT ON TABLE ".table($B)." IS ".q($Ia);if($sa!=""){}foreach($id
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($P,$d){$Ma=array();$Ya=array();foreach($d
as$X){if($X[0]!="INDEX")$Ma[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$Ya[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P)." $X[2]"))return
false;}return((!$Ma||queries("ALTER TABLE ".table($P).implode(",",$Ma)))&&(!$Ya||queries("DROP INDEX ".implode(", ",$Ya))));}function
truncate_tables($R){return
queries("TRUNCATE ".implode(", ",array_map('table',$R)));return
true;}function
drop_views($re){return
queries("DROP VIEW ".implode(", ",array_map('table',$re)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$re,$S){foreach($R
as$P){if(!queries("ALTER TABLE ".table($P)." SET SCHEMA ".idf_escape($S)))return
false;}foreach($re
as$P){if(!queries("ALTER VIEW ".table($P)." SET SCHEMA ".idf_escape($S)))return
false;}return
true;}function
trigger($B){if($B=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$K=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($B));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($P))as$J)$I[$J["trigger_name"]]=array($J["condition_timing"],$J["event_manipulation"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$cd){global$i;$ke=array();$Z=array();foreach($N
as$x=>$X){$ke[]="$x = $X";if(isset($cd[idf_unescape($x)]))$Z[]="$x = $X";}return($Z&&queries("UPDATE ".table($P)." SET ".implode(", ",$ke)." WHERE ".implode(" AND ",$Z))&&$i->affected_rows)||queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
explain($i,$G){return$i->query("EXPLAIN $G");}function
found_rows($Q,$Z){global$i;if(ereg(" rows=([0-9]+)",$i->result("EXPLAIN SELECT * FROM ".idf_escape($Q["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ld))return$ld[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$i;return$i->result("SELECT current_schema()");}function
set_schema($sd){global$i,$ce,$Ed;$I=$i->query("SET search_path TO ".idf_escape($sd));foreach(types()as$U){if(!isset($ce[$U])){$ce[$U]=0;$Ed[lang(12)][]=$U;}}return$I;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($vb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$vb);}$ec="pgsql";$ce=array();$Ed=array();foreach(array(lang(13)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(14)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(15)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(16)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(17)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(18)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$ce+=$X;$Ed[$x]=array_keys($X);}$je=array();$Lc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Kb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Xa["oracle"]="Oracle";if(isset($_GET["oracle"])){$bd=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($kb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($M,$V,$F){$this->_link=@oci_new_connect($V,$F,$M,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($k){return
true;}function
query($G,$de=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Min_Result($H);$this->affected_rows=oci_num_rows($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result))return
false;return
oci_result($H->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'OCI-Lob'))$J[$x]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$g);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$g);$I->charsetnr=(ereg("raw|blob|bfile",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($M,$V,$F){$this->dsn("oci:dbname=//$M;charset=AL32UTF8",$V,$F);return
true;}function
select_db($k){return
true;}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$c;$i=new
Min_DB;$Oa=$c->credentials();if($i->connect($Oa[0],$Oa[1],$Oa[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$y,$D=0,$xd=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($y+$D).") WHERE rnum > $D":($y!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($y+$D):" $G$Z"));}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$Fa){global$i;return$i->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($l){return
array();}function
table_status($B=""){$I=array();$ud=q($B);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($B!=""?" AND table_name = $ud":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($B!=""?" WHERE view_name = $ud":""))as$J){if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($P)." ORDER BY column_id")as$J){$U=$J["DATA_TYPE"];$nc="$J[DATA_PRECISION],$J[DATA_SCALE]";if($nc==",")$nc=$J["DATA_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$U.($nc?"($nc)":""),"type"=>strtolower($U),"length"=>$nc,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($P)."
ORDER BY uc.constraint_type, uic.column_position",$j)as$J){$I[$J["INDEX_NAME"]]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$J["INDEX_NAME"]]["columns"][]=$J["COLUMN_NAME"];$I[$J["INDEX_NAME"]]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);}return$I;}function
view($B){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($B));return
reset($K);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$i;return
h($i->error);}function
exact_value($X){return
q($X);}function
explain($i,$G){$i->query("EXPLAIN PLAN FOR $G");return$i->query("SELECT * FROM plan_table");}function
found_rows($Q,$Z){}function
alter_table($P,$B,$p,$Bb,$Ia,$hb,$f,$sa,$Wc){$d=$Ya=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($P)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$d[]=($P!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($P!=""?")":"");else$Ya[]=idf_escape($o[0]);}if($P=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($P)."\n".implode("\n",$d)))&&(!$Ya||queries("ALTER TABLE ".table($P)." DROP (".implode(", ",$Ya).")"))&&($P==$B||queries("ALTER TABLE ".table($P)." RENAME TO ".table($B)));}function
foreign_keys($P){return
array();}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($re){return
apply_queries("DROP VIEW",$re);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
begin(){return
true;}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$i;return$i->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($td){global$i;return$i->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($td));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
support($vb){return
ereg("view|scheme|processlist|drop_col|variables|status",$vb);}$ec="oracle";$ce=array();$Ed=array();foreach(array(lang(13)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(14)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(15)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(16)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$ce+=$X;$Ed[$x]=array_keys($X);}$je=array();$Lc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Kb=array("length","lower","round","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Xa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$bd=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n)$this->error.="$n[message]\n";$this->error=rtrim($this->error);}function
connect($M,$V,$F){$this->_link=@sqlsrv_connect($M,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$Zb=sqlsrv_server_info($this->_link);$this->server_info=$Zb['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($k){return$this->query("USE $k");}function
query($G,$de=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'DateTime'))$J[$x]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$o["Name"];$I->orgname=$o["Name"];$I->type=($o["Type"]==1?254:0);return$I;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($M,$V,$F){$this->_link=@mssql_connect($M,$V,$F);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($G,$de=false){$H=mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$c;$i=new
Min_DB;$Oa=$c->credentials();if($i->connect($Oa[0],$Oa[1],$Oa[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($G,$Z,$y,$D=0,$xd=" "){return($y!==null?" TOP (".($y+$D).")":"")." $G$Z";}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$Fa){global$i;return$i->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$i;$I=array();foreach($l
as$m){$i->select_db($m);$I[$m]=$i->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($B=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($B!=""?" AND name = ".q($B):""))as$J){if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="VIEW";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($P))as$J){$U=$J["type"];$nc=(ereg("char|binary",$U)?$J["max_length"]:($U=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$U.($nc?"($nc)":""),"type"=>$U,"length"=>$nc,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($P),$j)as$J){$I[$J["name"]]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$J["name"]]["lengths"]=array();$I[$J["name"]]["columns"][$J["key_ordinal"]]=$J["column_name"];}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$i->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($B))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$I[ereg_replace("_.*","",$f)][]=$f;return$I;}function
information_schema($m){return
false;}function
error(){global$i;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$i->error)));}function
exact_value($X){return
q($X);}function
create_database($m,$f){return
queries("CREATE DATABASE ".idf_escape($m).(eregi('^[a-z0-9_]+$',$f)?" COLLATE $f":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($B,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($B));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($P,$B,$p,$Bb,$Ia,$hb,$f,$sa,$Wc){$d=array();foreach($p
as$o){$g=idf_escape($o[0]);$X=$o[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$d["ADD"][]="\n  ".implode("",$X).($P==""?substr($Bb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($P).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($P=="")return
queries("CREATE TABLE ".table($B)." (".implode(",",(array)$d["ADD"])."\n)");if($P!=$B)queries("EXEC sp_rename ".q(table($P)).", ".q($B));if($Bb)$d[""]=$Bb;foreach($d
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($B)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($P,$d){$v=array();$Ya=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Ya[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($P);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P):"ALTER TABLE ".table($P)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Ya||queries("ALTER TABLE ".table($P)." DROP ".implode(", ",$Ya)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$cd){$ke=array();$Z=array();foreach($N
as$x=>$X){$ke[]="$x = $X";if(isset($cd[idf_unescape($x)]))$Z[]="$x = $X";}return
queries("MERGE ".table($P)." USING (VALUES(".implode(", ",$N).")) AS source (c".implode(", c",range(1,count($N))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ke)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).");");}function
last_id(){global$i;return$i->result("SELECT SCOPE_IDENTITY()");}function
explain($i,$G){$i->query("SET SHOWPLAN_ALL ON");$I=$i->query($G);$i->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($Q,$Z){}function
foreign_keys($P){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($P))as$J){$q=&$I[$J["FK_NAME"]];$q["table"]=$J["PKTABLE_NAME"];$q["source"][]=$J["FKCOLUMN_NAME"];$q["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($re){return
queries("DROP VIEW ".implode(", ",array_map('table',$re)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$re,$S){return
apply_queries("ALTER SCHEMA ".idf_escape($S)." TRANSFER",array_merge($R,$re));}function
trigger($B){if($B=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($B));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);return$I;}function
triggers($P){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($P))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$i;if($_GET["ns"]!="")return$_GET["ns"];return$i->result("SELECT SCHEMA_NAME()");}function
set_schema($sd){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($vb){return
ereg('^(scheme|trigger|view|drop_col)$',$vb);}$ec="mssql";$ce=array();$Ed=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(14)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(15)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(16)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$ce+=$X;$Ed[$x]=array_keys($X);}$je=array();$Lc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Kb=array("len","lower","round","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Xa=array("server"=>"MySQL")+$Xa;if(!defined("DRIVER")){$bd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$V,$F){mysqli_report(MYSQLI_REPORT_OFF);list($Sb,$Zc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Sb:ini_get("mysqli.default_host")),($M.$V!=""?$V:ini_get("mysqli.default_user")),($M.$V.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($Zc)?$Zc:ini_get("mysqli.default_port")),(!is_numeric($Zc)?$Zc:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$o];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$V,$F){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$V"!=""?$V:ini_get("mysql.default_user")),("$M$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($G,$de=false){$H=@($de?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$V,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$V,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($G,$de=false){$this->setAttribute(1000,!$de);return
parent::query($G,$de);}}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$c;$i=new
Min_DB;$Oa=$c->credentials();if($i->connect($Oa[0],$Oa[1],$Oa[2])){$i->query("SET sql_quote_show_create = 1, autocommit = 1");return$i;}$I=$i->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($rd=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$rd;return$I;}function
get_databases($Ab=true){global$i;$I=&get_session("dbs");if($I===null){if($Ab){restart_session();ob_flush();flush();}$I=get_vals($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$Z,$y,$D=0,$xd=" "){return" $G$Z".($y!==null?$xd."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$Fa){global$i;$I=null;$Ma=$i->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ma,$_))$I=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ma,$_))$I=$Fa[$_[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($l){$I=array();foreach($l
as$m)$I[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$I;}function
table_status($B=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Rows"]))$J["Comment"]="";if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return!isset($Q["Rows"]);}function
fk_support($Q){return
eregi("InnoDB|IBMDB2I",$Q["Engine"]);}function
fields($P){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($P))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$_);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($J["Default"]!=""||ereg("char",$_[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$_)?$_[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($P),$j)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($P){global$i,$Gc;static$Xc='`(?:[^`]|``)+`';$I=array();$Na=$i->result("SHOW CREATE TABLE ".table($P),1);if($Na){preg_match_all("~CONSTRAINT ($Xc) FOREIGN KEY \\(((?:$Xc,? ?)+)\\) REFERENCES ($Xc)(?:\\.($Xc))? \\(((?:$Xc,? ?)+)\\)(?: ON DELETE ($Gc))?(?: ON UPDATE ($Gc))?~",$Na,$tc,PREG_SET_ORDER);foreach($tc
as$_){preg_match_all("~$Xc~",$_[2],$_d);preg_match_all("~$Xc~",$_[5],$S);$I[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$_d[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$x=>$X)asort($I[$x]);return$I;}function
information_schema($m){global$i;return($i->server_info>=5&&$m=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
error_line(){global$i;if(ereg(' at line ([0-9]+)$',$i->error,$ld))return$ld[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($m,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($m).($f?" COLLATE ".q($f):""));}function
drop_databases($l){set_session("dbs",null);return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($B,$f){if(create_database($B,$f)){$md=array();foreach(tables_list()as$P=>$U)$md[]=table($P)." TO ".idf_escape($B).".".table($P);if(!$md||queries("RENAME TABLE ".implode(", ",$md))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$ta="";break;}if($v["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($P,$B,$p,$Bb,$Ia,$hb,$f,$sa,$Wc){$d=array();foreach($p
as$o)$d[]=($o[1]?($P!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($P!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$d=array_merge($d,$Bb);$Cd="COMMENT=".q($Ia).($hb?" ENGINE=".q($hb):"").($f?" COLLATE ".q($f):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$Wc;if($P=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$d)."\n) $Cd");if($P!=$B)$d[]="RENAME TO ".table($B);$d[]=$Cd;return
queries("ALTER TABLE ".table($P)."\n".implode(",\n",$d));}function
alter_indexes($P,$d){foreach($d
as$x=>$X)$d[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($P).implode(",",$d));}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($re){return
queries("DROP VIEW ".implode(", ",array_map('table',$re)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$re,$S){$md=array();foreach(array_merge($R,$re)as$P)$md[]=table($P)." TO ".idf_escape($S).".".table($P);return
queries("RENAME TABLE ".implode(", ",$md));}function
copy_tables($R,$re,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($R
as$P){$B=($S==DB?table("copy_$P"):idf_escape($S).".".table($P));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($P))||!queries("INSERT INTO $B SELECT * FROM ".table($P)))return
false;}foreach($re
as$P){$B=($S==DB?table("copy_$P"):idf_escape($S).".".table($P));$qe=view($P);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $qe[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$U){global$i,$ib,$bc,$ce;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$be="((".implode("|",array_merge(array_keys($ce),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Xc="\\s*(".($U=="FUNCTION"?"":$bc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$be";$Ma=$i->result("SHOW CREATE $U ".idf_escape($B),2);preg_match("~\\(((?:$Xc\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$be\\s+":"")."(.*)~is",$Ma,$_);$p=array();preg_match_all("~$Xc\\s*,?~is",$_[1],$tc,PREG_SET_ORDER);foreach($tc
as$Uc){$B=str_replace("``","`",$Uc[2]).$Uc[3];$p[]=array("field"=>$B,"type"=>strtolower($Uc[5]),"length"=>preg_replace_callback("~$ib~s",'normalize_enum',$Uc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Uc[8] $Uc[7]"))),"full_type"=>$Uc[4],"inout"=>strtoupper($Uc[1]),"collation"=>strtolower($Uc[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$_[11]);return
array("fields"=>$p,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($P,$N,$cd){foreach($N
as$x=>$X)$N[$x]="$x = $X";$ke=implode(", ",$N);return
queries("INSERT INTO ".table($P)." SET $ke ON DUPLICATE KEY UPDATE $ke");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$G){return$i->query("EXPLAIN $G");}function
found_rows($Q,$Z){return($Z||$Q["Engine"]!="InnoDB"?null:$Q["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($sd){return
true;}function
create_sql($P,$sa){global$i;$I=$i->result("SHOW CREATE TABLE ".table($P),1);if(!$sa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($P){return"TRUNCATE ".table($P);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($P,$Fd){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_")),null,"-- ")as$J)$I.="\n".($Fd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($vb){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$vb);}$ec="sql";$ce=array();$Ed=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(14)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(15)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(16)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("enum"=>65535,"set"=>64),)as$x=>$X){$ce+=$X;$Ed[$x]=array_keys($X);}$je=array("unsigned","zerofill","unsigned zerofill");$Lc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Kb=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Nb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.5.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(20)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$i;$l=$this->databases(false);return(!$l?$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$l[(information_schema($l[0])?1:0)]);}function
databases($Ab=true){return
get_databases($Ab);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(21),'<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(23)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($qc,$F){global$i;$i->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Kd){return
h($Kd["Comment"]!=""?$Kd["Comment"]:$Kd["Name"]);}function
fieldName($o,$Pc=0){return
h($o["comment"]!=""?$o["comment"]:$o["field"]);}function
selectLinks($Kd,$N=""){$b=$Kd["Name"];if($N!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$N).'">'.lang(25)."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(26)."'>&gt;&gt;</a>\n";}function
foreignKeys($P){return
foreign_keys($P);}function
backwardKeys($P,$Jd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($P)."
ORDER BY ORDINAL_POSITION",null,"")as$J)$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];foreach($I
as$x=>$X){$B=$this->tableName(table_status($x));if($B!=""){$ud=preg_quote($Jd);$xd="(:|\\s*-)?\\s+";$I[$x]["name"]=(preg_match("(^$ud$xd(.+)|^(.+?)$xd$ud\$)iu",$B,$_)?$_[2].$_[3]:$B);}else
unset($I[$x]);}return$I;}function
backwardKeysPrint($wa,$J){foreach($wa
as$P=>$va){foreach($va["keys"]as$Ga){$z=ME.'select='.urlencode($P);$s=0;foreach($Ga
as$g=>$X)$z.=where_link($s++,$g,$J[$X]);echo"<a href='".h($z)."'>".h($va["name"])."</a>";$z=ME.'edit='.urlencode($P);foreach($Ga
as$g=>$X)$z.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($J[$X]);echo"<a href='".h($z)."' title='".lang(25)."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($P){foreach(fields($P)as$o){if(ereg("varchar|character varying",$o["type"]))return
idf_escape($o["field"]);}return"";}function
rowDescriptions($K,$Db){$I=$K;foreach($K[0]as$x=>$X){if(list($P,$t,$B)=$this->_foreignColumn($Db,$x)){$Vb=array();foreach($K
as$J)$Vb[$J[$x]]=exact_value($J[$x]);$Ta=$this->_values[$P];if(!$Ta)$Ta=get_key_vals("SELECT $t, $B FROM ".table($P)." WHERE $t IN (".implode(", ",$Vb).")");foreach($K
as$A=>$J){if(isset($J[$x]))$I[$A][$x]=(string)$Ta[$J[$x]];}}}return$I;}function
selectVal($X,$z,$o){$I=($X===null?"&nbsp;":$X);if(ereg('blob|bytea',$o["type"])&&!is_utf8($X)){$I=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$I="<img src='$z' alt='$I'>";}if(like_bool($o)&&$I!="&nbsp;")$I=($X?lang(28):lang(29));if($z)$I="<a href='$z'>$I</a>";if(!$z&&!like_bool($o)&&ereg('int|float|double|decimal',$o["type"]))$I="<div class='number'>$I</div>";elseif(ereg('date',$o["type"]))$I="<div class='datetime'>$I</div>";return$I;}function
editVal($X,$o){if(ereg('date|timestamp',$o["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return(ereg("binary",$o["type"])?reset(unpack("H*",$X)):$X);}function
selectColumnsPrint($L,$h){}function
selectSearchPrint($Z,$h,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$hc=array();foreach($Z
as$x=>$X)$hc[$X["col"]]=$x;$s=0;$p=fields($_GET["select"]);foreach($h
as$B=>$Sa){$o=$p[$B];if(ereg("enum",$o["type"])||like_bool($o)){$x=$hc[$B];$s--;echo"<div>".h($Sa)."<input type='hidden' name='where[$s][col]' value='".h($B)."'>:",(like_bool($o)?" <select name='where[$s][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$x]["val"],true)."</select>":enum_input("checkbox"," name='where[$s][val][]'",$o,(array)$Z[$x]["val"],($o["null"]?0:null))),"</div>\n";unset($h[$B]);}elseif(is_array($Nc=$this->_foreignKeyOptions($_GET["select"],$B))){if($p[$B]["null"])$Nc[0]='('.lang(4).')';$x=$hc[$B];$s--;echo"<div>".h($Sa)."<input type='hidden' name='where[$s][col]' value='".h($B)."'><input type='hidden' name='where[$s][op]' value='='>: <select name='where[$s][val]'>".optionlist($Nc,$Z[$x]["val"],true)."</select></div>\n";unset($h[$B]);}}$s=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$s][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators,$X["op"]),"<input name='where[$s][val]' value='".h($X["val"])."'></div>\n";$s++;}}echo"<div><select name='where[$s][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators),"<input name='where[$s][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Pc,$h,$w){$Qc=array();foreach($w
as$x=>$v){$Pc=array();foreach($v["columns"]as$X)$Pc[]=$h[$X];if(count(array_filter($Pc,'strlen'))>1&&$x!="PRIMARY")$Qc[$x]=implode(", ",$Pc);}if($Qc){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Qc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","30","100"),$y),"</div></fieldset>\n";}function
selectLengthPrint($Od){}function
selectActionPrint($w){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($eb,$h){if($eb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($eb)==1?'<input type="hidden" name="email_field" value="'.h(key($eb)).'">':html_select("email_field",$eb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$w){return
array(array(),array());}function
selectSearchProcess($p,$w){$I=array();foreach((array)$_GET["where"]as$x=>$Z){$Ea=$Z["col"];$Jc=$Z["op"];$X=$Z["val"];if(($x<0?"":$Ea).$X!=""){$Ja=array();foreach(($Ea!=""?array($Ea=>$p[$Ea]):$p)as$B=>$o){if($Ea!=""||is_numeric($X)||!ereg('int|float|double|decimal',$o["type"])){$B=idf_escape($B);if($Ea!=""&&$o["type"]=="enum")$Ja[]=(in_array(0,$X)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$X)).")";else{$Pd=ereg('char|text|enum|set',$o["type"]);$Y=$this->processInput($o,(!$Jc&&$Pd&&ereg('^[^%]+$',$X)?"%$X%":$X));$Ja[]=$B.($Y=="NULL"?" IS".($Jc==">="?" NOT":"")." $Y":(in_array($Jc,$this->operators)||$Jc=="="?" $Jc $Y":($Pd?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($x<0&&$X=="0")$Ja[]="$B IS NULL";}}}$I[]=($Ja?"(".implode(" OR ",$Ja).")":"0");}}return$I;}function
selectOrderProcess($p,$w){$Xb=$_GET["index_order"];if($Xb!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Xb!=""?array($w[$Xb]):$w)as$v){if($Xb!=""||$v["type"]=="INDEX"){$Sa=false;foreach($v["columns"]as$X){if(ereg('date|timestamp',$p[$X]["type"])){$Sa=true;break;}}$I=array();foreach($v["columns"]as$X)$I[]=idf_escape($X).($Sa?" DESC":"");return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Db){if($_POST["email_append"])return
true;if($_POST["email"]){$wd=0;if($_POST["all"]||$_POST["check"]){$o=idf_escape($_POST["email_field"]);$Gd=$_POST["email_subject"];$yc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Gd.$yc",$tc);$K=get_rows("SELECT DISTINCT $o".($tc[1]?", ".implode(", ",array_map('idf_escape',array_unique($tc[1]))):"")." FROM ".table($_GET["select"])." WHERE $o IS NOT NULL AND $o != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$p=fields($_GET["select"]);foreach($this->rowDescriptions($K,$Db)as$J){$nd=array('{\\'=>'{');foreach($tc[1]as$X)$nd['{$'."$X}"]=$this->editVal($J[$X],$p[$X]);$db=$J[$_POST["email_field"]];if(is_mail($db)&&send_mail($db,strtr($Gd,$nd),strtr($yc,$nd),$_POST["email_from"],$_FILES["email_files"]))$wd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$wd));}return
false;}function
messageQuery($G){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($o){$I=array();if($o["null"]&&ereg('blob',$o["type"]))$I["NULL"]=lang(4);$I[""]=($o["null"]||$o["auto_increment"]||like_bool($o)?"":"*");if(ereg('date|time',$o["type"]))$I["now"]=lang(44);if(eregi('_(md5|sha1)$',$o["field"],$_))$I[]=strtolower($_[1]);return$I;}function
editInput($P,$o,$ra,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ra value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ra,$o,($Y||isset($_GET["select"])?$Y:0),($o["null"]?"":null));$Nc=$this->_foreignKeyOptions($P,$o["field"],$Y);if($Nc!==null)return(is_array($Nc)?"<select$ra>".optionlist($Nc,$Y,true)."</select>":"<input value='".h($Y)."'$ra class='hidden'><input value='".h($Nc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($P)."&field=".urlencode($o["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($o))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$ra>";$Rb="";if(ereg('time',$o["type"]))$Rb=lang(45);if(ereg('date|timestamp',$o["type"]))$Rb=lang(46).($Rb?" [$Rb]":"");if($Rb)return"<input value='".h($Y)."'$ra> ($Rb)";if(eregi('_(md5|sha1)$',$o["field"]))return"<input type='password' value='".h($Y)."'$ra>";return'';}function
processInput($o,$Y,$r=""){if($r=="now")return"$r()";$I=$Y;if(ereg('date|timestamp',$o["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$_))$I=($_["p1"]!=""?$_["p1"]:($_["p2"]!=""?($_["p2"]<70?20:19).$_["p2"]:gmdate("Y")))."-$_[p3]$_[p4]-$_[p5]$_[p6]".end($_);$I=($o["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$I:q($I));if($Y==""&&($o["null"]||!ereg('char|text',$o["type"]))&&!like_bool($o))$I="NULL";elseif(ereg('^(md5|sha1)$',$r))$I="$r($I)";if(ereg("binary",$o["type"]))$I="unhex($I)";return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($P,$Fd,$G){global$i;$H=$i->query($G,1);if($H){while($J=$H->fetch_assoc()){if($Fd=="table"){dump_csv(array_keys($J));$Fd="INSERT";}dump_csv($J);}}}function
dumpFilename($Ub){return
friendly_url($Ub);}function
dumpHeaders($Ub,$Bc=false){$rb="csv";header("Content-Type: text/csv; charset=utf-8");return$rb;}function
homepage(){return
true;}function
navigation($Ac){global$ba,$Vd;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ac=="auth"){$_b=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$F){if($F!==null){if($_b){echo"<p id='logins' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";$_b=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'">
<input type="hidden" name="token" value="',$Vd,'">
</p>
</form>
';if($Ac!="db"&&$Ac!="ns"){$Q=table_status();if(!$Q)echo"<p class='message'>".lang(6)."\n";else$this->tablesPrint($Q);}}}function
tablesPrint($R){echo"<p id='tables' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";foreach($R
as$J){$B=$this->tableName($J);if(isset($J["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".lang(48)."'>$B</a><br>\n";}}function
_foreignColumn($Db,$g){foreach((array)$Db[$g]as$Cb){if(count($Cb["source"])==1){$B=$this->rowDescription($Cb["table"]);if($B!=""){$t=idf_escape($Cb["target"][0]);return
array($Cb["table"],$t,$B);}}}}function
_foreignKeyOptions($P,$g,$Y=null){global$i;if(list($S,$t,$B)=$this->_foreignColumn(column_foreign_keys($P),$g)){$I=&$this->_values[$S];if($I===null){$Q=table_status($S);$I=($Q["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $t, $B FROM ".table($S)." ORDER BY 2"));}if(!$I&&$Y!==null)return$i->result("SELECT $B FROM ".table($S)." WHERE $t = ".q($Y));return$I;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Rd,$n="",$Aa=array(),$Sd=""){global$a,$c,$i,$Xa;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Td=$Rd.($Sd!=""?": ".h($Sd):"");$Ud=strip_tags($Td.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ud,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.5.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.5.1",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.5.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Aa!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Xa[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):lang(50));if($Aa===false)echo"$M\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Aa)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Aa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Aa
as$x=>$X){$Sa=(is_array($X)?$X[1]:$X);if($Sa!="")echo'<a href="'.h(ME."$x=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Sa).'</a> &raquo; ';}}echo"$Rd\n";}}echo"<h2>$Td</h2>\n";restart_session();$le=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$zc=$_SESSION["messages"][$le];if($zc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$zc)."</div>\n";unset($_SESSION["messages"][$le]);}$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;if($n)echo"<div class='error'>$n</div>\n";define("PAGE_HEADER",1);}function
page_footer($Ac=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Ac);echo'</div>
';}function
int32($A){while($A>=2147483648)$A-=4294967296;while($A<=-2147483649)$A+=4294967296;return(int)$A;}function
long2str($W,$te){$rd='';foreach($W
as$X)$rd.=pack('V',$X);if($te)return
substr($rd,0,end($W));return$rd;}function
str2long($rd,$te){$W=array_values(unpack('V*',str_pad($rd,4*ceil(strlen($rd)/4),"\0")));if($te)$W[]=strlen($rd);return$W;}function
xxtea_mx($xe,$we,$Id,$fc){return
int32((($xe>>5&0x7FFFFFF)^$we<<2)+(($we>>3&0x1FFFFFFF)^$xe<<4))^int32(($Id^$we)+($fc^$xe));}function
encrypt_string($Dd,$x){if($Dd=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Dd,true);$A=count($W)-1;$xe=$W[$A];$we=$W[0];$hd=floor(6+52/($A+1));$Id=0;while($hd-->0){$Id=int32($Id+0x9E3779B9);$ab=$Id>>2&3;for($Tc=0;$Tc<$A;$Tc++){$we=$W[$Tc+1];$Cc=xxtea_mx($xe,$we,$Id,$x[$Tc&3^$ab]);$xe=int32($W[$Tc]+$Cc);$W[$Tc]=$xe;}$we=$W[0];$Cc=xxtea_mx($xe,$we,$Id,$x[$Tc&3^$ab]);$xe=int32($W[$A]+$Cc);$W[$A]=$xe;}return
long2str($W,false);}function
decrypt_string($Dd,$x){if($Dd=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Dd,false);$A=count($W)-1;$xe=$W[$A];$we=$W[0];$hd=floor(6+52/($A+1));$Id=int32($hd*0x9E3779B9);while($Id){$ab=$Id>>2&3;for($Tc=$A;$Tc>0;$Tc--){$xe=$W[$Tc-1];$Cc=xxtea_mx($xe,$we,$Id,$x[$Tc&3^$ab]);$we=int32($W[$Tc]-$Cc);$W[$Tc]=$we;}$xe=$W[$A];$Cc=xxtea_mx($xe,$we,$Id,$x[$Tc&3^$ab]);$we=int32($W[0]-$Cc);$W[0]=$we;$Id=int32($Id-0x9E3779B9);}return
long2str($W,true);}$i='';$Vd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Yc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$Yc[$x]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];if($e["permanent"]){$x=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"]);$ed=$c->permanentLogin();$Yc[$x]="$x:".base64_encode($ed?encrypt_string($e["password"],$ed):"");cookie("adminer_permanent",implode(" ",$Yc));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($Vd&&$_POST["token"]!=$Vd){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$x)set_session($x,null);$x=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Yc[$x]){unset($Yc[$x]);cookie("adminer_permanent",implode(" ",$Yc));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($Yc&&!$_SESSION["pwds"]){session_regenerate_id();$ed=$c->permanentLogin();foreach($Yc
as$x=>$X){list(,$Da)=explode(":",$X);list($Wa,$M,$V)=array_map('base64_decode',explode("-",$x));$_SESSION["pwds"][$Wa][$M][$V]=decrypt_string(base64_decode($Da),$ed);}}function
auth_error($ob=null){global$i,$c,$Vd;$zd=session_name();$n="";if(!$_COOKIE[$zd]&&$_GET[$zd]&&ini_bool("session.use_only_cookies"))$n=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$zd]||$_GET[$zd])&&!$Vd)$n=lang(54);else{$F=&get_session("pwds");if($F!==null){$n=h($ob?$ob->getMessage():(is_string($i)?$i:lang(55)));$F=null;}}}page_header(lang(23),$n,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(56),lang(57,implode(", ",$bd)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Vd=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$Vd;$n=($_POST?($_POST["token"]==$Vd?"":lang(51)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(58,'"post_max_size"')));$i->select_db($c->database());function
email_header($Pb){return"=?UTF-8?B?".base64_encode($Pb)."?=";}function
send_mail($db,$Gd,$yc,$Jb="",$yb=array()){$jb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$yc=str_replace("\n",$jb,wordwrap(str_replace("\r","","$yc\n")));$_a=uniqid("boundary");$qa="";foreach((array)$yb["error"]as$x=>$X){if(!$X)$qa.="--$_a$jb"."Content-Type: ".str_replace("\n","",$yb["type"][$x]).$jb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$yb["name"][$x])."\"$jb"."Content-Transfer-Encoding: base64$jb$jb".chunk_split(base64_encode(file_get_contents($yb["tmp_name"][$x])),76,$jb).$jb;}$ya="";$Qb="Content-Type: text/plain; charset=utf-8$jb"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$_a--$jb";$ya="--$_a$jb$Qb$jb$jb";$Qb="Content-Type: multipart/mixed; boundary=\"$_a\"";}$Qb.=$jb."MIME-Version: 1.0$jb"."X-Mailer: Adminer Editor".($Jb?$jb."From: ".str_replace("\n","",$Jb):"");return
mail($db,email_header($Gd),$ya.$yc.$qa,$Qb);}function
like_bool($o){return
ereg("bool|(tinyint|bit)\\(1\\)",$o["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$Gc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Xa[DRIVER]=lang(23);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$ke=(isset($_GET["select"])?$_POST["edit"]:$Z);$p=fields($b);foreach($p
as$B=>$o){if(!isset($o["privileges"][$ke?"update":"insert"])||$c->fieldName($o)=="")unset($p[$B]);}if($_POST&&!$n&&!isset($_GET["select"])){$pc=$_POST["referer"];if($_POST["insert"])$pc=($ke?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$pc))$pc=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$pc,lang(59));else{$N=array();foreach($p
as$B=>$o){$X=process_input($o);if($X!==false&&$X!==null)$N[idf_escape($B)]=($ke?"\n".idf_escape($B)." = $X":$X);}if($ke){if(!$N)redirect($pc);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$N),"\nWHERE $Z"),$pc,lang(60));}else{$H=insert_into($b,$N);$lc=($H?last_id():0);queries_redirect($pc,lang(61,($lc?" $lc":"")),$H);}}}$Ld=$c->tableName(table_status($b));page_header(($ke?lang(62):lang(40)),$n,array("select"=>array($b,$Ld)),$Ld);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($p
as$B=>$o){if(isset($o["privileges"]["select"]))$L[]=($_POST["clone"]&&$o["auto_increment"]?"'' AS ":($ec=="sql"&&ereg("enum|set",$o["type"])?"1*".idf_escape($B)." AS ":"")).idf_escape($B);}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".lang(63)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$B=>$o){echo"<tr><th>".$c->fieldName($o);$Ra=$_GET["set"][bracket_escape($B)];$Y=($J!==null?($J[$B]!=""&&$ec=="sql"&&ereg("enum|set",$o["type"])?(is_array($J[$B])?array_sum($J[$B]):+$J[$B]):$J[$B]):(!$ke&&$o["auto_increment"]?"":(isset($_GET["select"])?false:($Ra!==null?$Ra:$o["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$B]:($ke&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if($o["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".lang(64)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ke?lang(65):lang(66))."' title='Ctrl+Shift+Enter'>\n";}echo($ke?"<input type='submit' name='delete' value='".lang(67)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Vd,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$Q=table_status($b);$w=indexes($b);$p=fields($b);$Eb=column_foreign_keys($b);$Fc="";if($Q["Oid"]=="t"){$Fc=($ec=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Fc));}parse_str($_COOKIE["adminer_import"],$ka);$pd=array();$h=array();$Od=null;foreach($p
as$x=>$o){$B=$c->fieldName($o);if(isset($o["privileges"]["select"])&&$B!=""){$h[$x]=html_entity_decode(strip_tags($B));if(ereg('text|lob',$o["type"]))$Od=$c->selectLengthProcess();}$pd+=$o["privileges"];}list($L,$Lb)=$c->selectColumnsProcess($h,$w);$Z=$c->selectSearchProcess($p,$w);$Pc=$c->selectOrderProcess($p,$w);$y=$c->selectLimitProcess();$Jb=($L?implode(", ",$L):($Fc?"$Fc, ":"")."*")."\nFROM ".table($b);$Mb=($Lb&&count($Lb)<count($L)?"\nGROUP BY ".implode(", ",$Lb):"").($Pc?"\nORDER BY ".implode(", ",$Pc):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ge=>$J)echo$i->result("SELECT".limit(idf_escape(key($J))." FROM ".table($b)," WHERE ".where_check($ge).($Z?" AND ".implode(" AND ",$Z):"").($Pc?" ORDER BY ".implode(", ",$Pc):""),1));exit;}if($_POST&&!$n){$ve="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$cd=$ie=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$cd=array_flip($v["columns"]);$ie=($L?$cd:array());break;}}foreach((array)$ie
as$x=>$X){if(in_array(idf_escape($x),$L))unset($ie[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$ie===array()){$ue=$Z;if(is_array($_POST["check"]))$ue[]="($ve)";$G="SELECT $Jb".($ue?"\nWHERE ".implode(" AND ",$ue):"").$Mb;}else{$ee=array();foreach($_POST["check"]as$X)$ee[]="(SELECT".limit($Jb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X).$Mb,1).")";$G=implode(" UNION ALL ",$ee);}$c->dumpData($b,"table",$G);exit;}if(!$c->selectEmailProcess($Z,$Eb)){if($_POST["save"]||$_POST["delete"]){$H=true;$la=0;$G=table($b);$N=array();if(!$_POST["delete"]){foreach($h
as$B=>$X){$X=process_input($p[$B]);if($X!==null){if($_POST["clone"])$N[idf_escape($B)]=($X!==false?$X:idf_escape($B));elseif($X!==false)$N[]=idf_escape($B)." = $X";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($b):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ha="UPDATE";if($_POST["delete"]){$Ha="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ha="INSERT";$G="INTO $G";}if($_POST["all"]||($ie===array()&&$_POST["check"])||count($Lb)<count($L)){$H=queries("$Ha $G".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $ve"));$la=$i->affected_rows;}else{foreach((array)$_POST["check"]as$X){$H=queries($Ha.limit1($G,"\nWHERE ".where_check($X)));if(!$H)break;$la+=$i->affected_rows;}}}$yc=lang(68,$la);if($_POST["clone"]&&$H&&$la==1){$lc=last_id();if($lc)$yc=lang(61," $lc");}queries_redirect(remove_from_uri("page"),$yc,$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(69);else{$H=true;$la=0;foreach($_POST["val"]as$ge=>$J){$N=array();foreach($J
as$x=>$X){$x=bracket_escape($x,1);$N[]=idf_escape($x)." = ".(ereg('char|text',$p[$x]["type"])||$X!=""?$c->processInput($p[$x],$X):"NULL");}$G=table($b)." SET ".implode(", ",$N);$ue=" WHERE ".where_check($ge).($Z?" AND ".implode(" AND ",$Z):"");$H=queries("UPDATE".(count($Lb)<count($L)?" $G$ue":limit1($G,$ue)));if(!$H)break;$la+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(68,$la),$H);}}elseif(is_string($wb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Ga=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$wb,$tc);$la=count($tc[0]);begin();$xd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($tc[0]as$x=>$X){preg_match_all("~((\"[^\"]*\")+|[^$xd]*)$xd~",$X.$xd,$uc);if(!$x&&!array_diff($uc[1],$Ga)){$Ga=$uc[1];$la--;}else{$N=array();foreach($uc[1]as$s=>$Ea)$N[idf_escape($Ga[$s])]=($Ea==""&&$p[$Ga[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ea))));$H=insert_update($b,$N,$cd);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(70,$la),$H);queries("ROLLBACK");}else$n=upload_error($wb);}}$Ld=$c->tableName($Q);page_header(lang(36).": $Ld",$n);session_write_close();$N=null;if(isset($pd["insert"])){$N="";foreach((array)$_GET["where"]as$X){if(count($Eb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$N.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($Q,$N);if(!$h)echo"<p class='error'>".lang(71).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($L,$h);$c->selectSearchPrint($Z,$h,$w);$c->selectOrderPrint($Pc,$h,$w);$c->selectLimitPrint($y);$c->selectLengthPrint($Od);$c->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Hb=$i->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$E=floor(max(0,$Hb-1)/$y);}$G="SELECT".limit((+$y&&$Lb&&count($Lb)<count($L)&&$ec=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Jb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Mb,($y!=""?+$y:null),($E?$y*$E:0),"\n");echo$c->selectQuery($G);$H=$i->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($ec=="mssql")$H->seek($y*$E);$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($E&&$ec=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$Hb=(+$y&&$Lb&&count($Lb)<count($L)?($ec=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".lang(63)."\n";else{$xa=$c->backwardKeys($b,$Ld);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Lb&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(72)."</a>");$Dc=array();$Kb=array();reset($L);$jd=1;foreach($K[0]as$x=>$X){if($x!=$Fc){$X=$_GET["columns"][key($L)];$o=$p[$L?($X?$X["col"]:current($L)):$x];$B=($o?$c->fieldName($o,$jd):"*");if($B!=""){$jd++;$Dc[$x]=$B;$g=idf_escape($x);$Tb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Sa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Tb.($Pc[0]==$g||$Pc[0]==$x||(!$Pc&&count($Lb)<count($L)&&$Lb[0]==$g)?$Sa:'')).'">';echo(!$L||$X?apply_sql_function($X["fun"],$B):h(current($L)))."</a>";echo"<span class='column hidden'>","<a href='".h($Tb.$Sa)."' title='".lang(73)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Kb[$x]=$X["fun"];next($L);}}$oc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$x=>$X)$oc[$x]=max($oc[$x],min(40,strlen(utf8_decode($X))));}}echo($xa?"<th>".lang(74):"")."</thead>\n";foreach($c->rowDescriptions($K,$Eb)as$A=>$J){$fe=unique_array($K[$A],$w);$ge="";foreach($fe
as$x=>$X)$ge.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));echo"<tr".odd().">".(!$Lb&&$L?"":"<td>".checkbox("check[]",substr($ge,1),in_array(substr($ge,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Lb)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$ge)."'>".lang(72)."</a>"));foreach($J
as$x=>$X){if(isset($Dc[$x])){$o=$p[$x];if($X!=""&&(!isset($fb[$x])||$fb[$x]!=""))$fb[$x]=(is_mail($X)?$Dc[$x]:"");$z="";$X=$c->editVal($X,$o);if($X!==null){if(ereg('blob|bytea|raw|file',$o["type"])&&$X!="")$z=h(ME.'download='.urlencode($b).'&field='.urlencode($x).$ge);if($X==="")$X="&nbsp;";elseif(is_utf8($X)){if($Od!=""&&ereg('text|blob',$o["type"]))$X=shorten_utf8($X,max(0,+$Od));else$X=h($X);}if(!$z){foreach((array)$Eb[$x]as$q){if(count($Eb[$x])==1||end($q["source"])==$x){$z="";foreach($q["source"]as$s=>$_d)$z.=where_link($s,$q["target"][$s],$K[$A][$_d]);$z=h(($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$z);if(count($q["source"])==1)break;}}}if($x=="COUNT(*)"){$z=h(ME."select=".urlencode($b));$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$fe))$z.=h(where_link($s++,$W["col"],$W["val"],$W["op"]));}foreach($fe
as$fc=>$W)$z.=h(where_link($s++,$fc,$W));}}if(!$z){if(is_mail($X))$z="mailto:$X";if($gd=is_url($J[$x]))$z=($gd=="http"&&$aa?$J[$x]:"$gd://www.adminer.org/redirect/?url=".urlencode($J[$x]));}$t=h("val[$ge][".bracket_escape($x)."]");$Y=$_POST["val"][$ge][bracket_escape($x)];$Ob=h($Y!==null?$Y:$J[$x]);$rc=strpos($X,"<i>...</i>");$cb=is_utf8($X)&&$K[$A][$x]==$J[$x]&&!$Kb[$x];$Nd=ereg('text|lob',$o["type"]);echo(($_GET["modify"]&&$cb)||$Y!==null?"<td>".($Nd?"<textarea name='$t' cols='30' rows='".(substr_count($J[$x],"\n")+1)."'>$Ob</textarea>":"<input name='$t' value='$Ob' size='$oc[$x]'>"):"<td id='$t' ondblclick=\"".($cb?"selectDblClick(this, event".($rc?", 2":($Nd?", 1":"")).")":"alert('".h(lang(75))."')").";\">".$c->selectVal($X,$z,$o));}}if($xa)echo"<td>";$c->backwardKeysPrint($xa,$K[$A]);echo"</tr>\n";}echo"</table>\n",(!$Lb&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$E){$nb=true;if($_GET["page"]!="last"&&+$y&&count($Lb)>=count($L)&&($Hb>=$y||$E)){$Hb=found_rows($Q,$Z);if($Hb<max(1e4,2*($E+1)*$y)){ob_flush();flush();$Hb=$i->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));}else$nb=false;}echo"<p class='pages'>";if(+$y&&$Hb>$y){$vc=floor(($Hb-1)/$y);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(76)."', '".($E+1)."'), event); return false;\">".lang(76)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($vc,$E+5);$s++)echo
pagination($s,$E);echo($E+5<$vc?" ...":"").($nb?pagination($vc,$E):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(77)."</a>");}echo" (".($nb?"":"~ ").lang(78,$Hb).") ".checkbox("all",1,0,lang(79))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(62),'</legend><div>
<input type="submit" value="',lang(64),'"',($_GET["modify"]?'':' title="'.lang(69).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(62),'">
<input type="submit" name="clone" value="',lang(80),'">
<input type="submit" name="delete" value="',lang(67),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Hb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Fb=$c->dumpFormat();if($Fb){print_fieldset("export",lang(81));$Sc=$c->dumpOutput();echo($Sc?html_select("output",$Sc,$ka["output"])." ":""),html_select("format",$Fb,$ka["format"])," <input type='submit' name='export' value='".lang(81)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(82),!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(82)."'>","<input type='hidden' name='token' value='$Vd'>\n","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($fb,'strlen'),$h);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($P,$t,$B)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$i->query("SELECT $t, $B FROM ".table($P)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$t = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($s=0;$s<10&&($J=$H->fetch_row());$s++)echo"<a href='".h(ME."edit=".urlencode($P)."&where".urlencode("[".bracket_escape(idf_unescape($t))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";if($s==10)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(83).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(84).'<td>'.lang(85)."</thead>\n";foreach(table_status()as$P=>$J){$B=$c->tableName($J);if(isset($J["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$P,in_array($P,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($P)."'>$B</a>";$X=number_format($J["Rows"],0,'.',lang(7));echo"<td align='right'><a href='".h(ME."edit=").urlencode($P)."'>".($J["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();