 // attach the button to the main container 'cool clever stuff'
 var button = document.createElement('button');
 button.classList.add('btn-inline','px-5','CTA','themeBackgroundColor','btn','btn-lg','my-2','my-lg-0','callUs');
 document.querySelector('#bs-example-navbar-collapse-1').appendChild(button);
// add bootstrap classes for a multi level dropdown
jQuery(($)=>{
    // add classes
$('.navbar-collapse li a').addClass('themeSecondaryTextColor');
var right = "&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-right'></i>"
var angle = "&nbsp;&nbsp;<i class='fas fa-angle-down'></i>"
$('.dropdown-menu').addClass('px-3');
$('.dropdown-menu .dropdown').addClass('dropdown-submenu');
$('.dropdown-submenu .dropdown').addClass('dropdown-submenu');
$('.dropdown-menu .dropdown-submenu').removeClass('dropdown');
$('.dropdown-submenu .dropdown-submenu').removeClass('dropdown');
$('.dropdown-submenu > a').append(right);
$('.dropdown > a').append(angle);
$('.dropdown-submenu > a').css({
    'font-weight':'bold',
});
$(document).ready(function(){
    $('.dropdown-submenu > a').on("mouseover", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
});
// add tailwind classes to the nav links
$('.nav-item').addClass('mx-1');
// wrap the aside elements in bootstrap card
$('.sidebar .widget').addClass('m-3 p-3');
});
