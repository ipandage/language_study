(function(a){a.fn.jdSlider=function(s){var m=this;var j,p=0;var c=this[0];var l=a(this).find(".jd-slider-container");var d=a(this).find(".jd-slider-item");var q=0;var f=false;var e=d.eq(0).width()+s.marginLeft;var n=0;var g="onorientationchange" in window;var r=g?"orientationchange":"resize";var k={initX:0,initY:0,startX:0,endX:0,sliderX:0,_sliderDirection:1,startY:0,sliderFlag:false,finalX:0,runFlag:true};var h=a.extend({lineNum:1,fitToScreen:false,isCoupon:true,sliderWidth:q,sliderItemWidth:e,sliderX:n,itemPerScreen:p,wrapperWidth:j,isRight:false,guessNum:24,lessFlag:false},s);var b=function(){h.wrapperWidth=a(c).width();if(h.lineNum==1){var u=0;for(var t=0;t<d.length;t++){u=u+d.eq(t).width()+s.marginLeft}h.sliderWidth=u}else{h.sliderWidth=(Number(d.width())+s.marginLeft)*parseInt(d.length/h.lineNum)+10}h.itemPerScreen=parseInt(h.wrapperWidth/h.sliderItemWidth);h.sliderX=h.itemPerScreen*h.sliderItemWidth;l.css({width:h.sliderWidth})};var i=function(t){if(!k.runFlag){return}if(t!=undefined){}if(a("#suite-slider").attr("opend")){l.css("-webkit-transform","translate3d(0,0,0)")}k.endX=0;if(h.lessFlag&&h.lineNum!=1&&h.guessNum<8){h.lineNum=1}b();if(h.sliderWidth<=h.wrapperWidth){f=true}window.addEventListener(r,function(){clearTimeout(u);var u=setTimeout(function(){b()},200)})};var o=function(t){k.runFlag=false;l.css("-webkit-transform","translate3d("+(k.endX=t)+"px,0,0)");l.css("-webkit-transition","500ms")};c.addEventListener("touchstart",function(u){if(f){return}k.sliderFlag=true;var t=u.touches[0];k.startX=t.pageX;k.initX=t.pageX;k.finalX=t.pageX;k.initY=t.pageY;u.stopPropagation()});c.addEventListener("touchmove",function(u){if(f){return}var t=u.touches[0];if(k.sliderFlag&&Math.abs(t.pageY-k.initY)/Math.abs(t.pageX-k.initX)<0.6){k._sliderDirection=(t.pageX-k.startX<0)?"LEFT":"RIGHT";k.finalX=t.pageX;u.preventDefault()}else{k.sliderFlag=false}u.stopPropagation()});l[0].addEventListener("webkitTransitionEnd",function(){k.runFlag=true},false);c.addEventListener("touchend",function(v){if(f){return}if(!k.sliderFlag){return}var u=v.touches[0];if(Math.abs(k.finalX-k.startX)<50){return}if(k.endX>0){o(k.endX=0)}else{if(k.endX<-(h.sliderWidth-h.wrapperWidth)){o(k.endX=-(h.sliderWidth-h.wrapperWidth))}else{if(k._sliderDirection=="LEFT"){if(!h.isCoupon){var t=h.sliderWidth-h.wrapperWidth;k.sliderX=(t-Math.abs(k.sliderX)<h.wrapperWidth)?-t:k.sliderX-h.wrapperWidth}else{var t=h.sliderWidth-h.sliderX;if(t-Math.abs(k.sliderX)<h.wrapperWidth){h.isRight=true}k.sliderX=(t-Math.abs(k.sliderX)<h.wrapperWidth)?-(h.sliderWidth-h.wrapperWidth):k.sliderX-h.sliderX}o(k.sliderX)}else{if(!h.isCoupon){k.sliderX=(k.sliderX+h.wrapperWidth>0)?0:k.sliderX+h.wrapperWidth}else{if(h.isRight){h.isRight=false;k.sliderX=(k.sliderX+h.wrapperWidth>0)?0:k.sliderX+h.sliderX*2-h.wrapperWidth}else{k.sliderX=(k.sliderX+h.wrapperWidth>0)?0:k.sliderX+h.sliderX}}o(k.sliderX)}}}k.sliderFlag=false;v.stopPropagation()});return i()}})(Zepto);var slide=(function(){var a=function(c){return new b(c)};function b(c){this.elem=c;this.oBox=document.querySelector(c);this.aLi=document.querySelectorAll(c+" [data-ul-child=child]");this.oUl=document.querySelector(c+" [data-slide-ul=firstUl]");this.now=0;this.on0ff=false}b.prototype={init:function(c){var c=c||{},e=this.aLi;this.defaults={startIndex:0,loop:false,smallBtn:false,number:false,laseMoveFn:false,location:false,preDef:"lnr",autoPlay:false,autoHeight:false,preFn:null,lastImgSlider:false,playTime:6000};b.extend(this.defaults,c);this.now=this.defaults.startIndex;if(this.defaults.smallBtn){this.oSmallBtn=document.querySelector(this.elem+' [data-small-btn="smallbtn"]');this.oSmallBtn.innerHTML=this.addSmallBtn();this.btns=document.querySelectorAll(this.elem+' [data-ol-btn="btn"]');for(var d=0;d<this.btns.length;d++){this.btns[d].className=""}this.btns[b.getNow(this.now,e.length)].className="active"}if(this.defaults.number){this.slideNub=document.getElementById("slide-nub");this.slideSum=document.getElementById("slide-sum");this.slideNub.innerHTML=this.now+1;this.slideSum.innerHTML=this.aLi.length}if(this.aLi.length<=2){if(this.defaults.loop){this.oUl.innerHTML+=this.oUl.innerHTML}this.aLi=document.querySelectorAll(this.elem+" [data-ul-child=child]");this.need=true}if(this.defaults.autoPlay){this.pause();this.play()}this.liInit();this.bind()},bind:function(){var f=this.oBox,e=b._device();if(!e.hasTouch){f.style.cursor="pointer";f.ondragstart=function(g){if(g){return false}return true}}var d="onorientationchange" in window;var c=d?"orientationchange":"resize";f.addEventListener(e.startEvt,this);window.addEventListener(c,this);window.addEventListener("touchcancel",this);if(navigator.userAgent.indexOf("baidubrowser")){window.addEventListener("focusin",this);window.addEventListener("focusout",this)}else{window.addEventListener("blur",this);window.addEventListener("focus",this)}},liInit:function(){var d=this.aLi,f=d.length,m=this.oUl,l=this.oBox.offsetWidth,e=this.now,k=this;if(this.defaults.preFn){this.defaults.preFn()}m.style.width=l*f+"px";for(var h=0;h<f;h++){b.setStyle(d[h],{WebkitTransition:"all 0ms ease",transition:"all 0ms ease",height:"auto"})}if(this.defaults.autoHeight){var c=this.oBox.offsetWidth;if(c>=640){c=640}else{if(c<=320){c=320}}for(var h=0;h<f;h++){d[h].style.width=c+"px"}var j=d[0].getElementsByTagName("img")[0];if(j){var g=new Image();g.onload=function(){k.oBox.style.height=d[0].offsetHeight+"px";for(var n=0;n<d.length;n++){d[n].style.height=d[0].offsetHeight+"px"}};g.src=j.src}else{this.oBox.style.height=d[0].offsetHeight+"px"}}if(this.defaults.loop){for(var h=0;h<f;h++){b.setStyle(d[h],{position:"absolute",left:0,top:0});if(h==b.getNow(e,f)){b.setStyle(d[h],{WebkitTransform:"translate3d("+0+"px, 0px, 0px)",transform:"translate3d("+0+"px, 0px, 0px)",zIndex:10})}else{if(h==b.getPre(e,f)){b.setStyle(d[h],{WebkitTransform:"translate3d("+-l+"px, 0px, 0px)",transform:"translate3d("+-l+"px, 0px, 0px)",zIndex:10})}else{if(h==b.getNext(e,f)){b.setStyle(d[h],{WebkitTransform:"translate3d("+l+"px, 0px, 0px)",transform:"translate3d("+l+"px, 0px, 0px)",zIndex:10})}else{b.setStyle(d[h],{WebkitTransform:"translate3d("+0+"px, 0px, 0px)",transform:"translate3d("+0+"px, 0px, 0px)",zIndex:9})}}}}}else{for(var h=0;h<f;h++){b.setStyle(d[h],{WebkitTransform:"translate3d("+e*-l+"px, 0px, 0px)",transform:"translate3d("+e*-l+"px, 0px, 0px)"})}}},handleEvent:function(d){var c=b._device(),e=this.oBox;switch(d.type){case c.startEvt:if(this.defaults.autoPlay){this.pause()}this.startHandler(d);break;case c.moveEvt:if(this.defaults.autoPlay){this.pause()}this.moveHandler(d);break;case c.endEvt:if(this.defaults.autoPlay){this.pause();this.play()}this.endHandler(d);break;case"touchcancel":if(this.defaults.autoPlay){this.pause();this.play()}this.endHandler(d);break;case"orientationchange":this.orientationchangeHandler();break;case"resize":this.orientationchangeHandler();break;case"focus":if(this.defaults.autoPlay){this.pause();this.play()}break;case"blur":if(this.defaults.autoPlay){this.pause()}break;case"focusin":if(this.defaults.autoPlay){this.pause();this.play()}break;case"focusout":if(this.defaults.autoPlay){this.pause()}break}},startHandler:function(e){this.on0ff=true;var d=b._device(),f=d.hasTouch,h=this.oBox,c=this.now,g=this.aLi;h.addEventListener(d.moveEvt,this);h.addEventListener(d.endEvt,this);this.downTime=Date.now();this.downX=f?e.targetTouches[0].pageX:e.clientX-h.offsetLeft;this.downY=f?e.targetTouches[0].pageY:e.clientY-h.offsetTop;this.startT=b.getTranX(g[b.getNow(c,g.length)]);this.startNowT=b.getTranX(g[b.getNow(c,g.length)]);this.startPreT=b.getTranX(g[b.getPre(c,g.length)]);this.startNextT=b.getTranX(g[b.getNext(c,g.length)]);b.stopPropagation(e)},moveHandler:function(o){var l=this.oBox,e=b._device();if(this.on0ff){var m=e.hasTouch;var h=m?o.targetTouches[0].pageX:o.clientX-l.offsetLeft;var g=m?o.targetTouches[0].pageY:o.clientY-l.offsetTop;var c=this.aLi,f=c.length,d=this.now,q=c[0].offsetWidth;if(this.defaults.preDef=="all"){b.stopDefault(o)}for(var k=0;k<f;k++){b.setStyle(c[k],{WebkitTransition:"all 0ms ease",transition:"all 0ms ease"})}if(Math.abs(h-this.downX)<Math.abs(g-this.downY)){if(this.defaults.preDef=="tnd"&&this.defaults.preDef!="all"){b.stopDefault(o)}}else{if(Math.abs(h-this.downX)>10){if(this.defaults.preDef=="lnr"&&this.defaults.preDef!="all"){b.stopDefault(o)}if(this.defaults.loop){j=(this.startNowT+h-this.downX).toFixed(4);preT=(this.startPreT+h-this.downX).toFixed(4);nextT=(this.startNextT+h-this.downX).toFixed(4);b.move(c[b.getNow(d,f)],j,10);b.move(c[b.getPre(d,f)],preT,10);b.move(c[b.getNext(d,f)],nextT,10)}else{var j=b.getTranX(c[d]);if(j>0){var n=((this.startT+h-this.downX)/3).toFixed(4);for(var k=0;k<f;k++){b.move(c[k],n)}}else{if(Math.abs(j)>=Math.abs((f-1)*q)){var n=(this.startT+(h-this.downX)/3).toFixed(4);for(var k=0;k<f;k++){b.move(c[k],n)}if(this.defaults.laseMoveFn&&typeof this.defaults.laseMoveFn=="function"){var p=(n-this.startT).toFixed(4);this.defaults.laseMoveFn(p)}}else{var n=(this.startT+h-this.downX).toFixed(4);for(var k=0;k<f;k++){b.move(c[k],n)}}}}}}}else{l.removeEventListener(e.moveEvt,this);l.removeEventListener(e.endEvt,this)}b.stopPropagation(o)},endHandler:function(i){i.stopPropagation();this.on0ff=false;var f=Date.now(),e=b._device(),h=e.hasTouch,g=this.oBox,l=h?i.changedTouches[0].pageX:i.clientX-g.offsetLeft,k=h?i.changedTouches[0].pageY:i.clientY-g.offsetTop,c=this.aLi,j=c[0].offsetWidth,d=b.getTranX(c[b.getNow(this.now,c.length)]);if(l-this.downX<30&&l-this.downX>=0&&Math.abs(k-this.downY)<30){this.tab(d,"+=");return"click"}else{if(l-this.downX>-30&&l-this.downX<=0&&Math.abs(k-this.downY)<30){this.tab(d,"-=");return"click"}else{if(Math.abs(k-this.downY)-Math.abs(l-this.downX)>30&&l-this.downX<0){this.tab(d,"-=");return}if(Math.abs(k-this.downY)-Math.abs(l-this.downX)>30&&l-this.downX>0){this.tab(d,"+=");return}if(l<this.downX){if(this.downX-l>j/3||f-this.downTime<200){this.now++;this.tab(d,"++");return"left"}else{this.tab(d,"+=");return"stay"}}else{if(l-this.downX>j/3||f-this.downTime<200){this.now--;this.tab(d,"--");return"right"}else{this.tab(d,"-=");return"stay"}}}}b.stopPropagation(i);g.removeEventListener(e.moveEvt,this);g.removeEventListener(e.endEvt,this)},tab:function(e,l,f){var c=this.aLi,k=c.length,r=c[0].offsetWidth,q=this.oBox,g=b._device(),p=this,d=this.now;if(this.defaults.loop){if(d<0){d=k-1;this.now=k-1}for(var o=0;o<k;o++){if(o==b.getPre(d,k)){var h;switch(l){case"++":h=300;break;case"--":h=0;break;case"+=":h=0;break;case"-=":h=300;break;default:break}b.setStyle(c[b.getPre(d,k)],{WebkitTransform:"translate3d("+-r+"px, 0px, 0px)",transform:"translate3d("+-r+"px, 0px, 0px)",zIndex:10,WebkitTransition:"all "+h+"ms ease",transition:"all "+h+"ms ease"})}else{if(o==b.getNow(d,k)){b.setStyle(c[b.getNow(d,k)],{WebkitTransform:"translate3d("+0+"px, 0px, 0px)",transform:"translate3d("+0+"px, 0px, 0px)",zIndex:10,WebkitTransition:"all "+300+"ms ease",transition:"all "+300+"ms ease"})}else{if(o==b.getNext(d,k)){var h;switch(l){case"++":h=0;break;case"--":h=300;break;case"+=":h=300;break;case"-=":h=0;break;default:break}b.setStyle(c[b.getNext(d,k)],{WebkitTransform:"translate3d("+r+"px, 0px, 0px)",transform:"translate3d("+r+"px, 0px, 0px)",zIndex:10,WebkitTransition:"all "+h+"ms ease",transition:"all "+h+"ms ease"})}else{b.setStyle(c[o],{WebkitTransform:"translate3d("+0+"px, 0px, 0px)",transform:"translate3d("+0+"px, 0px, 0px)",zIndex:9,WebkitTransition:"all "+0+"ms ease",transition:"all "+0+"ms ease"})}}}}}else{for(var o=0;o<k;o++){b.setStyle(c[o],{WebkitTransition:"all "+300+"ms ease",transition:"all "+300+"ms ease"})}if(d<=0){d=0;this.now=0}if(d>k-1){if(f){d=0;this.now=0}else{d=k-1;this.now=k-1}}for(var n=0;n<k;n++){b.setStyle(c[n],{WebkitTransform:"translate3d("+(-d*r)+"px, 0px, 0px)",transform:"translate3d("+(-d*r)+"px, 0px, 0px)"})}}if(this.defaults.smallBtn){for(var o=0;o<this.btns.length;o++){this.btns[o].className=""}if(this.need){this.btns[b.getNow(d,k/2)].className="active"}else{this.btns[b.getNow(d,k)].className="active"}}if(this.defaults.number){this.slideNub.innerHTML=b.getNow(d,k)+1}c[b.getNow(d,k)].addEventListener("webkitTransitionEnd",m,false);c[b.getNow(d,k)].addEventListener("transitionend",m,false);function m(){if(p.defaults.location){if(e<-(k-1)*r-r/5){if(p.defaults.lastImgSlider&&typeof p.defaults.lastImgSlider=="function"){p.defaults.laseMoveFn(0);p.defaults.lastImgSlider()}}}c[b.getNow(p.now,k)].removeEventListener("webkitTransitionEnd",m,false);c[b.getNow(p.now,k)].removeEventListener("transitionend",m,false)}},play:function(){var c=this;c.timer=setInterval(function(){c.now++;c.tab(null,"++",true)},this.defaults.playTime)},pause:function(){var c=this;clearInterval(c.timer)},orientationchangeHandler:function(){var c=this;setTimeout(function(){c.liInit()},300)},addSmallBtn:function(){var d="",e=this.aLi;for(var c=0;c<e.length;c++){if(c==0){d+='<span class="active" data-ol-btn="btn"></span>'}else{d+='<span data-ol-btn="btn"></span>'}}return d},show:function(){this.oBox.style.display="inline-block"},hide:function(){this.oBox.style.display="none"}};b.extend=function(d,c){for(name in c){if(c[name]!==undefined){d[name]=c[name]}}};b.extend(b,{setStyle:function(d,c){for(name in c){d.style[name]=c[name]}},getTranX:function(e){var d=e.style.WebkitTransform||e.style.transform;var f=d.indexOf("translate3d(");var c=parseInt(d.substring(f+12,d.length-13));return c},_device:function(){var f=!!("ontouchstart" in window||window.DocumentTouch&&document instanceof window.DocumentTouch);var d="touchstart";var e="touchmove";var c="touchend";return{hasTouch:f,startEvt:d,moveEvt:e,endEvt:c}},getNow:function(d,c){return d%c},getPre:function(e,c){if(e%c-1<0){var d=c-1}else{var d=e%c-1}return d},getNext:function(e,d){if(e%d+1>d-1){var c=0}else{var c=e%d+1}return c},move:function(e,c,d){var f=d||null;if(f){e.style.zIndex=f}b.setStyle(e,{WebkitTransform:"translate3d("+c+"px, 0px, 0px)",transform:"translate3d("+c+"px, 0px, 0px)"})},stopDefault:function(c){if(c&&c.preventDefault){c.preventDefault()}else{window.event.returnValue=false}return false},stopPropagation:function(c){if(c&&c.stopPropagation){c.stopPropagation()}else{c.cancelBubble=true}}});return a})();(function(d){var c=d.jdM=d.jdM||{};localStorageUtil=function(){var h=window.localStorage?true:false;function f(k){var j=null;if(h&&k){rss=window.localStorage.getItem(k)}return rss}function i(j,k){if(h&&j){try{window.localStorage[j]=k}catch(l){console.log("error")}}}function e(j){if(h&&j){window.localStorage.removeItem(j)}}function g(){if(h){b.each(window.localStorage,function(l,m,k,j){window.localStorage.removeItem(k)})}}return{get:f,set:i,remove:e,removeAll:g}};var a={toString:function(e,m){var l=undefined;var j=e.getFullYear();var i=e.getMonth()+1;var k=e.getDate();var f=e.getHours();var g=e.getMinutes();var h=e.getSeconds();i=(parseInt(i)<10)?("0"+i):(i);k=(parseInt(k)<10)?("0"+k):(k);f=(parseInt(f)<10)?("0"+f):(f);g=(parseInt(g)<10)?("0"+g):(g);h=(parseInt(h)<10)?("0"+h):(h);if("yyyy-MM-dd HH:mm:ss"==m){l=j+"-"+i+"-"+k+" "+f+":"+g+":"+h}else{if("yyyy-MM-dd"==m){l=j+"-"+i+"-"+k}else{if("yyyy-MM"==m){l=j+"-"+i}else{if("yyyy"==m){l=j}}}}return l},toDate:function(j){if(j.length==19){var i=j.substring(0,4);var k=j.substring(5,7);var f=j.substring(8,10);var e=j.substring(11,13);var g=j.substring(14,16);var h=j.substring(17,19);return new Date(i,k-1,f,e,g,h)}else{if(j.length==10){var i=j.substring(0,4);var k=j.substring(5,7);var f=j.substring(8,10);return new Date(i,k-1,f)}else{if(j.length==7){var i=j.substring(0,4);var k=j.substring(5,7);return new Date(i,k-1)}else{if(j.length==4){var i=j.substring(0,4);return new Date(i)}else{return undefined}}}}},getMonthDays:function(e,h){var f=new Array(31,28,31,30,31,30,31,31,30,31,30,31);var g=e.getFullYear();if(typeof h=="undefined"){h=e.getMonth()}if(((0==(g%4))&&((0!=(g%100))||(0==(g%400))))&&h==1){return 29}else{return f[h]}},addDays:function(e,g){var f=(arguments.length==1)?a.toDate(a.today()):a.toDate(g);f=new Date(f.getTime()+parseInt(e)*24*3600*1000);return a.toString(new Date(f),"yyyy-MM-dd HH:mm:ss")},addMonths:function(i,h){var e=(arguments.length==1)?a.toDate(a.today()):a.toDate(h);var f=e.getMonth();var g=e.getDate();var j=a.getMonthDays(e,e.getMonth()+parseInt(i));if(g>j){e.setDate(j)}e.setMonth(e.getMonth()+parseInt(i));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},addMonthsForStart:function(g,f){var e=(arguments.length==1)?a.today():f;e=a.addMonths(g,e);return a.firstDayOfMonth(e)},addMonthsForEnd:function(g,f){var e=(arguments.length==1)?a.today():f;e=a.addMonths(g,e);return a.addDays(-1,a.firstDayOfMonth(e))},addYears:function(f,g){var e=(arguments.length==1)?a.toDate(a.today()):a.toDate(g);e.setYear(e.getYear()+parseInt(f));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},addYearsForStart:function(e,g){var f=(arguments.length==1)?a.today():g;f=a.addYears(e,f);return a.firstDayOfYear(f)},addYearsForEnd:function(e,g){var f=(arguments.length==1)?a.today():g;f=a.addYears(e,f);return a.firstDayOfYear(f)},sunOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay())*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},monOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-1)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},tueOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-2)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},wedOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-3)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},turOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-4)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},friOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-5)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},satOfWeek:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e=new Date(e-(e.getDay()-6)*(24*3600*1000));return a.toString(e,"yyyy-MM-dd HH:mm:ss")},firstDayOfMonth:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e.setDate(1);return a.toString(e,"yyyy-MM-dd HH:mm:ss")},lastDayOfMonth:function(e){e=(arguments.length==0)?a.today():(e);e=a.addMonths(1,e);e=a.firstDayOfMonth(e);e=a.addDays(-1,e);return e},firstDayOfYear:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e.setMonth(0);e.setDate(1);return a.toString(e,"yyyy-MM-dd HH:mm:ss")},lastDayOfYear:function(f){var e=(arguments.length==0)?a.toDate(a.today()):a.toDate(f);e.setMonth(11);e.setDate(31);return a.toString(e,"yyyy-MM-dd HH:mm:ss")},today:function(e){if(arguments.length==0){return a.toString(new Date(),"yyyy-MM-dd")}else{return a.toString(new Date(),e)}}};var b={$mObj:{},merge:function(g,f,e){if(!g||!f||typeof f!="object"){return g}if(!e){for(var j in f){g[j]=f[j]}}else{var i,h;for(i in f){if(f.hasOwnProperty(i)){h=f[i];if(h&&h.constructor===Object){if(g[i]&&g[i].constructor===Object){b.merge(g[i],h)}else{g[i]=h}}else{g[i]=h}}}}return g},clone:function(f,e){return b.merge({},f,e)},namespace:function(){var f=d,m,h,k,g,l,n;for(k=0,l=arguments.length;k<l;k++){var e=arguments[k];if(b.$mObj.namespace[e]){continue}m=e.split(".");for(g=0,n=m.length;g<n;g++){h=m[g];if(!f[h]){f[h]={}}f=f[h]}b.$mObj.namespace[e]=true}},extend:function(){var e=function(g){for(var f in g){if(!g.hasOwnProperty(f)){continue}this[f]=g[f]}};return function(i,h){(typeof i=="function")||(i=function(){});var f=function(){i.apply(this,arguments)};var g=function(){};g.prototype=i.prototype;f.prototype=new g();f.prototype.constructor=f;f.superclass=i.prototype;if(i.prototype.constructor===Object.prototype.constructor){i.prototype.constructor=i}f.override=function(k){if(f.prototype&&k&&typeof k=="object"){for(var j in k){f.prototype[j]=k[j]}}};f.prototype.override=e;f.override(h);return f}}(),each:function(g,m,k){if(b.isEmpty(g)||!m){return}if(b.isArray(g)){for(var j=0,f=g.length;j<f;j++){try{if(m.call(k,g[j],j,g)===false){return}}catch(n){M.log(n,"error")}}}else{for(var h in g){if(!g.hasOwnProperty(h)){continue}try{if(m.call(k,g[h],h,g)===false){return}}catch(n){M.log(n,"error")}}}},contains:function(h,g){if(b.isArray(h)){if("indexOf" in Array.prototype){return h.indexOf(g)!==-1}var e,f;for(e=0,f=h.length;e<f;e++){if(h[e]===g){return true}}return false}else{return !b.isEmpty(h)&&g in h}},isEmpty:function(e,g){if((typeof e==="undefined")||(e===null)||(!g?e==="":false)||(b.isArray(e)&&e.length===0)){return true}else{if(b.isObject(e)){for(var f in e){if(Object.prototype.hasOwnProperty.call(e,f)){return false}}return true}}return false},isBlank:function(e){return b.isEmpty(e)?true:b.isEmpty(String(e).replace(/^\s+|\s+$/g,""))},isDefined:function(e){return typeof e==="undefined"},isObject:function(e){if(Object.prototype.toString.call(null)==="[object Object]"){return e!==null&&e!==undefined&&Object.prototype.toString.call(e)==="[object Object]"&&e.ownerDocument===undefined}else{return Object.prototype.toString.call(e)==="[object Object]"}},isFunction:function(e){return Object.prototype.toString.apply(e)==="[object Function]"},isArray:function(e){return Object.prototype.toString.apply(e)==="[object Array]"},isDate:function(e){return Object.prototype.toString.apply(e)==="[object Date]"},isNumber:function(e){return typeof e==="number"&&isFinite(e)},isString:function(e){return typeof e==="string"},isBoolean:function(e){return typeof e==="boolean"}};c.localstorage=new localStorageUtil();c.date=a;c.object=b})(window);