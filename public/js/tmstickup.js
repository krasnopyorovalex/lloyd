(function($,undefined){var
def={stuckClass:'isStuck'},doc=$(document),anim=false;$.fn.TMStickUp=function(opt){opt=$.extend(true,{},def,opt)
$(this).each(function(){var $this=$(this),posY,isStuck=false,clone=$this.clone().appendTo($this.parent()).addClass(opt.stuckClass),height,stuckedHeight=clone.outerHeight(),opened,tmr
$(window).resize(function(){clearTimeout(tmr)
clone.css({top:isStuck?0:-stuckedHeight,visibility:isStuck?'visible':'hidden'})
tmr=setTimeout(function(){posY=$this.offset().top
height=$this.outerHeight()
stuckedHeight=clone.outerHeight()
opened=$.cookie&&$.cookie('panel1')==='opened'
clone.css({top:isStuck?0:-stuckedHeight})},40)}).resize()
clone.css({position:'fixed',width:'100%'})
$this.on('rePosition',function(e,d){if(isStuck)
clone.animate({marginTop:d},{easing:'linear'})
if(d===0)
opened=false
else
opened=true})
doc.on('scroll',function(){var scrollTop=doc.scrollTop()
if(scrollTop>=posY&&!isStuck){clone.stop().css({visibility:'visible'}).animate({top:0,marginTop:opened?50:0},{})
isStuck=true}
if(scrollTop<posY+height&&isStuck){if($('.search-form_toggle').length>0){if($(window).width()>767){var o_stuck=$('.search-form_toggle'),f_stuck=$('.search-form');if(!anim&&o_stuck.hasClass('active')){anim=true;o_stuck.removeClass('active');f_stuck.removeClass('on').slideUp();anim=false;}}}
$('.sf-menu ul').css('display','none');clone.stop().animate({top:-stuckedHeight,marginTop:0},{duration:200,complete:function(){clone.css({visibility:'hidden'})}});isStuck=false;}}).trigger('scroll')})}})(jQuery)