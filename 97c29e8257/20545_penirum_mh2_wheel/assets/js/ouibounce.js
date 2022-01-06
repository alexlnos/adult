'use strict';!function(root,factory){if("function"==typeof define&&define.amd){define(factory);}else{if("object"==typeof exports){module.exports=factory(require,exports,module);}else{root.ouibounce=factory();}}}(this,function(trusted,Orienter,dialogModule){return function(builderID,_config){function setDefault(value,defaultValue){return "undefined"==typeof value?defaultValue:value;}
function setDefaultCookieExpire(days){var ttl=24*days*60*60*1e3;var d=new Date;return d.setTime(d.getTime()+ttl),"; expires="+d.toUTCString();}
function get(){if(!isDisabled()){el.addEventListener("mouseleave",pointerUpHandler);el.addEventListener("mouseenter",item);el.addEventListener("keydown",c);}}
function pointerUpHandler(e){if(!(e.clientY>sensitivity)){_delayTimer=setTimeout(fire,delay);}}
function item(){if(_delayTimer){clearTimeout(_delayTimer);_delayTimer=null;}}
function c(params){if(!g){if(params.metaKey&&76===params.keyCode){g=true;_delayTimer=setTimeout(fire,delay);}}}
function checkCookieValue(cookieName,value){return parseCookies()[cookieName]===value;}
function parseCookies(){var sessionOperatorStrings=document.cookie.split("; ");var result={};var i=sessionOperatorStrings.length-1;for(;i>=0;i--){var arrMatch=sessionOperatorStrings[i].split("=");result[arrMatch[0]]=arrMatch[1];}
return result;}
function isDisabled(){return checkCookieValue(cookieName,"true")&&!aggressive;}
function fire(){if(!isDisabled()){if(builderID){builderID.style.display="block";}
fireAnimate();disable();}}
function disable(actions){var options=actions||{};if("undefined"!=typeof options.cookieExpire){cookieExpire=setDefaultCookieExpire(options.cookieExpire);}
if(options.sitewide===true){sitewide=";path=/";}
if("undefined"!=typeof options.cookieDomain){cookieDomain=";domain="+options.cookieDomain;}
if("undefined"!=typeof options.cookieName){cookieName=options.cookieName;}
document.cookie=cookieName+"=true"+cookieExpire+cookieDomain+sitewide;el.removeEventListener("mouseleave",pointerUpHandler);el.removeEventListener("mouseenter",item);el.removeEventListener("keydown",c);}
var config=_config||{};var aggressive=config.aggressive||false;var sensitivity=setDefault(config.sensitivity,20);var timer=setDefault(config.timer,1e3);var delay=setDefault(config.delay,0);var fireAnimate=config.callback||function(){};var cookieExpire=setDefaultCookieExpire(config.cookieExpire)||"";var cookieDomain=config.cookieDomain?";domain="+config.cookieDomain:"";var cookieName=config.cookieName?config.cookieName:"viewedOuibounceModal";var sitewide=config.sitewide===true?";path=/":"";var _delayTimer=null;var el=document.documentElement;setTimeout(get,timer);var g=false;return{fire:fire,disable:disable,isDisabled:isDisabled};};});var _ouibounce=ouibounce(document.getElementById("ouibounce-modal"),{aggressive:true,timer:500,delay:50,sensitivity:15,callback:function(){console.log("ouibounce fired!");}});$("body").on("click",function(){$("#ouibounce-modal").hide();});$("#ouibounce-modal .modal-footer").on("click",function(){$("#ouibounce-modal").hide();});$("#ouibounce-modal .modal").on("click",function(event){event.stopPropagation();});$("#close").click(function(){$("#popup").hide();});