window._boStopParams=["dynamicpage","target","lid","isTesting","name","ver","_boUrl"],function(a){"use strict";if(a.history&&a.history.pushState){var n=function(){var e=a.location.href;if(!~e.indexOf("?"))return{};for(var t,n=e.slice(e.indexOf("?")+1).replace("#","&").split("&"),o={},r=0,i=n.length;r<i;r++)o[(t=n[r].split("="))[0]]=decodeURIComponent(t[1]);return o}(),e=n.tds_host&&"https://"+n.tds_host,t=a.tdsBaseUrl||e||"https://typerock.com";if(1&Number(n.tds_ao)){a.MtuObject="mi",a.mi=a.mi||function(){(mi.q=mi.q||[]).push(arguments)},mi.ts=+new Date,mi("subscribe",{eventName:"backbutton",placement:"lp",handlerUrl:t+"/tds/interlayer",handler:"Backoffer"});var o=document.createElement("script");return o.setAttribute("src",t+"/mtu-integration.js"),document.body.appendChild(o)}if(n._boUrl&&"string"==typeof n._boUrl){var r=a.atob(decodeURIComponent(n._boUrl)),i=a._boStopParams||null,s=function(){var e="";for(var t in n)t&&!~i.indexOf(t)&&(e+="&"+t+"="+(n[t]||""));return e},u=function(){a.removeEventListener("beforeunload",m,!1),l||(l=!0,a.history.pushState(null,null,a.location),a.addEventListener("popstate",c,!1))},c=function(e){e.preventDefault(),setTimeout(function(){f(r+s())},0),a.removeEventListener("popstate",c,!1)},d=/Google Inc/.test(a.navigator.vendor),l=!1;d?(a.addEventListener("beforeunload",m,!1),["mouseup","touchend","keydown"].forEach(function(e){document.body.addEventListener(e,u)})):u()}}function f(e){a.location.href=e}function m(e){e.preventDefault(),setTimeout(function(){f(r+s())},0),setTimeout(function(){a.removeEventListener("beforeunload",m,!1)},100)}}(window);