/*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-geolocation-history !*/
!function(n,o,e){function i(n,o){return typeof n===o}function t(){var n,o,e,t,a,f,d;for(var l in s)if(s.hasOwnProperty(l)){if(n=[],o=s[l],o.name&&(n.push(o.name.toLowerCase()),o.options&&o.options.aliases&&o.options.aliases.length))for(e=0;e<o.options.aliases.length;e++)n.push(o.options.aliases[e].toLowerCase());for(t=i(o.fn,"function")?o.fn():o.fn,a=0;a<n.length;a++)f=n[a],d=f.split("."),1===d.length?Modernizr[d[0]]=t:(!Modernizr[d[0]]||Modernizr[d[0]]instanceof Boolean||(Modernizr[d[0]]=new Boolean(Modernizr[d[0]])),Modernizr[d[0]][d[1]]=t),r.push((t?"":"no-")+d.join("-"))}}var s=[],a={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,o){var e=this;setTimeout(function(){o(e[n])},0)},addTest:function(n,o,e){s.push({name:n,fn:o,options:e})},addAsyncTest:function(n){s.push({name:null,fn:n})}},Modernizr=function(){};Modernizr.prototype=a,Modernizr=new Modernizr,Modernizr.addTest("geolocation","geolocation"in navigator),Modernizr.addTest("history",function(){var o=navigator.userAgent;return-1===o.indexOf("Android 2.")&&-1===o.indexOf("Android 4.0")||-1===o.indexOf("Mobile Safari")||-1!==o.indexOf("Chrome")||-1!==o.indexOf("Windows Phone")||"file:"===location.protocol?n.history&&"pushState"in n.history:!1});var r=[];t(),delete a.addTest,delete a.addAsyncTest;for(var f=0;f<Modernizr._q.length;f++)Modernizr._q[f]();n.Modernizr=Modernizr}(window,document);