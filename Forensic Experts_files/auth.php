function trimTrailingSlash(string){if(string!=null){return string.replace(/\/+$/,'');}else{return string;}}
if(!String.prototype.trim){String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,'');};}
ctrHref=trimTrailingSlash('http://www.freevisitorcounters.com'.trim());ctrHref2=trimTrailingSlash('http://www.freevisitorcounters.com'.trim());eInDoc=function(e){while(e=e.parentNode){if(e==document){return true;}}
return false;};lCheck=function(l){if(null!=l&&null!=l.getAttribute('href')&&(ctrHref===''||trimTrailingSlash(l.getAttribute('href').trim())==ctrHref||trimTrailingSlash(l.href.trim())==ctrHref||trimTrailingSlash(l.getAttribute('href').trim())==ctrHref2||trimTrailingSlash(l.href.trim())==ctrHref2)){return true;}
else{return false;}};linkfound=false;window.onload=function(){els=document.getElementsByTagName('a');l=els.length;for(i=0;i<l;i++){el=els[i];if(trimTrailingSlash(el.href)===ctrHref||trimTrailingSlash(el.getAttribute('href'))===ctrHref||trimTrailingSlash(el.href)===ctrHref2||trimTrailingSlash(el.getAttribute('href'))===ctrHref2){linkfound=true;if(el.getAttribute('rel')=='nofollow'||!eInDoc(el)||!lCheck(el)){linkfound=false;}
linktext=el.innerHTML;if(linktext==undefined){linkfound=false;}
else if(linktext.trim()==''){linkfound=false;}
if(el.offsetHeight!=undefined&&el.offsetHeight<8){linkfound=false;}
break;}}
if(linkfound==false){var div=document.createElement('div');div.id='error_3f642038e198976161203a3e1af44e3cf119ab47';div.innerHTML='<a href="https://www.freevisitorcounters.com/en/home/countercode/hashid/?id=3f642038e198976161203a3e1af44e3cf119ab47">Counter Error: Do not change the code. Click here to show the correct code!</a>';if(document.getElementById('counterimg')!=null){document.getElementById('counterimg').parentNode.insertBefore(div,document.getElementById('counterimg').nextSibling);}else{document.body.appendChild(div);}
widget=document.getElementById('counterimg');if(widget){widget.style.visibility='hidden';}}}