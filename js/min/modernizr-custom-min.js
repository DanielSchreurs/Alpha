!function(e,t,n){function i(e,t){return typeof e===t}function r(e){var t=h.className,n=f._config.classPrefix||"";if(g&&(t=t.baseVal),f._config.enableJSClass){var i=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(i,"$1"+n+"js$2")}f._config.enableClasses&&(t+=" "+n+e.join(" "+n),g?h.className.baseVal=t:h.className=t)}function a(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):g?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function o(e,t){return!!~(""+e).indexOf(t)}function s(e,t){return e-1===t||e===t||e+1===t}function d(){var e=t.body;return e||(e=a(g?"svg":"body"),e.fake=!0),e}function l(e,n,i,r){var o,s,l,c,u="modernizr",p=a("div"),f=d();if(parseInt(i,10))for(;i--;)l=a("div"),l.id=r?r[i]:u+(i+1),p.appendChild(l);return o=a("style"),o.type="text/css",o.id="s"+u,(f.fake?f:p).appendChild(o),f.appendChild(p),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(t.createTextNode(e)),p.id=u,f.fake&&(f.style.background="",f.style.overflow="hidden",c=h.style.overflow,h.style.overflow="hidden",h.appendChild(f)),s=n(p,e),f.fake?(f.parentNode.removeChild(f),h.style.overflow=c,h.offsetHeight):p.parentNode.removeChild(p),!!s}function c(e,t){if("object"==typeof e)for(var n in e)C(e,n)&&c(n,e[n]);else{e=e.toLowerCase();var i=e.split("."),a=f[i[0]];if(2==i.length&&(a=a[i[1]]),"undefined"!=typeof a)return f;t="function"==typeof t?t():t,1==i.length?f[i[0]]=t:(!f[i[0]]||f[i[0]]instanceof Boolean||(f[i[0]]=new Boolean(f[i[0]])),f[i[0]][i[1]]=t),r([(t&&0!=t?"":"no-")+i.join("-")]),f._trigger(e,t)}return f}var u=[],p={_version:"3.0.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){u.push({name:e,fn:t,options:n})},addAsyncTest:function(e){u.push({name:null,fn:e})}},f=function(){};f.prototype=p,f=new f,f.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var A="CSS"in e&&"supports"in e.CSS,m="supportsCSS"in e;f.addTest("supports",A||m),f.addTest("target",function(){var t=e.document;if(!("querySelectorAll"in t))return!1;try{return t.querySelectorAll(":target"),!0}catch(n){return!1}}),f.addTest("microdata","getItems"in t),f.addTest("picture","HTMLPictureElement"in e),f.addTest("svgfilters",function(){var t=!1;try{t="SVGFEColorMatrixElement"in e&&2==SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(n){}return t});var h=t.documentElement;f.addTest("cssall","all"in h.style),f.addTest("willchange","willChange"in h.style);var g="svg"===h.nodeName.toLowerCase();f.addTest("canvas",function(){var e=a("canvas");return!(!e.getContext||!e.getContext("2d"))}),f.addTest("video",function(){var e=a("video"),t=!1;try{(t=!!e.canPlayType)&&(t=new Boolean(t),t.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),t.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),t.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),t.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),t.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(n){}return t}),f.addTest("webanimations","animate"in a("div")),f.addTest("bgpositionshorthand",function(){var e=a("a"),t=e.style,n="right 10px bottom 10px";return t.cssText="background-position: "+n+";",t.backgroundPosition===n}),f.addTest("multiplebgs",function(){var e=a("a").style;return e.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(e.background)}),f.addTest("csspointerevents",function(){var e=a("a").style;return e.cssText="pointer-events:auto","auto"===e.pointerEvents}),f.addTest("cssremunit",function(){var e=a("a").style;try{e.fontSize="3rem"}catch(t){}return/rem/.test(e.fontSize)}),f.addTest("rgba",function(){var e=a("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1}),f.addTest("capture","capture"in a("input")),f.addTest("formattribute",function(){var e,n=a("form"),i=a("input"),r=a("div"),o="formtest"+(new Date).getTime(),s=!1;n.id=o;try{i.setAttribute("form",o)}catch(d){t.createAttribute&&(e=t.createAttribute("form"),e.nodeValue=o,i.setAttributeNode(e))}return r.appendChild(n),r.appendChild(i),h.appendChild(r),s=n.elements&&1===n.elements.length&&i.form==n,r.parentNode.removeChild(r),s}),f.addTest("fileinput",function(){if(navigator.userAgent.match(/(Android (1.0|1.1|1.5|1.6|2.0|2.1))|(Windows Phone (OS 7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle\/(1.0|2.0|2.5|3.0))/))return!1;var e=a("input");return e.type="file",!e.disabled}),f.addTest("placeholder","placeholder"in a("input")&&"placeholder"in a("textarea")),f.addTest("sandbox","sandbox"in a("iframe")),f.addTest("seamless","seamless"in a("iframe")),f.addTest("srcset","srcset"in a("img")),f.addTest("scriptasync","async"in a("script")),f.addTest("stylescoped","scoped"in a("style")),f.addTest("sizes","sizes"in a("img"));var v=p._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];p._prefixes=v,f.addTest("csscalc",function(){var e="width:",t="calc(10px);",n=a("a");return n.style.cssText=e+v.join(t+e),!!n.style.length}),f.addTest("cubicbezierrange",function(){var e=a("a");return e.style.cssText=v.join("transition-timing-function:cubic-bezier(1,0,0,1.1); "),!!e.style.length}),f.addTest("cssgradients",function(){var e="background-image:",t="gradient(linear,left top,right bottom,from(#9f9),to(white));",n="linear-gradient(left top,#9f9, white);",i=e+v.join(n+e).slice(0,-e.length);f._config.usePrefixes&&(i+=e+"-webkit-"+t);var r=a("a"),o=r.style;return o.cssText=i,(""+o.backgroundImage).indexOf("gradient")>-1}),f.addTest("opacity",function(){var e=a("a").style;return e.cssText=v.join("opacity:.55;"),/^0.55$/.test(e.opacity)}),f.addTest("csspositionsticky",function(){var e="position:",t="sticky",n=a("a"),i=n.style;return i.cssText=e+v.join(t+";"+e).slice(0,-e.length),-1!==i.position.indexOf(t)});var y={elem:a("modernizr")};f._q.push(function(){delete y.elem}),f.addTest("cssexunit",function(){var e,t=y.elem.style;try{t.fontSize="3ex",e=-1!==t.fontSize.indexOf("ex")}catch(n){e=!1}return e}),f.addTest("hsla",function(){var e=a("a").style;return e.cssText="background-color:hsla(120,40%,100%,.5)",o(e.backgroundColor,"rgba")||o(e.backgroundColor,"hsla")});var b={}.toString;f.addTest("svgforeignobject",function(){return!!t.createElementNS&&/SVGForeignObject/.test(b.call(t.createElementNS("http://www.w3.org/2000/svg","foreignObject")))}),f.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(b.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))});var w=p.testStyles=l;f.addTest("hiddenscroll",function(){return w("#modernizr {width:100px;height:100px;overflow:scroll}",function(e){return e.offsetWidth===e.clientWidth})}),f.addTest("checked",function(){return w("#modernizr {position:absolute} #modernizr input {margin-left:10px} #modernizr :checked {margin-left:20px;display:block}",function(e){var t=a("input");return t.setAttribute("type","checkbox"),t.setAttribute("checked","checked"),e.appendChild(t),20===t.offsetLeft})}),w("#modernizr{display: table; direction: ltr}#modernizr div{display: table-cell; padding: 10px}",function(e){var t,n=e.childNodes;t=n[0].offsetLeft<n[1].offsetLeft,f.addTest("displaytable",t,{aliases:["display-table"]})},2);var T=function(){var e=navigator.userAgent,t=e.match(/applewebkit\/([0-9]+)/gi)&&parseFloat(RegExp.$1),n=e.match(/w(eb)?osbrowser/gi),i=e.match(/windows phone/gi)&&e.match(/iemobile\/([0-9])+/gi)&&parseFloat(RegExp.$1)>=9,r=533>t&&e.match(/android/gi);return n||r||i}();T?f.addTest("fontface",!1):w('@font-face {font-family:"font";src:url("https://")}',function(e,n){var i=t.getElementById("smodernizr"),r=i.sheet||i.styleSheet,a=r?r.cssRules&&r.cssRules[0]?r.cssRules[0].cssText:r.cssText||"":"",o=/src/i.test(a)&&0===a.indexOf(n.split(" ")[0]);f.addTest("fontface",o)}),w('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}',function(e){f.addTest("generatedcontent",e.offsetHeight>=7)}),f.addTest("cssinvalid",function(){return w("#modernizr input{height:0;border:0;padding:0;margin:0;width:10px} #modernizr input:invalid{width:50px}",function(e){var t=a("input");return t.required=!0,e.appendChild(t),t.clientWidth>10})}),w("#modernizr div {width:100px} #modernizr :last-child{width:200px;display:block}",function(e){f.addTest("lastchild",e.lastChild.offsetWidth>e.firstChild.offsetWidth)},2),w("#modernizr div {width:1px} #modernizr div:nth-child(2n) {width:2px;}",function(e){f.addTest("nthchild",function(){for(var t=e.getElementsByTagName("div"),n=!0,i=0;5>i;i++)n=n&&t[i].offsetWidth===i%2+1;return n})},5),w("#modernizr{overflow: scroll; width: 40px; height: 40px; }#"+v.join("scrollbar{width:0px} #modernizr::").split("#").slice(1).join("#")+"scrollbar{width:0px}",function(e){f.addTest("cssscrollbar",40==e.scrollWidth)}),w("#modernizr{position: absolute; top: -10em; visibility:hidden; font: normal 10px arial;}#subpixel{float: left; font-size: 33.3333%;}",function(t){var n=t.firstChild;n.innerHTML="This is a text written in Arial",f.addTest("subpixelfont",e.getComputedStyle?"44px"!==e.getComputedStyle(n,null).getPropertyValue("width"):!1)},1,["subpixel"]),f.addTest("cssvalid",function(){return w("#modernizr input{height:0;border:0;padding:0;margin:0;width:10px} #modernizr input:valid{width:50px}",function(e){var t=a("input");return e.appendChild(t),t.clientWidth>10})}),w("#modernizr1{width: 50vmax}#modernizr2{width:50px;height:50px;overflow:scroll}",function(t){var n=t.childNodes[1],i=t.childNodes[0],r=parseInt((i.offsetWidth-i.clientWidth)/2,10),a=h.clientWidth/100,o=h.clientHeight/100,d=parseInt(50*Math.max(a,o),10),l=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).width,10);f.addTest("cssvmaxunit",s(d,l)||s(d,l-r))},2),w("#modernizr1{width: 50vm;width:50vmin}#modernizr2{width:50px;height:50px;overflow:scroll}",function(t){var n=t.childNodes[1],i=t.childNodes[0],r=parseInt((i.offsetWidth-i.clientWidth)/2,10),a=h.clientWidth/100,o=h.clientHeight/100,d=parseInt(50*Math.min(a,o),10),l=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).width,10);f.addTest("cssvminunit",s(d,l)||s(d,l-r))},2),f.addTest("formvalidation",function(){var t=a("form");if(!("checkValidity"in t&&"addEventListener"in t))return!1;if("reportValidity"in t)return!0;var n,i=!1;return f.formvalidationapi=!0,t.addEventListener("submit",function(t){(!e.opera||e.operamini)&&t.preventDefault(),t.stopPropagation()},!1),t.innerHTML='<input name="modTest" required><button></button>',w("#modernizr form{position:absolute;top:-99999em}",function(e){e.appendChild(t),n=t.getElementsByTagName("input")[0],n.addEventListener("invalid",function(e){i=!0,e.preventDefault(),e.stopPropagation()},!1),f.formvalidationmessage=!!n.validationMessage,t.getElementsByTagName("button")[0].click()}),i});var x=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return l("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();p.mq=x,f.addTest("mediaqueries",x("only all"));var C;!function(){var e={}.hasOwnProperty;C=i(e,"undefined")||i(e.call,"undefined")?function(e,t){return t in e&&i(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),p._l={},p.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),f.hasOwnProperty(e)&&setTimeout(function(){f._trigger(e,f[e])},0)},p._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,i;for(e=0;e<n.length;e++)(i=n[e])(t)},0),delete this._l[e]}},f._q.push(function(){p.addTest=c}),f.addAsyncTest(function(){if(!f.canvas)return!1;var e=new Image,t=a("canvas"),n=t.getContext("2d");e.onload=function(){c("apng",function(){return"undefined"==typeof t.getContext?!1:(n.drawImage(e,0,0),0===n.getImageData(0,0,1,1).data[3])})},e.src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACGFjVEwAAAABAAAAAcMq2TYAAAANSURBVAiZY2BgYPgPAAEEAQB9ssjfAAAAGmZjVEwAAAAAAAAAAQAAAAEAAAAAAAAAAAD6A+gBAbNU+2sAAAARZmRBVAAAAAEImWNgYGBgAAAABQAB6MzFdgAAAABJRU5ErkJggg=="}),f.addAsyncTest(function(){var e=new Image;e.onload=e.onerror=function(){c("jpeg2000",1==e.width)},e.src="data:image/jp2;base64,/0//UQAyAAAAAAABAAAAAgAAAAAAAAAAAAAABAAAAAQAAAAAAAAAAAAEBwEBBwEBBwEBBwEB/1IADAAAAAEAAAQEAAH/XAAEQED/ZAAlAAFDcmVhdGVkIGJ5IE9wZW5KUEVHIHZlcnNpb24gMi4wLjD/kAAKAAAAAABYAAH/UwAJAQAABAQAAf9dAAUBQED/UwAJAgAABAQAAf9dAAUCQED/UwAJAwAABAQAAf9dAAUDQED/k8+kEAGvz6QQAa/PpBABr994EAk//9k="}),f.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var E=a("input"),S="search tel url email datetime date month week time datetime-local number range color".split(" "),k={};f.inputtypes=function(e){for(var i,r,a,o=e.length,s=":)",d=0;o>d;d++)E.setAttribute("type",i=e[d]),a="text"!==E.type&&"style"in E,a&&(E.value=s,E.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(i)&&E.style.WebkitAppearance!==n?(h.appendChild(E),r=t.defaultView,a=r.getComputedStyle&&"textfield"!==r.getComputedStyle(E,null).WebkitAppearance&&0!==E.offsetHeight,h.removeChild(E)):/^(search|tel)$/.test(i)||(a=/^(url|email|number)$/.test(i)?E.checkValidity&&E.checkValidity()===!1:E.value!=s)),k[e[d]]=!!a;return k}(S),f.addTest("localizednumber",function(){if(!f.inputtypes.number)return!1;if(!f.formvalidation)return!1;var e,n=a("div"),i=d(),r=function(){return h.insertBefore(i,h.firstElementChild||h.firstChild)}();n.innerHTML='<input type="number" value="1.0" step="0.1"/>';var o=n.childNodes[0];r.appendChild(n),o.focus();try{t.execCommand("InsertText",!1,"1,1")}catch(s){}return e="number"===o.type&&1.1===o.valueAsNumber&&o.checkValidity(),r.removeChild(n),i.fake&&r.parentNode.removeChild(r),e});var z="Moz O ms Webkit",B=p._config.usePrefixes?z.toLowerCase().split(" "):[];p._domPrefixes=B,f.addTest("fileinputdirectory",function(){var e=a("input"),t="directory";if(e.type="file",t in e)return!0;for(var n=0,i=B.length;i>n;n++)if(B[n]+t in e)return!0;return!1})}(window,document),window.alert("ouiiii");