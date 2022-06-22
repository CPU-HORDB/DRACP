/*
 * jQuery Address Plugin v1.5
 * http://www.asual.com/jquery/address/
 *
 * Copyright (c) 2009-2010 Rostislav Hristov
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Date: 2011-09-19 23:26:02 +0300 (Mon, 19 Sep 2011)
 */
(function(c){c.address=function(){var r=function(a){c(c.address).trigger(c.extend(c.Event(a),function(){for(var b={},e=c.address.parameterNames(),m=0,q=e.length;m<q;m++)b[e[m]]=c.address.parameter(e[m]);return{value:c.address.value(),path:c.address.path(),pathNames:c.address.pathNames(),parameterNames:e,parameters:b,queryString:c.address.queryString()}}.call(c.address)))},t=function(a){return Array.prototype.slice.call(a)},g=function(){c().bind.apply(c(c.address),Array.prototype.slice.call(arguments));
return c.address},G=function(){return z.pushState&&d.state!==k},V=function(){return("/"+h.pathname.replace(new RegExp(d.state),"")+h.search+(H()?"#"+H():"")).replace(U,"/")},H=function(){var a=h.href.indexOf("#");return a!=-1?x(h.href.substr(a+1),n):""},u=function(){return G()?V():H()},W=function(){return"javascript"},N=function(a){a=a.toString();return(d.strict&&a.substr(0,1)!="/"?"/":"")+a},x=function(a,b){if(d.crawlable&&b)return(a!==""?"!":"")+a;return a.replace(/^\!/,"")},v=function(a,b){return parseInt(a.css(b),
10)},D=function(){if(!I){var a=u();if(f!=a)if(A&&B<7)h.reload();else{A&&!J&&d.history&&s(O,50);f=a;C(n)}}},C=function(a){r(X);r(a?Y:Z);s(ga,10)},ga=function(){if(d.tracker!=="null"&&d.tracker!==null){var a=c.isFunction(d.tracker)?d.tracker:j[d.tracker],b=(h.pathname+h.search+(c.address&&!G()?c.address.value():"")).replace(/\/\//,"/").replace(/^\/$/,"");if(c.isFunction(a))a(b);else if(c.isFunction(j.urchinTracker))j.urchinTracker(b);else if(j.pageTracker!==k&&c.isFunction(j.pageTracker._trackPageview))j.pageTracker._trackPageview(b);
else j._gaq!==k&&c.isFunction(j._gaq.push)&&j._gaq.push(["_trackPageview",decodeURI(b)])}},O=function(){var a=W()+":"+n+";document.open();document.writeln('<html><head><title>"+o.title.replace("'","\\'")+"</title><script>var "+y+' = "'+encodeURIComponent(u())+(o.domain!=h.hostname?'";document.domain="'+o.domain:"")+"\";<\/script></head></html>');document.close();";if(B<7)l.src=a;else l.contentWindow.location.replace(a)},aa=function(){if(E&&$!=-1){var a,b=E.substr($+1).split("&");for(i=0;i<b.length;i++){a=
b[i].split("=");if(/^(autoUpdate|crawlable|history|strict|wrap)$/.test(a[0]))d[a[0]]=isNaN(a[1])?/^(true|yes)$/i.test(a[1]):parseInt(a[1],10)!==0;if(/^(state|tracker)$/.test(a[0]))d[a[0]]=a[1]}E=null}f=u()},ca=function(){if(!ba){ba=p;aa();var a=function(){ha.call(this);ia.call(this)},b=c("body").ajaxComplete(a);a();if(d.wrap){c("body > *").wrapAll('<div style="padding:'+(v(b,"marginTop")+v(b,"paddingTop"))+"px "+(v(b,"marginRight")+v(b,"paddingRight"))+"px "+(v(b,"marginBottom")+v(b,"paddingBottom"))+
"px "+(v(b,"marginLeft")+v(b,"paddingLeft"))+'px;" />').parent().wrap('<div id="'+y+'" style="height:100%;overflow:auto;position:relative;'+(K&&!window.statusbar.visible?"resize:both;":"")+'" />');c("html, body").css({height:"100%",margin:0,padding:0,overflow:"hidden"});K&&c('<style type="text/css" />').appendTo("head").text("#"+y+"::-webkit-resizer { background-color: #fff; }")}if(A&&!J){a=o.getElementsByTagName("frameset")[0];l=o.createElement((a?"":"i")+"frame");l.src=W()+":"+n;if(a){a.insertAdjacentElement("beforeEnd",
l);a[a.cols?"cols":"rows"]+=",0";l.noResize=p;l.frameBorder=l.frameSpacing=0}else{l.style.display="none";l.style.width=l.style.height=0;l.tabIndex=-1;o.body.insertAdjacentElement("afterBegin",l)}s(function(){c(l).bind("load",function(){var e=l.contentWindow;f=e[y]!==k?e[y]:"";if(f!=u()){C(n);h.hash=x(f,p)}});l.contentWindow[y]===k&&O()},50)}s(function(){r("init");C(n)},1);if(!G())if(J)if(j.addEventListener)j.addEventListener(F,D,n);else j.attachEvent&&j.attachEvent("on"+F,D);else ja(D,50)}},ha=function(){var a,
b=c("a"),e=b.size(),m=-1,q=function(){if(++m!=e){a=c(b.get(m));a.is('[rel*="address:"]')&&a.address('[rel*="address:"]');s(q,1)}};s(q,1)},ia=function(){if(d.crawlable){var a=h.pathname.replace(/\/$/,"");c("body").html().indexOf("_escaped_fragment_")!=-1&&c('a[href]:not([href^=http]), a[href*="'+document.domain+'"]').each(function(){var b=c(this).attr("href").replace(/^http:/,"").replace(new RegExp(a+"/?$"),"");if(b===""||b.indexOf("_escaped_fragment_")!=-1)c(this).attr("href","#"+b.replace(/\/(.*)\?_escaped_fragment_=(.*)$/,
"!$2"))})}},k,y="jQueryAddress",F="hashchange",X="change",Y="internalChange",Z="externalChange",p=true,n=false,d={autoUpdate:p,crawlable:n,history:p,strict:p,wrap:n},L=c.browser,B=parseFloat(L.version),A=!c.support.opacity,K=L.webkit||L.safari,j=function(){try{return top.document!==k?top:window}catch(a){return window}}(),o=j.document,z=j.history,h=j.location,ja=setInterval,s=setTimeout,U=/\/{2,9}/g,da=navigator.userAgent,J="on"+F in j,l,E=c("script:last").attr("src"),$=E?E.indexOf("?"):-1,P=o.title,
I=n,ba=n,Q=p,ea=p,M=n,f=u();if(A){B=parseFloat(da.substr(da.indexOf("MSIE")+4));if(o.documentMode&&o.documentMode!=B)B=o.documentMode!=8?7:8;var fa=o.onpropertychange;o.onpropertychange=function(){fa&&fa.call(o);if(o.title!=P&&o.title.indexOf("#"+u())!=-1)o.title=P}}if(z.navigationMode)z.navigationMode="compatible";if(document.readyState=="complete")var ka=setInterval(function(){if(c.address){ca();clearInterval(ka)}},50);else{aa();c(ca)}c(window).bind("popstate",function(){if(f!=u()){f=u();C(n)}}).bind("unload",
function(){if(j.removeEventListener)j.removeEventListener(F,D,n);else j.detachEvent&&j.detachEvent("on"+F,D)});return{bind:function(){return g.apply(this,t(arguments))},init:function(){return g.apply(this,["init"].concat(t(arguments)))},change:function(){return g.apply(this,[X].concat(t(arguments)))},internalChange:function(){return g.apply(this,[Y].concat(t(arguments)))},externalChange:function(){return g.apply(this,[Z].concat(t(arguments)))},baseURL:function(){var a=h.href;if(a.indexOf("#")!=-1)a=
a.substr(0,a.indexOf("#"));if(/\/$/.test(a))a=a.substr(0,a.length-1);return a},autoUpdate:function(a){if(a!==k){d.autoUpdate=a;return this}return d.autoUpdate},crawlable:function(a){if(a!==k){d.crawlable=a;return this}return d.crawlable},history:function(a){if(a!==k){d.history=a;return this}return d.history},state:function(a){if(a!==k){d.state=a;var b=V();if(d.state!==k)if(z.pushState)b.substr(0,3)=="/#/"&&h.replace(d.state.replace(/^\/$/,"")+b.substr(2));else b!="/"&&b.replace(/^\/#/,"")!=H()&&s(function(){h.replace(d.state.replace(/^\/$/,
"")+"/#"+b)},1);return this}return d.state},strict:function(a){if(a!==k){d.strict=a;return this}return d.strict},tracker:function(a){if(a!==k){d.tracker=a;return this}return d.tracker},wrap:function(a){if(a!==k){d.wrap=a;return this}return d.wrap},update:function(){M=p;this.value(f);M=n;return this},title:function(a){if(a!==k){s(function(){P=o.title=a;if(ea&&l&&l.contentWindow&&l.contentWindow.document){l.contentWindow.document.title=a;ea=n}if(!Q&&L.mozilla)h.replace(h.href.indexOf("#")!=-1?h.href:
h.href+"#");Q=n},50);return this}return o.title},value:function(a){if(a!==k){a=N(a);if(a=="/")a="";if(f==a&&!M)return;Q=p;f=a;if(d.autoUpdate||M){C(p);if(G())z[d.history?"pushState":"replaceState"]({},"",d.state.replace(/\/$/,"")+(f===""?"/":f));else{I=p;if(K)if(d.history)h.hash="#"+x(f,p);else h.replace("#"+x(f,p));else if(f!=u())if(d.history)h.hash="#"+x(f,p);else h.replace("#"+x(f,p));A&&!J&&d.history&&s(O,50);if(K)s(function(){I=n},1);else I=n}}return this}return N(f)},path:function(a){if(a!==
k){var b=this.queryString(),e=this.hash();this.value(a+(b?"?"+b:"")+(e?"#"+e:""));return this}return N(f).split("#")[0].split("?")[0]},pathNames:function(){var a=this.path(),b=a.replace(U,"/").split("/");if(a.substr(0,1)=="/"||a.length===0)b.splice(0,1);a.substr(a.length-1,1)=="/"&&b.splice(b.length-1,1);return b},queryString:function(a){if(a!==k){var b=this.hash();this.value(this.path()+(a?"?"+a:"")+(b?"#"+b:""));return this}a=f.split("?");return a.slice(1,a.length).join("?").split("#")[0]},parameter:function(a,
b,e){var m,q;if(b!==k){var R=this.parameterNames();q=[];b=b?b.toString():"";for(m=0;m<R.length;m++){var S=R[m],w=this.parameter(S);if(typeof w=="string")w=[w];if(S==a)w=b===null||b===""?[]:e?w.concat([b]):[b];for(var T=0;T<w.length;T++)q.push(S+"="+w[T])}c.inArray(a,R)==-1&&b!==null&&b!==""&&q.push(a+"="+b);this.queryString(q.join("&"));return this}if(b=this.queryString()){e=[];q=b.split("&");for(m=0;m<q.length;m++){b=q[m].split("=");b[0]==a&&e.push(b.slice(1).join("="))}if(e.length!==0)return e.length!=
1?e:e[0]}},parameterNames:function(){var a=this.queryString(),b=[];if(a&&a.indexOf("=")!=-1){a=a.split("&");for(var e=0;e<a.length;e++){var m=a[e].split("=")[0];c.inArray(m,b)==-1&&b.push(m)}}return b},hash:function(a){if(a!==k){this.value(f.split("#")[0]+(a?"#"+a:""));return this}a=f.split("#");return a.slice(1,a.length).join("#")}}}();c.fn.address=function(r){var t;if(typeof r=="string"){t=r;r=undefined}c(this).attr("address")||c(t?t:this).live("click",function(g){if(g.shiftKey||g.ctrlKey||g.metaKey||
g.which==2)return true;if(c(this).is("a")){g.preventDefault();g=r?r.call(this):/address:/.test(c(this).attr("rel"))?c(this).attr("rel").split("address:")[1].split(" ")[0]:c.address.state()!==undefined&&c.address.state()!="/"?c(this).attr("href").replace(new RegExp("^(.*"+c.address.state()+"|\\.)"),""):c(this).attr("href").replace(/^(#\!?|\.)/,"");c.address.value(g)}}).live("submit",function(g){if(c(this).is("form")){g.preventDefault();g=c(this).attr("action");g=r?r.call(this):(g.indexOf("?")!=-1?
g.replace(/&$/,""):g+"?")+c(this).serialize();c.address.value(g)}}).attr("address",true);return this}})(jQuery);