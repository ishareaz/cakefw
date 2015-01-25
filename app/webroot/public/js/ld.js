if(!window.criteo_q||window.criteo_q instanceof Array){var oldQueue=window.criteo_q||[];window.criteo_q=function(){var e={bodyReady:!1,domReady:!1,queue:[],actions:[],disingScheduled:[],accounts:[]},d={tagVersion:"3.1.0",handlerUrlPrefix:("https:"===document.location.protocol?"https://sslwidget.":"http://widget.")+"criteo.com/event",handlerResponseType:"single",handlerParams:{v:"3.1.0"},extraData:[],manualDising:!1,manualFlush:!1,disOnce:!1,partialDis:!1,eventMap:{viewitem:"vp",viewhome:"vh",viewlist:"vl",
viewbasket:"vb",viewsearch:"vs",tracktransaction:"vc",calldising:"dis",setdata:"exd",setlogin:"cl",setemail:"ce"},propMap:{event:"e",account:"a",product:"p",item:"p","item.id":"i","item.price":"pr","item.quantity":"q","product.id":"i","product.price":"pr","product.quantity":"q",data:"d",keywords:"kw",checkin_date:"din",checkout_date:"dout",deduplication:"dd",user_segment:"si",new_customer:"nc",customer_id:"ci",login:"i",email:"m",hash_method:"h"},setters:{seturl:{cfg:"handlerUrlPrefix",evt:"url"},
setaccount:{cfg:"account",evt:"account"},setcalltype:{cfg:"handlerResponseType",evt:"type"},oninitialized:{cfg:"onInitialized",evt:"callback"},ondomready:{cfg:"onDOMReady",evt:"callback"},beforeappend:{cfg:"beforeAppend",evt:"callback"},aftereval:{cfg:"afterEval",evt:"callback"},onflush:{cfg:"onFlush",evt:"callback"}},flags:{disonce:"disOnce",manualdising:"manualDising",manualflush:"manualFlush",nopartialflush:"noPartialFlush",disonpartialflush:"partialDis"}},n=function(){for(var a=[],b=e.queue,c=
0;c<b.length;++c){var f=b[c];if(f instanceof Array)b.splice.apply(b,[c+1,0].concat(f));else if(f instanceof Function)b.splice(c+1,0,f());else if(f&&"[object Object]"===f.toString())switch(k(f,c,b,a)){case 0:a.push(f);break;case -1:a=a.concat(b.slice(c)),c=b.length}}d.afterEval instanceof Function&&(a=d.afterEval(b,a,e,d));e.queue=a||[];!d.manualFlush&&(!d.noPartialFlush||0===e.queue.length)&&r(0!==e.queue.length)},k=function(a,b,c,f){if(!e.domReady&&a.requiresDOM&&"no"!==a.requiresDOM)return"blocking"===
a.requiresDOM?-1:0;delete a.requiresDOM;if(!a.event)return g(a),1;a.account&&p(a.account,e.accounts);a.event=a.event.toLowerCase();switch(a.event){case "setdata":return a=g(a),d.extraData.push(a),s(e.actions,g(a)),1;case "setparameter":for(var h in a)"event"!==h.toLowerCase()&&a.hasOwnProperty(h)&&(d.handlerParams[h]=a[h]);return 1;case "calldising":a.hasOwnProperty("account")||(a.account=e.accounts);b=d.handlerResponseType;a.hasOwnProperty("type")&&(b=a.type,delete a.type);p(a.account,e.disingScheduled);
"sequential"===b&&(a.dc=!0);break;case "setcustomerid":return a.event="setdata",a.customer_id=a.id,delete a.id,k(a);case "setemail":case "setlogin":a.hasOwnProperty("hash_method")||(a.hash_method="none");a:{b=e.actions;a=g(a);for(c=0;c<b.length;++c)if(f=b[c],f.event===a.event&&f.hash_method===a.hash_method&&m(a.account,f.account)){a.hasOwnProperty("login")&&(f.login=f.login.concat(a.login));a.hasOwnProperty("email")&&(f.email=f.email.concat(a.email));break a}b.push(a)}return 1;case "sethashedlogin":return a.event=
"setlogin",a.hasOwnProperty("hash_method")||(a.hash_method="md5"),k(a);case "sethashedemail":return a.event="setemail",a.hasOwnProperty("hash_method")||(a.hash_method="md5"),k(a);case "setsitetype":b="d";if("mobile"===a.type||"m"===a.type)b="m";if("tablet"===a.type||"t"===a.type)b="t";a.event="setdata";delete a.type;a.site_type=b;return k(a);case "appendtag":e.bodyReady&&!d.container&&((b=document.body)?(c=document.createElement("div"),c.setAttribute("id","criteo-tags-div"),c.style.display="none",
b.appendChild(c),b=c):b=void 0,d.container=b);d.beforeAppend instanceof Function&&(a.element=d.beforeAppend(a.element,e,d));g(a);if(a.element&&a.element.tagName)if(!d.container&&"script"===a.element.tagName.toLowerCase())b=document.getElementsByTagName("script")[0],a.element.setAttribute("data-owner","criteo-tag"),b.parentNode.insertBefore(a.element,b);else if(d.container)d.container.appendChild(a.element);else return 0;return 1;case "gettagstate":return a.callback instanceof Function?a.callback(e,
d):1;case "flush":case "flushevents":return r(b!==c.length-1||0!==f.length),1}if(b=d.setters[a.event])return d[b.cfg]=a[b.evt],1;if(b=d.flags[a.event])return d[b]=!0,1;e.actions.push(g(a));return 1},r=function(a){d.onFlush instanceof Function&&(e.actions=d.onFlush(e.actions,e,d));if(0!==e.actions.length){for(var b=0;b<d.extraData.length;++b)s(e.actions,d.extraData[b]);if(!d.manualDising&&(!a||d.partialDis)){a=[];for(b=0;b<e.accounts.length;++b)q(e.disingScheduled,e.accounts[b])||a.push(e.accounts[b]);
0<a.length&&k({event:"callDising",account:a})}b=e.actions;a=[];1===e.accounts.length&&(d.account=e.accounts[0]);d.account&&a.push("a="+l(d.account,[]));if(d.handlerParams){var c=decodeURIComponent(l(d.handlerParams,[]));c&&a.push(c)}for(c=0;c<b.length;++c)b[c].account&&m(d.account,b[c].account)&&delete b[c].account,a.push("p"+c+"="+l(b[c],[]));b=a.join("&");a=document.createElement("script");a.setAttribute("async","true");a.setAttribute("type","text/javascript");a.setAttribute("src",d.handlerUrlPrefix+
"?"+b);e.actions=[];k({event:"appendTag",element:a});d.disOnce||(e.disingScheduled=[])}},s=function(a,b){for(var c=0;c<a.length;++c){var d=a[c];if(d.event===b.event&&m(b.account,d.account)){for(var e in b)b.hasOwnProperty(e)&&"account"!==e&&(d[e]=b[e]);return}}a.push(b)},g=function(a){var b=a;if(a instanceof Function)return b=a(),b instanceof Function?b:g(b);if(a instanceof Array)for(var b=[],c=0;c<a.length;++c)b[c]=g(a[c]);else if(a&&"[object Object]"===a.toString())for(c in b={},a)a.hasOwnProperty(c)&&
(b[c]=g(a[c]));return b},t=function(a,b){var c=b.join(".");return d.propMap[c]?d.propMap[c]:a},m=function(a,b){if(!(a instanceof Array))return m([a],b);if(!(b instanceof Array))return m(a,[b]);if(a.length!==b.length)return!1;for(var c=0;c<a.length;++c)if(!q(b,a[c]))return!1;return!0},l=function(a,b){var c="";if(a instanceof Function)c=l(a(),b);else if(a instanceof Array){for(var e=[],h=0;h<a.length;++h)e[h]=l(a[h],b);c+="["+e.join(",")+"]"}else if(a&&"[object Object]"===a.toString()){e=[];for(h in a)if(a.hasOwnProperty(h)){var g=
b.concat([h]);e.push(t(h,g)+"="+l(a[h],g))}c+=e.join("&")}else c=1===b.length&&"event"===b[0]?c+(d.eventMap[a.toLowerCase()]?d.eventMap[a.toLowerCase()]:a):c+a;return encodeURIComponent(c)},p=function(a,b){if(a instanceof Array)for(var c=0;c<a.length;++c)p(a[c],b);else q(b,a)||b.push(a)},q=function(a,b){for(var c=0;c<a.length;++c)if(a[c]===b)return!0;return!1};(function(a){(function c(){document.body?setTimeout(a,0):setTimeout(c,10)})()})(function(){e.bodyReady=d.onInitialized instanceof Function?
d.onInitialized(e,d):!0;n()});(function(a,b){if("complete"===a.readyState)b();else if(a.addEventListener)a.addEventListener("DOMContentLoaded",b,!1),window.addEventListener("load",b,!1);else{a.attachEvent("onreadystatechange",b);window.attachEvent("onload",b);var c=!1;try{c=null===window.frameElement&&document.documentElement}catch(d){}if(c&&c.doScroll)(function u(){if(c){try{c.doScroll("left")}catch(a){return setTimeout(u,50)}b()}})();else{var e=!1,g=a.onload,k=a.onreadystatechange;a.onload=a.onreadystatechange=
function(){k instanceof Function&&k();if(!e&&(!a.readyState||"loaded"===a.readyState||"complete"===a.readyState))g instanceof Function&&g(),e=!0,b()}}}})(document,function(){e.domReady=d.onDOMReady instanceof Function?d.onDOMReady(e,d):!0;n()});(function(a){try{if(a&&a.referrer){var b=a.createElement("a");b.href=a.referrer;b.hostname!==a.location.hostname&&d.extraData.push({event:"setData",ref:b.protocol+"//"+b.hostname})}}catch(c){}})(document);return{push:function(){for(var a=0;a<arguments.length;++a)e.queue.push(arguments[a]);
n()}}}();window.criteo_q.push.apply(window.criteo_q,oldQueue)};