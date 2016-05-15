/* Parsley dist/parsley-standalone.min.js build version 1.1.18 http://parsleyjs.org */



(function(b){String.prototype.trim===b&&(String.prototype.trim=function(){return this.replace(/^\s+/,"").replace(/\s+$/,"")});Array.prototype.reduce===b&&(Array.prototype.reduce=function(l){if(void 0===this||null===this)throw new TypeError;var r=Object(this),q=r.length>>>0,m=0,a;if("function"!=typeof l)throw new TypeError;if(0==q&&1==arguments.length)throw new TypeError;if(2<=arguments.length)a=arguments[1];else{do{if(m in r){a=r[m++];break}if(++m>=q)throw new TypeError;}while(1)}for(;m<q;)m in r&&



(a=l.call(b,a,r[m],m,r)),m++;return a})})();



var Zepto=function(){function b(f){return"[object Function]"==M.call(f)}function l(f){return f instanceof Object}function r(f){return l(f)&&f.__proto__==Object.prototype}function q(f){return f instanceof Array}function m(f){return"number"==typeof f.length}function a(f){return f.replace(/::/g,"/").replace(/([A-Z]+)([A-Z][a-z])/g,"$1_$2").replace(/([a-z\d])([A-Z])/g,"$1_$2").replace(/_/g,"-").toLowerCase()}function c(f){return f in B?B[f]:B[f]=RegExp("(^|\\s)"+f+"(\\s|$)")}function d(f){return"children"in



f?u.call(f.children):e.map(f.childNodes,function(f){if(1==f.nodeType)return f})}function g(f,a,e){for(s in a)e&&r(a[s])?(r(f[s])||(f[s]={}),g(f[s],a[s],e)):a[s]!==n&&(f[s]=a[s])}function j(f,a){return a===n?e(f):e(f).filter(a)}function k(f,a,e,c){return b(a)?a.call(f,e,c):a}function w(f,a){var e=f.className,b=e&&e.baseVal!==n;if(a===n)return b?e.baseVal:e;b?e.baseVal=a:f.className=a}function x(f){var a;try{return f?"true"==f||("false"==f?!1:"null"==f?null:!isNaN(a=Number(f))?a:/^[\[\{]/.test(f)?e.parseJSON(f):



f):f}catch(b){return f}}function A(f,a){a(f);for(var e in f.childNodes)A(f.childNodes[e],a)}var n,s,e,y,z=[],u=z.slice,v=z.filter,p=window.document,h={},B={},C=p.defaultView.getComputedStyle,D={"column-count":1,columns:1,"font-weight":1,"line-height":1,opacity:1,"z-index":1,zoom:1},H=/^\s*<(\w+|!)[^>]*>/,N=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,I=/^(?:body|html)$/i,O="val css html text data width height offset".split(" "),F=p.createElement("table"),J=p.createElement("tr"),



K={tr:p.createElement("tbody"),tbody:F,thead:F,tfoot:F,td:J,th:J,"*":p.createElement("div")},P=/complete|loaded|interactive/,Q=/^\.([\w-]+)$/,R=/^#([\w-]*)$/,S=/^[\w-]+$/,M={}.toString,t={},G,E,L=p.createElement("div");t.matches=function(f,a){if(!f||1!==f.nodeType)return!1;var e=f.webkitMatchesSelector||f.mozMatchesSelector||f.oMatchesSelector||f.matchesSelector;if(e)return e.call(f,a);var b;b=f.parentNode;(e=!b)&&(b=L).appendChild(f);b=~t.qsa(b,a).indexOf(f);e&&L.removeChild(f);return b};G=function(f){return f.replace(/-+(.)?/g,



function(f,a){return a?a.toUpperCase():""})};E=function(f){return v.call(f,function(a,e){return f.indexOf(a)==e})};t.fragment=function(f,a,b){f.replace&&(f=f.replace(N,"<$1></$2>"));a===n&&(a=H.test(f)&&RegExp.$1);a in K||(a="*");var c,d=K[a];d.innerHTML=""+f;f=e.each(u.call(d.childNodes),function(){d.removeChild(this)});r(b)&&(c=e(f),e.each(b,function(f,a){if(-1<O.indexOf(f))c[f](a);else c.attr(f,a)}));return f};t.Z=function(f,a){f=f||[];f.__proto__=arguments.callee.prototype;f.selector=a||"";return f};



t.isZ=function(f){return f instanceof t.Z};t.init=function(f,a){if(f){if(b(f))return e(p).ready(f);if(t.isZ(f))return f;var c;if(q(f))c=v.call(f,function(f){return f!==n&&null!==f});else if(l(f))c=[r(f)?e.extend({},f):f],f=null;else if(H.test(f))c=t.fragment(f.trim(),RegExp.$1,a),f=null;else{if(a!==n)return e(a).find(f);c=t.qsa(p,f)}return t.Z(c,f)}return t.Z()};e=function(f,a){return t.init(f,a)};e.extend=function(f){var a,e=u.call(arguments,1);"boolean"==typeof f&&(a=f,f=e.shift());e.forEach(function(e){g(f,



e,a)});return f};t.qsa=function(f,a){var e;return f===p&&R.test(a)?(e=f.getElementById(RegExp.$1))?[e]:[]:1!==f.nodeType&&9!==f.nodeType?[]:u.call(Q.test(a)?f.getElementsByClassName(RegExp.$1):S.test(a)?f.getElementsByTagName(a):f.querySelectorAll(a))};e.contains=function(f,a){return f!==a&&f.contains(a)};e.isFunction=b;e.isObject=l;e.isArray=q;e.isPlainObject=r;e.inArray=function(f,a,e){return z.indexOf.call(a,f,e)};e.camelCase=G;e.trim=function(a){return a.trim()};e.uuid=0;e.support={};e.expr={};



e.map=function(a,b){var c,d=[],p;if(m(a))for(p=0;p<a.length;p++)c=b(a[p],p),null!=c&&d.push(c);else for(p in a)c=b(a[p],p),null!=c&&d.push(c);return 0<d.length?e.fn.concat.apply([],d):d};e.each=function(a,e){var b;if(m(a))for(b=0;b<a.length&&!1!==e.call(a[b],b,a[b]);b++);else for(b in a)if(!1===e.call(a[b],b,a[b]))break;return a};e.grep=function(a,e){return v.call(a,e)};window.JSON&&(e.parseJSON=JSON.parse);e.fn={forEach:z.forEach,reduce:z.reduce,push:z.push,sort:z.sort,indexOf:z.indexOf,concat:z.concat,



map:function(a){return e(e.map(this,function(e,b){return a.call(e,b,e)}))},slice:function(){return e(u.apply(this,arguments))},ready:function(a){P.test(p.readyState)?a(e):p.addEventListener("DOMContentLoaded",function(){a(e)},!1);return this},get:function(a){return a===n?u.call(this):this[a]},toArray:function(){return this.get()},size:function(){return this.length},remove:function(){return this.each(function(){null!=this.parentNode&&this.parentNode.removeChild(this)})},each:function(a){this.forEach(function(e,



b){a.call(e,b,e)});return this},filter:function(a){return b(a)?this.not(this.not(a)):e(v.call(this,function(e){return t.matches(e,a)}))},add:function(a,b){return e(E(this.concat(e(a,b))))},is:function(a){return 0<this.length&&t.matches(this[0],a)},not:function(a){var c=[];if(b(a)&&a.call!==n)this.each(function(e){a.call(this,e)||c.push(this)});else{var d="string"==typeof a?this.filter(a):m(a)&&b(a.item)?u.call(a):e(a);this.forEach(function(a){0>d.indexOf(a)&&c.push(a)})}return e(c)},has:function(a){return this.filter(function(){return l(a)?



e.contains(this,a):e(this).find(a).size()})},eq:function(a){return-1===a?this.slice(a):this.slice(a,+a+1)},first:function(){var a=this[0];return a&&!l(a)?a:e(a)},last:function(){var a=this[this.length-1];return a&&!l(a)?a:e(a)},find:function(a){return 1==this.length?e(t.qsa(this[0],a)):this.map(function(){return t.qsa(this,a)})},closest:function(a,b){for(var c=this[0];c&&!t.matches(c,a);)c=c!==b&&c!==p&&c.parentNode;return e(c)},parents:function(a){for(var b=[],c=this;0<c.length;)c=e.map(c,function(a){if((a=



a.parentNode)&&a!==p&&0>b.indexOf(a))return b.push(a),a});return j(b,a)},parent:function(a){return j(E(this.pluck("parentNode")),a)},children:function(a){return j(this.map(function(){return d(this)}),a)},contents:function(){return this.map(function(){return u.call(this.childNodes)})},siblings:function(a){return j(this.map(function(a,f){return v.call(d(f.parentNode),function(a){return a!==f})}),a)},empty:function(){return this.each(function(){this.innerHTML=""})},pluck:function(a){return e.map(this,



function(e){return e[a]})},show:function(){return this.each(function(){"none"==this.style.display&&(this.style.display=null);if("none"==C(this,"").getPropertyValue("display")){var a=this.style,e=this.nodeName,b,c;h[e]||(b=p.createElement(e),p.body.appendChild(b),c=C(b,"").getPropertyValue("display"),b.parentNode.removeChild(b),"none"==c&&(c="block"),h[e]=c);a.display=h[e]}})},replaceWith:function(a){return this.before(a).remove()},wrap:function(a){var c=b(a);if(this[0]&&!c)var d=e(a).get(0),p=d.parentNode||



1<this.length;return this.each(function(b){e(this).wrapAll(c?a.call(this,b):p?d.cloneNode(!0):d)})},wrapAll:function(a){if(this[0]){e(this[0]).before(a=e(a));for(var b;(b=a.children()).length;)a=b.first();e(a).append(this)}return this},wrapInner:function(a){var c=b(a);return this.each(function(b){var d=e(this),p=d.contents();b=c?a.call(this,b):a;p.length?p.wrapAll(b):d.append(b)})},unwrap:function(){this.parent().each(function(){e(this).replaceWith(e(this).children())});return this},clone:function(){return this.map(function(){return this.cloneNode(!0)})},



hide:function(){return this.css("display","none")},toggle:function(a){return this.each(function(){var b=e(this);(a===n?"none"==b.css("display"):a)?b.show():b.hide()})},prev:function(a){return e(this.pluck("previousElementSibling")).filter(a||"*")},next:function(a){return e(this.pluck("nextElementSibling")).filter(a||"*")},html:function(a){return a===n?0<this.length?this[0].innerHTML:null:this.each(function(b){var c=this.innerHTML;e(this).empty().append(k(this,a,b,c))})},text:function(a){return a===



n?0<this.length?this[0].textContent:null:this.each(function(){this.textContent=a})},attr:function(a,e){var b;return"string"==typeof a&&e===n?0==this.length||1!==this[0].nodeType?n:"value"==a&&"INPUT"==this[0].nodeName?this.val():!(b=this[0].getAttribute(a))&&a in this[0]?this[0][a]:b:this.each(function(b){if(1===this.nodeType)if(l(a))for(s in a){b=s;var c=a[s];null==c?this.removeAttribute(b):this.setAttribute(b,c)}else b=k(this,e,b,this.getAttribute(a)),null==b?this.removeAttribute(a):this.setAttribute(a,



b)})},removeAttr:function(a){return this.each(function(){1===this.nodeType&&this.removeAttribute(a)})},prop:function(a,b){return b===n?this[0]?this[0][a]:n:this.each(function(e){this[a]=k(this,b,e,this[a])})},data:function(b,e){var c=this.attr("data-"+a(b),e);return null!==c?x(c):n},val:function(a){return a===n?0<this.length?this[0].multiple?e(this[0]).find("option").filter(function(){return this.selected}).pluck("value"):this[0].value:n:this.each(function(b){this.value=k(this,a,b,this.value)})},



offset:function(){if(0==this.length)return null;var a=this[0].getBoundingClientRect();return{left:a.left+window.pageXOffset,top:a.top+window.pageYOffset,width:a.width,height:a.height}},css:function(b,e){if(2>arguments.length&&"string"==typeof b)return 0==this.length?n:this[0].style[G(b)]||C(this[0],"").getPropertyValue(b);var c="";for(s in b)!b[s]&&0!==b[s]?this.each(function(){this.style.removeProperty(a(s))}):c+=a(s)+":"+("number"==typeof b[s]&&!D[a(s)]?b[s]+"px":b[s])+";";"string"==typeof b&&(!e&&



0!==e?this.each(function(){this.style.removeProperty(a(b))}):c=a(b)+":"+("number"==typeof e&&!D[a(b)]?e+"px":e));return this.each(function(){this.style.cssText+=";"+c})},index:function(a){return a?this.indexOf(e(a)[0]):this.parent().children().indexOf(this[0])},hasClass:function(a){return 1>this.length?!1:c(a).test(w(this[0]))},addClass:function(a){return this.each(function(b){y=[];var c=w(this);k(this,a,b,c).split(/\s+/g).forEach(function(a){e(this).hasClass(a)||y.push(a)},this);y.length&&w(this,



c+(c?" ":"")+y.join(" "))})},removeClass:function(a){return this.each(function(b){if(a===n)return w(this,"");y=w(this);k(this,a,b,y).split(/\s+/g).forEach(function(a){y=y.replace(c(a)," ")});w(this,y.trim())})},toggleClass:function(a,b){return this.each(function(c){c=k(this,a,c,w(this));(b===n?!e(this).hasClass(c):b)?e(this).addClass(c):e(this).removeClass(c)})},scrollTop:function(){if(this.length)return"scrollTop"in this[0]?this[0].scrollTop:this[0].scrollY},position:function(){if(this.length){var a=



this[0],b=this.offsetParent(),c=this.offset(),d=I.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(e(a).css("margin-top"))||0;c.left-=parseFloat(e(a).css("margin-left"))||0;d.top+=parseFloat(e(b[0]).css("border-top-width"))||0;d.left+=parseFloat(e(b[0]).css("border-left-width"))||0;return{top:c.top-d.top,left:c.left-d.left}}},offsetParent:function(){return this.map(function(){for(var a=this.offsetParent||p.body;a&&!I.test(a.nodeName)&&"static"==e(a).css("position");)a=a.offsetParent;



return a})}};["width","height"].forEach(function(a){e.fn[a]=function(b){var c,d=a.replace(/./,function(a){return a[0].toUpperCase()});return b===n?this[0]==window?window["inner"+d]:this[0]==p?p.documentElement["offset"+d]:(c=this.offset())&&c[a]:this.each(function(c){var d=e(this);d.css(a,k(this,b,c,d[a]()))})}});["after","prepend","before","append"].forEach(function(a,b){var c=b%2;e.fn[a]=function(){var a=e.map(arguments,function(a){return l(a)?a:t.fragment(a)}),d,f=1<this.length;return 1>a.length?



this:this.each(function(p,h){d=c?h:h.parentNode;h=0==b?h.nextSibling:1==b?h.firstChild:2==b?h:null;a.forEach(function(a){if(f)a=a.cloneNode(!0);else if(!d)return e(a).remove();A(d.insertBefore(a,h),function(a){null!=a.nodeName&&("SCRIPT"===a.nodeName.toUpperCase()&&(!a.type||"text/javascript"===a.type)&&!a.src)&&window.eval.call(window,a.innerHTML)})})})};e.fn[c?a+"To":"insert"+(b?"Before":"After")]=function(b){e(b)[a](this);return this}});t.Z.prototype=e.fn;t.uniq=E;t.deserializeValue=x;e.zepto=



t;return e}();window.Zepto=Zepto;"$"in window||(window.$=Zepto);



(function(b){function l(a){return a._zid||(a._zid=j++)}function r(a,b,c,d){b=q(b);if(b.ns)var j=RegExp("(?:^| )"+b.ns.replace(" "," .* ?")+"(?: |$)");return(g[l(a)]||[]).filter(function(a){return a&&(!b.e||a.e==b.e)&&(!b.ns||j.test(a.ns))&&(!c||l(a.fn)===l(c))&&(!d||a.sel==d)})}function q(a){a=(""+a).split(".");return{e:a[0],ns:a.slice(1).sort().join(" ")}}function m(a,c,d){b.isObject(a)?b.each(a,d):a.split(/\s/).forEach(function(a){d(a,c)})}function a(a,c,d,j,n,p){var h=l(a),B=g[h]||(g[h]=[]);m(c,



d,function(c,d){var h=q(c);h.fn=d;h.sel=j;h.e in w&&(d=function(a){var c=a.relatedTarget;if(!c||c!==this&&!b.contains(this,c))return h.fn.apply(this,arguments)});h.del=n&&n(d,c);var g=h.del||d;h.proxy=function(b){var c=g.apply(a,[b].concat(b.data));!1===c&&(b.preventDefault(),b.stopPropagation());return c};h.i=B.length;B.push(h);a.addEventListener(w[h.e]||h.e,h.proxy,h.del&&("focus"==h.e||"blur"==h.e)||!!p)})}function c(a,b,c,d,j){var p=l(a);m(b||"",c,function(b,c){r(a,b,c,d).forEach(function(b){delete g[p][b.i];



a.removeEventListener(w[b.e]||b.e,b.proxy,b.del&&("focus"==b.e||"blur"==b.e)||!!j)})})}function d(a){var c,d={originalEvent:a};for(c in a)!n.test(c)&&void 0!==a[c]&&(d[c]=a[c]);b.each(s,function(b,c){d[b]=function(){this[c]=x;return a[b].apply(a,arguments)};d[c]=A});return d}var g={},j=1,k={},w={mouseenter:"mouseover",mouseleave:"mouseout"};k.click=k.mousedown=k.mouseup=k.mousemove="MouseEvents";b.event={add:a,remove:c};b.proxy=function(a,c){if(b.isFunction(a)){var d=function(){return a.apply(c,arguments)};



d._zid=l(a);return d}if("string"==typeof c)return b.proxy(a[c],a);throw new TypeError("expected function");};b.fn.bind=function(b,c){return this.each(function(){a(this,b,c)})};b.fn.unbind=function(a,b){return this.each(function(){c(this,a,b)})};b.fn.one=function(b,d){return this.each(function(g,j){a(this,b,d,null,function(a,b){return function(){var e=a.apply(j,arguments);c(j,b,a);return e}})})};var x=function(){return!0},A=function(){return!1},n=/^([A-Z]|layer[XY]$)/,s={preventDefault:"isDefaultPrevented",



stopImmediatePropagation:"isImmediatePropagationStopped",stopPropagation:"isPropagationStopped"};b.fn.delegate=function(c,g,j){return this.each(function(n,k){a(k,g,j,c,function(a){return function(h){var g,j=b(h.target).closest(c,k).get(0);if(j)return g=b.extend(d(h),{currentTarget:j,liveFired:k}),a.apply(j,[g].concat([].slice.call(arguments,1)))}})})};b.fn.undelegate=function(a,b,d){return this.each(function(){c(this,b,d,a)})};b.fn.live=function(a,c){b(document.body).delegate(this.selector,a,c);return this};



b.fn.die=function(a,c){b(document.body).undelegate(this.selector,a,c);return this};b.fn.on=function(a,c,d){return!c||b.isFunction(c)?this.bind(a,c||d):this.delegate(c,a,d)};b.fn.off=function(a,c,d){return!c||b.isFunction(c)?this.unbind(a,c||d):this.undelegate(c,a,d)};b.fn.trigger=function(a,c){if("string"==typeof a||b.isPlainObject(a))a=b.Event(a);var d=a;if(!("defaultPrevented"in d)){d.defaultPrevented=!1;var g=d.preventDefault;d.preventDefault=function(){this.defaultPrevented=!0;g.call(this)}}a.data=



c;return this.each(function(){"dispatchEvent"in this&&this.dispatchEvent(a)})};b.fn.triggerHandler=function(a,c){var g,j;this.each(function(n,p){g=d("string"==typeof a?b.Event(a):a);g.data=c;g.target=p;b.each(r(p,a.type||a),function(a,b){j=b.proxy(g);if(g.isImmediatePropagationStopped())return!1})});return j};"focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(a){b.fn[a]=



function(b){return b?this.bind(a,b):this.trigger(a)}});["focus","blur"].forEach(function(a){b.fn[a]=function(b){b?this.bind(a,b):this.each(function(){try{this[a]()}catch(b){}});return this}});b.Event=function(a,b){"string"!=typeof a&&(b=a,a=b.type);var c=document.createEvent(k[a]||"Events"),d=!0;if(b)for(var g in b)"bubbles"==g?d=!!b[g]:c[g]=b[g];c.initEvent(a,d,!0,null,null,null,null,null,null,null,null,null,null,null,null);c.isDefaultPrevented=function(){return this.defaultPrevented};return c}})(Zepto);



(function(b,l){function r(a){return a.toLowerCase()}var q="",m,a=window.document.createElement("div"),c=/^((translate|rotate|scale)(X|Y|Z|3d)?|matrix(3d)?|perspective|skew(X|Y)?)$/i,d,g,j,k,w,x,A,n={};b.each({Webkit:"webkit",Moz:"",O:"o",ms:"MS"},function(b,c){if(a.style[b+"TransitionProperty"]!==l)return q="-"+r(b)+"-",m=c,!1});d=q+"transform";n[g=q+"transition-property"]=n[j=q+"transition-duration"]=n[k=q+"transition-timing-function"]=n[w=q+"animation-name"]=n[x=q+"animation-duration"]=n[A=q+"animation-timing-function"]=



"";b.fx={off:m===l&&a.style.transitionProperty===l,speeds:{_default:400,fast:200,slow:600},cssPrefix:q,transitionEnd:m?m+"TransitionEnd":r("TransitionEnd"),animationEnd:m?m+"AnimationEnd":r("AnimationEnd")};b.fn.animate=function(a,c,d,g){b.isObject(c)&&(d=c.easing,g=c.complete,c=c.duration);c&&(c=("number"==typeof c?c:b.fx.speeds[c]||b.fx.speeds._default)/1E3);return this.anim(a,c,d,g)};b.fn.anim=function(a,e,m,q){var u,v={},p,h="",B=this,C,D=b.fx.transitionEnd;e===l&&(e=0.4);b.fx.off&&(e=0);if("string"==



typeof a)v[w]=a,v[x]=e+"s",v[A]=m||"linear",D=b.fx.animationEnd;else{p=[];for(u in a)c.test(u)?h+=u+"("+a[u]+") ":(v[u]=a[u],p.push(r(u.replace(/([a-z])([A-Z])/,"$1-$2"))));h&&(v[d]=h,p.push(d));0<e&&"object"===typeof a&&(v[g]=p.join(", "),v[j]=e+"s",v[k]=m||"linear")}C=function(a){if("undefined"!==typeof a){if(a.target!==a.currentTarget)return;b(a.target).unbind(D,arguments.callee)}b(this).css(n);q&&q.call(this)};0<e&&this.bind(D,C);this.size()&&this.get(0).clientLeft;this.css(v);0>=e&&setTimeout(function(){B.each(function(){C.call(this)})},



0);return this};a=null})(Zepto);



(function(b){function l(a,c,d,e){if(a.global)return a=c||w,d=b.Event(d),b(a).trigger(d,e),!d.defaultPrevented}function r(a,b,c){var d=c.context;c.success.call(d,a,"success",b);l(c,d,"ajaxSuccess",[b,c,a]);m("success",b,c)}function q(a,b,c,d){var e=d.context;d.error.call(e,c,b,a);l(d,e,"ajaxError",[c,d,a]);m(b,c,d)}function m(a,c,d){var e=d.context;d.complete.call(e,c,a);l(d,e,"ajaxComplete",[c,d]);d.global&&!--b.active&&l(d,null,"ajaxStop")}function a(){}function c(a){return a&&(a==z?"html":a==y?



"json":s.test(a)?"script":e.test(a)&&"xml")||"text"}function d(a){a.processData&&k(a.data)&&(a.data=b.param(a.data,a.traditional));if(a.data&&(!a.type||"GET"==a.type.toUpperCase()))a.url=(a.url+"&"+a.data).replace(/[&?]{1,2}/,"?")}function g(a,c,d,e){var j=b.isArray(c);b.each(c,function(c,h){e&&(c=d?e:e+"["+(j?"":c)+"]");!e&&j?a.add(h.name,h.value):(d?b.isArray(h):k(h))?g(a,h,d,c):a.add(c,h)})}var j=0,k=b.isObject,w=window.document,x,A,n=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,s=/^(?:text|application)\/javascript/i,



e=/^(?:text|application)\/xml/i,y="application/json",z="text/html",u=/^\s*$/;b.active=0;b.ajaxJSONP=function(c){if(!("type"in c))return b.ajax(c);var e="jsonp"+ ++j,g=w.createElement("script"),n={abort:function(){b(g).remove();e in window&&(window[e]=a);m("abort",n,c)}},k;c.error&&(g.onerror=function(){n.abort();c.error()});window[e]=function(a){clearTimeout(k);b(g).remove();delete window[e];r(a,n,c)};d(c);g.src=c.url.replace(/=\?/,"="+e);b("head").append(g);0<c.timeout&&(k=setTimeout(function(){n.abort();



m("timeout",n,c)},c.timeout));return n};b.ajaxSettings={type:"GET",beforeSend:a,success:a,error:a,complete:a,context:null,global:!0,xhr:function(){return new window.XMLHttpRequest},accepts:{script:"text/javascript, application/javascript",json:y,xml:"application/xml, text/xml",html:z,text:"text/plain"},crossDomain:!1,timeout:0,processData:!0};b.ajax=function(e){var h=b.extend({},e||{});for(x in b.ajaxSettings)void 0===h[x]&&(h[x]=b.ajaxSettings[x]);h.global&&0===b.active++&&l(h,null,"ajaxStart");



h.crossDomain||(h.crossDomain=/^([\w-]+:)?\/\/([^\/]+)/.test(h.url)&&RegExp.$2!=window.location.host);var g=h.dataType;e=/=\?/.test(h.url);if("jsonp"==g||e)return e||(h.url=(h.url+"&callback=?").replace(/[&?]{1,2}/,"?")),b.ajaxJSONP(h);h.url||(h.url=window.location.toString());d(h);e=h.accepts[g];var j={},n=/^([\w-]+:)\/\//.test(h.url)?RegExp.$1:window.location.protocol,k=b.ajaxSettings.xhr(),m;h.crossDomain||(j["X-Requested-With"]="XMLHttpRequest");e&&(j.Accept=e,-1<e.indexOf(",")&&(e=e.split(",",



2)[0]),k.overrideMimeType&&k.overrideMimeType(e));if(h.contentType||!1!==h.contentType&&h.data&&"GET"!=h.type.toUpperCase())j["Content-Type"]=h.contentType||"application/x-www-form-urlencoded";h.headers=b.extend(j,h.headers||{});k.onreadystatechange=function(){if(4==k.readyState){clearTimeout(m);var a,d=!1;if(200<=k.status&&300>k.status||304==k.status||0==k.status&&"file:"==n){g=g||c(k.getResponseHeader("content-type"));a=k.responseText;try{"script"==g?(0,eval)(a):"xml"==g?a=k.responseXML:"json"==



g&&(a=u.test(a)?null:b.parseJSON(a))}catch(e){d=e}d?q(d,"parsererror",k,h):r(a,k,h)}else q(null,"error",k,h)}};k.open(h.type,h.url,"async"in h?h.async:!0);for(A in h.headers)k.setRequestHeader(A,h.headers[A]);e=h.context;!1===h.beforeSend.call(e,k,h)||!1===l(h,e,"ajaxBeforeSend",[k,h])?e=!1:(l(h,e,"ajaxSend",[k,h]),e=void 0);if(!1===e)return k.abort(),!1;0<h.timeout&&(m=setTimeout(function(){k.onreadystatechange=a;k.abort();q(null,"timeout",k,h)},h.timeout));k.send(h.data?h.data:null);return k};b.get=



function(a,c){return b.ajax({url:a,success:c})};b.post=function(a,c,d,e){b.isFunction(c)&&(e=e||d,d=c,c=null);return b.ajax({type:"POST",url:a,data:c,success:d,dataType:e})};b.getJSON=function(a,c){return b.ajax({url:a,success:c,dataType:"json"})};b.fn.load=function(a,c){if(!this.length)return this;var d=this,e=a.split(/\s/),g;1<e.length&&(a=e[0],g=e[1]);b.get(a,function(a){d.html(g?b("<div>").html(a.replace(n,"")).find(g):a);c&&c.apply(d,arguments)});return this};var v=encodeURIComponent;b.param=



function(a,c){var b=[];b.add=function(a,b){this.push(v(a)+"="+v(b))};g(b,a,c);return b.join("&").replace(/%20/g,"+")}})(Zepto);



(function(b){function l(d,g){var j=d[c],j=j&&q[j];if(void 0===g)return j||r(d);if(j){if(g in j)return j[g];var k=a(g);if(k in j)return j[k]}return m.call(b(d),g)}function r(d,g,j){var k=d[c]||(d[c]=++b.uuid),l;if(!(l=q[k])){l=q;var m={};b.each(d.attributes,function(c,d){0==d.name.indexOf("data-")&&(m[a(d.name.replace("data-",""))]=b.zepto.deserializeValue(d.value))});l=l[k]=m}d=l;void 0!==g&&(d[a(g)]=j);return d}var q={},m=b.fn.data,a=b.camelCase,c=b.expando="Zepto"+ +new Date;b.fn.data=function(a,



c){return void 0===c?b.isPlainObject(a)?this.each(function(c,g){b.each(a,function(a,c){r(g,a,c)})}):0==this.length?void 0:l(this[0],a):this.each(function(){r(this,a,c)})};b.fn.removeData=function(d){"string"==typeof d&&(d=d.split(/\s+/));return this.each(function(){var g=this[c],j=g&&q[g];j&&b.each(d,function(){delete j[a(this)]})})}})(Zepto);



(function(b,l){function r(a,c,j,k,m){"function"==typeof c&&!m&&(m=c,c=l);j={opacity:j};k&&(j.scale=k,a.css(b.fx.cssPrefix+"transform-origin","0 0"));return a.animate(j,c,null,m)}function q(c,g,j,k){return r(c,g,0,j,function(){a.call(b(this));k&&k.call(this)})}var m=b.fn.show,a=b.fn.hide,c=b.fn.toggle;b.fn.show=function(a,c){m.call(this);a===l?a=0:this.css("opacity",0);return r(this,a,1,"1,1",c)};b.fn.hide=function(c,b){return c===l?a.call(this):q(this,c,"0,0",b)};b.fn.toggle=function(a,g){return a===



l||"boolean"==typeof a?c.call(this,a):this.each(function(){var c=b(this);c["none"==c.css("display")?"show":"hide"](a,g)})};b.fn.fadeTo=function(a,c,b){return r(this,a,c,null,b)};b.fn.fadeIn=function(a,c){var b=this.css("opacity");0<b?this.css("opacity",0):b=1;return m.call(this).fadeTo(a,b,c)};b.fn.fadeOut=function(a,c){return q(this,a,null,c)};b.fn.fadeToggle=function(a,c){return this.each(function(){var j=b(this);j[0==j.css("opacity")||"none"==j.css("display")?"fadeIn":"fadeOut"](a,c)})}})(Zepto);!function(b){var l=function(a){this.messages={defaultMessage:"This value seems to be invalid.",type:{email:"This value should be a valid email.",url:"This value should be a valid url.",urlstrict:"This value should be a valid url.",number:"This value should be a valid number.",digits:"This value should be digits.",dateIso:"This value should be a valid date (YYYY-MM-DD).",alphanum:"This value should be alphanumeric.",phone:"This value should be a valid phone number."},notnull:"This value should not be null.",



notblank:"This value should not be blank.",required:"This value is required.",regexp:"This value seems to be invalid.",min:"This value should be greater than or equal to %s.",max:"This value should be lower than or equal to %s.",range:"This value should be between %s and %s.",minlength:"This value is too short. It should have %s characters or more.",maxlength:"This value is too long. It should have %s characters or less.",rangelength:"This value length is invalid. It should be between %s and %s characters long.",



mincheck:"You must select at least %s choices.",maxcheck:"You must select %s choices or less.",rangecheck:"You must select between %s and %s choices.",equalto:"Please re-enter the text above.<br/> The text is case sensitive."};this.init(a)};l.prototype={constructor:l,validators:{notnull:function(a){return 0<a.length},notblank:function(a){return"string"===typeof a&&""!==a.replace(/^\s+/g,"").replace(/\s+$/g,"")},required:function(a){if("object"===typeof a){for(var c in a)if(this.required(a[c]))return!0;return!1}return this.notnull(a)&&



this.notblank(a)},type:function(a,c){var b;switch(c){case "number":b=/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/;break;case "digits":b=/^\d+$/;break;case "alphanum":b=/^\w+$/;break;case "email":b=/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))){2,6}$/i;



break;case "url":a=/(https?|s?ftp|git)/i.test(a)?a:"http://"+a;case "urlstrict":b=/^(https?|s?ftp|git):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;



break;case "dateIso":b=/^(\d{4})\D?(0[1-9]|1[0-2])\D?([12]\d|0[1-9]|3[01])$/;break;case "phone":b=/^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;break;default:return!1}return""!==a?b.test(a):!1},regexp:function(a,c,b){return RegExp(c,b.options.regexpFlag||"").test(a)},minlength:function(a,c){return a.length>=c},maxlength:function(a,c){return a.length<=c},rangelength:function(a,c){return this.minlength(a,c[0])&&this.maxlength(a,c[1])},



min:function(a,c){return Number(a)>=c},max:function(a,c){return Number(a)<=c},range:function(a,c){return a>=c[0]&&a<=c[1]},equalto:function(a,c,d){d.options.validateIfUnchanged=!0;return a===b(c).val()},remote:function(a,c,d){var g={},j={};g[d.$element.attr("name")]=a;"undefined"!==typeof d.options.remoteDatatype&&(j={dataType:d.options.remoteDatatype});var k=function(a,c){"undefined"!==typeof c&&("undefined"!==typeof d.Validator.messages.remote&&c!==d.Validator.messages.remote)&&b(d.ulError+" .remote").remove();



d.updtConstraint({name:"remote",valid:a},c);d.manageValidationResult()},m=function(a){if("object"===typeof a)return a;try{a=b.parseJSON(a)}catch(c){}return a},l=function(a){return"object"===typeof a&&null!==a?"undefined"!==typeof a.error?a.error:"undefined"!==typeof a.message?a.message:null:null};b.ajax(b.extend({},{url:c,data:g,type:d.options.remoteMethod||"GET",success:function(a){a=m(a);k(1===a||!0===a||"object"===typeof a&&null!==a&&"undefined"!==typeof a.success,l(a))},error:function(a){a=m(a);



k(!1,l(a))}},j));return null},mincheck:function(a,c){return this.minlength(a,c)},maxcheck:function(a,c){return this.maxlength(a,c)},rangecheck:function(a,c){return this.rangelength(a,c)}},init:function(a){var c=a.validators;a=a.messages;for(var b in c)this.addValidator(b,c[b]);for(b in a)this.addMessage(b,a[b])},formatMesssage:function(a,c){if("object"===typeof c){for(var b in c)a=this.formatMesssage(a,c[b]);return a}return"string"===typeof a?a.replace(/%s/i,c):""},addValidator:function(a,c){this.validators[a]=



c},addMessage:function(a,c,b){if("undefined"!==typeof b&&!0===b)this.messages.type[a]=c;else if("type"===a)for(var g in c)this.messages.type[g]=c[g];else this.messages[a]=c}};var r=function(a,c,b){this.options=c;this.Validator=new l(c);if("ParsleyFieldMultiple"===b)return this;this.init(a,b||"ParsleyField")};r.prototype={constructor:r,init:function(a,c){this.type=c;this.valid=!0;this.element=a;this.validatedOnce=!1;this.$element=b(a);this.val=this.$element.val();this.isRequired=!1;this.constraints=



{};"undefined"===typeof this.isRadioOrCheckbox&&(this.isRadioOrCheckbox=!1,this.hash=this.generateHash(),this.errorClassHandler=this.options.errors.classHandler(a,this.isRadioOrCheckbox)||this.$element);this.ulErrorManagement();this.bindHtml5Constraints();this.addConstraints();this.hasConstraints()&&this.bindValidationEvents()},setParent:function(a){this.$parent=b(a)},getParent:function(){return this.$parent},bindHtml5Constraints:function(){if(this.$element.hasClass("required")||this.$element.prop("required"))this.options.required=



!0;"undefined"!==typeof this.$element.attr("type")&&RegExp(this.$element.attr("type"),"i").test("email url number range")&&(this.options.type=this.$element.attr("type"),RegExp(this.options.type,"i").test("number range")&&(this.options.type="number","undefined"!==typeof this.$element.attr("min")&&this.$element.attr("min").length&&(this.options.min=this.$element.attr("min")),"undefined"!==typeof this.$element.attr("max")&&this.$element.attr("max").length&&(this.options.max=this.$element.attr("max"))));



"string"===typeof this.$element.attr("pattern")&&this.$element.attr("pattern").length&&(this.options.regexp=this.$element.attr("pattern"))},addConstraints:function(){for(var a in this.options){var b={};b[a]=this.options[a];this.addConstraint(b,!0)}},addConstraint:function(a,b){for(var d in a)d=d.toLowerCase(),"function"===typeof this.Validator.validators[d]&&(this.constraints[d]={name:d,requirements:a[d],valid:null},"required"===d&&(this.isRequired=!0),this.addCustomConstraintMessage(d));"undefined"===



typeof b&&this.bindValidationEvents()},updateConstraint:function(a,b){for(var d in a)this.updtConstraint({name:d,requirements:a[d],valid:null},b)},updtConstraint:function(a,c){this.constraints[a.name]=b.extend(!0,this.constraints[a.name],a);"string"===typeof c&&(this.Validator.messages[a.name]=c);this.bindValidationEvents()},removeConstraint:function(a){a=a.toLowerCase();delete this.constraints[a];"required"===a&&(this.isRequired=!1);this.hasConstraints()?this.bindValidationEvents():"ParsleyForm"===



typeof this.getParent()?this.getParent().removeItem(this.$element):this.destroy()},addCustomConstraintMessage:function(a){var b=a+("type"===a&&"undefined"!==typeof this.options[a]?this.options[a].charAt(0).toUpperCase()+this.options[a].substr(1):"")+"Message";"undefined"!==typeof this.options[b]&&this.Validator.addMessage("type"===a?this.options[a]:a,this.options[b],"type"===a)},bindValidationEvents:function(){this.valid=null;this.$element.addClass("parsley-validated");this.$element.off("."+this.type);



this.options.remote&&!/change/i.test(this.options.trigger)&&(this.options.trigger=!this.options.trigger?"change":" change");var a=(!this.options.trigger?"":this.options.trigger)+(/key/i.test(this.options.trigger)?"":" keyup");this.$element.is("select")&&(a+=/change/i.test(a)?"":" change");a=a.replace(/^\s+/g,"").replace(/\s+$/g,"");this.$element.on((a+" ").split(" ").join("."+this.type+" "),!1,b.proxy(this.eventValidation,this))},generateHash:function(){return"parsley-"+(Math.random()+"").substring(2)},



getHash:function(){return this.hash},getVal:function(){return this.$element.data("value")||this.$element.val()},eventValidation:function(a){var b=this.getVal();if("keyup"===a.type&&!/keyup/i.test(this.options.trigger)&&!this.validatedOnce||"change"===a.type&&!/change/i.test(this.options.trigger)&&!this.validatedOnce||!this.isRadioOrCheckbox&&this.getLength(b)<this.options.validationMinlength&&!this.validatedOnce)return!0;this.validate()},getLength:function(a){return!a||!a.hasOwnProperty("length")?



0:a.length},isValid:function(){return this.validate(!1)},hasConstraints:function(){for(var a in this.constraints)return!0;return!1},validate:function(a){var b=this.getVal(),d=null;if(!this.hasConstraints())return null;if(this.options.listeners.onFieldValidate(this.element,this)||""===b&&!this.isRequired)return this.reset(),null;if(!this.needsValidation(b))return this.valid;d=this.applyValidators();("undefined"!==typeof a?a:this.options.showErrors)&&this.manageValidationResult();return d},needsValidation:function(a){if(!this.options.validateIfUnchanged&&



null!==this.valid&&this.val===a&&this.validatedOnce)return!1;this.val=a;return this.validatedOnce=!0},applyValidators:function(){var a=null,b;for(b in this.constraints){var d=this.Validator.validators[this.constraints[b].name](this.val,this.constraints[b].requirements,this);!1===d?(a=!1,this.constraints[b].valid=a,this.options.listeners.onFieldError(this.element,this.constraints,this)):!0===d&&(this.constraints[b].valid=!0,a=!1!==a,!1===this.options.listeners.onFieldSuccess(this.element,this.constraints,



this)&&(a=!1))}return a},manageValidationResult:function(){var a=null,c;for(c in this.constraints)!1===this.constraints[c].valid?(this.manageError(this.constraints[c]),a=!1):!0===this.constraints[c].valid&&(this.removeError(this.constraints[c].name),a=!1!==a);this.valid=a;if(!0===this.valid)return this.removeErrors(),this.errorClassHandler.removeClass(this.options.errorClass).addClass(this.options.successClass),!0;if(!1===this.valid)return this.errorClassHandler.removeClass(this.options.successClass).addClass(this.options.errorClass),



!1;this.ulError&&0===b(this.ulError).children().length&&this.removeErrors();return a},ulErrorManagement:function(){this.ulError="#"+this.hash;this.ulTemplate=b(this.options.errors.errorsWrapper).attr("id",this.hash).addClass("parsley-error-list")},removeError:function(a){a=this.ulError+" ."+a;var c=this;this.options.animate?b(a).fadeOut(this.options.animateDuration,function(){b(this).remove();c.ulError&&0===b(c.ulError).children().length&&c.removeErrors()}):b(a).remove()},addError:function(a){for(var c in a){var d=



b(this.options.errors.errorElem).addClass(c);b(this.ulError).append(this.options.animate?b(d).html(a[c]).hide().fadeIn(this.options.animateDuration):b(d).html(a[c]))}},removeErrors:function(){this.options.animate?b(this.ulError).fadeOut(this.options.animateDuration,function(){b(this).remove()}):b(this.ulError).remove()},reset:function(){this.valid=null;this.removeErrors();this.validatedOnce=!1;this.errorClassHandler.removeClass(this.options.successClass).removeClass(this.options.errorClass);for(var a in this.constraints)this.constraints[a].valid=



null;return this},manageError:function(a){b(this.ulError).length||this.manageErrorContainer();if(!("required"===a.name&&null!==this.getVal()&&0<this.getVal().length)&&(!this.isRequired||!("required"!==a.name&&(null===this.getVal()||0===this.getVal().length)))){var c=a.name,d=!1!==this.options.errorMessage?"custom-error-message":c,g={};a=!1!==this.options.errorMessage?this.options.errorMessage:"type"===a.name?this.Validator.messages[c][a.requirements]:"undefined"===typeof this.Validator.messages[c]?



this.Validator.messages.defaultMessage:this.Validator.formatMesssage(this.Validator.messages[c],a.requirements);b(this.ulError+" ."+d).length||(g[d]=a,this.addError(g))}},manageErrorContainer:function(){var a=this.options.errorContainer||this.options.errors.container(this.element,this.isRadioOrCheckbox),c=this.options.animate?this.ulTemplate.show():this.ulTemplate;"undefined"!==typeof a?b(a).append(c):!this.isRadioOrCheckbox?this.$element.after(c):this.$element.parent().after(c)},addListener:function(a){for(var b in a)this.options.listeners[b]=



a[b]},destroy:function(){this.$element.removeClass("parsley-validated");this.reset().$element.off("."+this.type).removeData(this.type)}};var q=function(a,b,d){this.initMultiple(a,b);this.inherit(a,b);this.Validator=new l(b);this.init(a,d||"ParsleyFieldMultiple")};q.prototype={constructor:q,initMultiple:function(a,c){this.element=a;this.$element=b(a);this.group=c.group||!1;this.hash=this.getName();this.siblings=this.group?'[data-group="'+this.group+'"]':'input[name="'+this.$element.attr("name")+'"]';



this.isRadioOrCheckbox=!0;this.isRadio=this.$element.is("input[type=radio]");this.isCheckbox=this.$element.is("input[type=checkbox]");this.errorClassHandler=c.errors.classHandler(a,this.isRadioOrCheckbox)||this.$element.parent()},inherit:function(a,b){var d=new r(a,b,"ParsleyFieldMultiple"),g;for(g in d)"undefined"===typeof this[g]&&(this[g]=d[g])},getName:function(){if(this.group)return"parsley-"+this.group;if("undefined"===typeof this.$element.attr("name"))throw"A radio / checkbox input must have a data-group attribute or a name to be Parsley validated !";



return"parsley-"+this.$element.attr("name").replace(/(:|\.|\[|\])/g,"")},getVal:function(){if(this.isRadio)return b(this.siblings+":checked").val()||"";if(this.isCheckbox){var a=[];b(this.siblings+":checked").each(function(){a.push(b(this).val())});return a}},bindValidationEvents:function(){this.valid=null;this.$element.addClass("parsley-validated");this.$element.off("."+this.type);var a=this,c=(!this.options.trigger?"":this.options.trigger)+(/change/i.test(this.options.trigger)?"":" change"),c=c.replace(/^\s+/g,



"").replace(/\s+$/g,"");b(this.siblings).each(function(){b(this).on(c.split(" ").join("."+a.type+" "),!1,b.proxy(a.eventValidation,a))})}};var m=function(a,b,d){this.init(a,b,d||"parsleyForm")};m.prototype={constructor:m,init:function(a,c,d){this.type=d;this.items=[];this.$element=b(a);this.options=c;var g=this;this.$element.find(c.inputs).each(function(){g.addItem(this)});this.$element.on("submit."+this.type,!1,b.proxy(this.validate,this))},addListener:function(a){for(var b in a)if(/Field/.test(b))for(var d=



0;d<this.items.length;d++)this.items[d].addListener(a);else this.options.listeners[b]=a[b]},addItem:function(a){if(b(a).is(this.options.excluded))return!1;a=b(a).parsley(this.options);a.setParent(this);this.items.push(a)},removeItem:function(a){a=b(a).parsley();for(var c=0;c<this.items.length;c++)if(this.items[c].hash===a.hash)return this.items[c].destroy(),this.items.splice(c,1),!0;return!1},validate:function(a){var b=!0;this.focusedField=!1;for(var d=0;d<this.items.length;d++)if("undefined"!==typeof this.items[d]&&



!1===this.items[d].validate()&&(b=!1,!this.focusedField&&"first"===this.options.focus||"last"===this.options.focus))this.focusedField=this.items[d].$element;this.focusedField&&!b&&this.focusedField.focus();a=this.options.listeners.onFormSubmit(b,a,this);return"undefined"!==typeof a?a:b},isValid:function(){for(var a=0;a<this.items.length;a++)if(!1===this.items[a].isValid())return!1;return!0},removeErrors:function(){for(var a=0;a<this.items.length;a++)this.items[a].parsley("reset")},destroy:function(){for(var a=



0;a<this.items.length;a++)this.items[a].destroy();this.$element.off("."+this.type).removeData(this.type)},reset:function(){for(var a=0;a<this.items.length;a++)this.items[a].reset()}};b.fn.parsley=function(a,c){function d(d,j){var l=b(d).data(j);if(!l){switch(j){case "parsleyForm":l=new m(d,g,"parsleyForm");break;case "parsleyField":l=new r(d,g,"parsleyField");break;case "parsleyFieldMultiple":l=new q(d,g,"parsleyFieldMultiple");break;default:return}b(d).data(j,l)}return"string"===typeof a&&"function"===



typeof l[a]?(l=l[a](c),"undefined"!==typeof l?l:b(d)):l}var g=b.extend(!0,{},b.fn.parsley.defaults,"undefined"!==typeof window.ParsleyConfig?window.ParsleyConfig:{},a,this.data()),j=null;b(this).is("form")||!0===b(this).data("bind")?j=d(b(this),"parsleyForm"):b(this).is(g.inputs)&&!b(this).is(g.excluded)&&(j=d(b(this),!b(this).is("input[type=radio], input[type=checkbox]")?"parsleyField":"parsleyFieldMultiple"));return"function"===typeof c?c():j};b.fn.parsley.Constructor=m;b.fn.parsley.defaults={inputs:"input, textarea, select",



excluded:"input[type=hidden], input[type=file], :disabled",trigger:!1,animate:!0,animateDuration:300,focus:"first",validationMinlength:3,successClass:"parsley-success",errorClass:"parsley-error",errorMessage:!1,validators:{},showErrors:!0,messages:{},validateIfUnchanged:!1,errors:{classHandler:function(){},container:function(){},errorsWrapper:"<ul></ul>",errorElem:"<li></li>"},listeners:{onFieldValidate:function(){return!1},onFormSubmit:function(){},onFieldError:function(){},onFieldSuccess:function(){}}};



b(window).on("load",function(){b('[data-validate="parsley"]').each(function(){b(this).parsley()})})}(window.jQuery||window.Zepto);



