<?php
   /* 
   * Theme: PREMIUMPRESS CORE FRAMEWORK FILE
   * Url: www.premiumpress.com
   * Author: Mark Fail
   *
   * THIS FILE WILL BE UPDATED WITH EVERY UPDATE
   * IF YOU WANT TO MODIFY THIS FILE, CREATE A CHILD THEME
   *
   * http://codex.wordpress.org/Child_Themes
   */
   if (!defined('THEME_VERSION')) {	header('HTTP/1.0 403 Forbidden'); exit; }
   
   global $CORE, $userdata, $settings, $post; 
   
  
   ?>
   
  
  
 <style>
			/*
Pure CSS Navigation v1.8
by Adam Culpepper | @adamculpepper
https://github.com/adamculpepper/pure-css-navigation
*/

/* Customizable styles 文字的着色*/
.pure-css-nav > nav ul li a			{color:#555;}

.pure-css-nav > nav > ul > li			{margin-right:0px;}

/* Level 1 一级背景的着色*/
.pure-css-nav > nav ul li				{
	/*background-color:rgba(0, 0, 0, 0.05);*/
	}
.pure-css-nav > nav ul li a			{font-size:0.9rem; /*line-height:50px;*/ padding:8px 5px 8px 0px;}

/* Level 2 and beyond  二级菜单，背景什么的*/
.pure-css-nav > nav ul ul				{
	/*background-color:#d9d9d9;*/
 width:200px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
	}
.pure-css-nav > nav ul ul li a	{font-size:0.8rem; /*line-height:35px;*/ 
	/*二级菜单，大小什么的*/
	padding:13px 20px;
			/*background-color: #FF0;*/
	border: 1px solid rgba(0,0,0,.125);
  border-right-width: 0;
    border-left-width: 0;
    border-radius: 0;
    border-top-width: 0;
	}

/* Hover colors */
.pure-css-nav > nav ul li:hover,
.pure-css-nav > nav ul li li:hover > a:first-child:nth-last-child(2),
.pure-css-nav > nav > ul > li:hover > a:first-child:nth-last-child(2) {
	/* 鼠标移上去背景*/
	background-color:#d3d3d3;
	}

/* Font icon arrow colors */
.pure-css-nav > nav > ul > li > a:first-child:nth-last-child(2):after {color:rgba(0, 0, 0, 0.30);}
.pure-css-nav > nav > ul > li:hover > a:first-child:nth-last-child(2):after {color:rgba(0, 0, 0, 0.60);}
.pure-css-nav > nav ul li li > a:first-child:nth-last-child(2):after {color:rgba(0, 0, 0, 0.30);}
.pure-css-nav > nav ul li li:hover > a:first-child:nth-last-child(2):after {color:rgba(0, 0, 0, 0.60);}

/* Mobile Navigation overlay */
.pure-css-nav.mobile-nav input:checked + label + nav {background-color:rgba(255, 255, 255, 0.9);}

/* //////////////////////////
CORE STYLES BELOW - NO TOUCHY
////////////////////////// */
.pure-css-nav > nav {width:100%;}

.pure-css-nav > nav ul,
.pure-css-nav > nav li					{margin:0; padding:0; list-style:none;}
.pure-css-nav > nav li:hover			{cursor:pointer;}
.pure-css-nav > nav a					{text-decoration:none;}

/* Level 1 */
.pure-css-nav > nav ul					{display:flex; flex-wrap:wrap;}
.pure-css-nav > nav ul li				{overflow:hidden; white-space:nowrap; text-align:left;}
.pure-css-nav > nav ul li:hover			{overflow:visible;}
.pure-css-nav > nav ul > li				{position:relative;}
.pure-css-nav > nav ul li a				{display:block; height:100%;}

/* Level 2 */
.pure-css-nav > nav ul ul				{visibility:hidden; opacity:0; position:absolute; z-index:1; display:block;}
.pure-css-nav > nav ul li:hover > ul	{visibility:visible; opacity:1;}

/* Level 3 */
.pure-css-nav > nav ul ul ul			{top:0; left:100%;}
.pure-css-nav > nav ul ul ul			{
	/*margin-top:5px;*/
	}

/* ---------- */

/* Transitions */
.pure-css-nav > nav ul,
.pure-css-nav > nav ul li,
.pure-css-nav > nav ul li a,
.pure-css-nav > nav ul li a:first-child:nth-last-child(2):after {transition:all 200ms linear;}

.pure-css-nav.mobile-nav				{transition:all 0.5s linear;}
/* ---------- */

/* Arrow styles */
.pure-css-nav > nav ul li a {display:flex; align-items:center;}
.pure-css-nav > nav ul li a:first-child:nth-last-child(2):after {
	content:'';
	display:inline-block;
	width:10px;
	height:5px;
	margin-left:10px;
	opacity:0.50;
	background-repeat:no-repeat;
	background-position:center center;
	background-size:10px 5px;
	background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 5'%3E%3Cpath opacity='.5' d='M1 1v1h1v1h1v1h1v1h2V4h1V3h1V2h1V1h1V0H0v1z'/%3E%3Cpath d='M2 1v1h1v1h1v1h2V3h1V2h1V1h1V0H1v1z'/%3E%3C/svg%3E");

/*旋转箭头*/
-webkit-transform:rotate(-90deg);
    -moz-transform:rotate(-90deg);
}
.pure-css-nav > nav ul ul li a:first-child:nth-last-child(2):before,
.pure-css-nav > nav ul ul li a:first-child:nth-last-child(2):after {content:'';}
.pure-css-nav > nav ul ul li a:first-child:nth-last-child(2):before {order:1; margin-left:10px;}
.pure-css-nav > nav ul ul li a:first-child:nth-last-child(2):after {order:2; margin-left:auto;}

/* ---------- */

/* FontAwesome Icon arrow support */
.pure-css-nav.nav-font-icons ul li a:first-child:nth-last-child(2):after {
	content:'\f078'; /* arrow: down */
	font-family:'FontAwesome';
	opacity:1;
	width:auto;
	height:auto;
	background:none;
}
.pure-css-nav.nav-font-icons ul ul li > a:first-child:nth-last-child(2):after {content:'\f054';} /* arrow: right */

/* ---------- */

/* Justify Navigation (first level equal widths) */
.pure-css-nav.nav-justified > nav > ul {width:100%;}
.pure-css-nav.nav-justified > nav > ul > li {flex:1 1 auto;}
.pure-css-nav.nav-justified > nav > ul > li > a {justify-content:center;}

/* ---------- */

/* Vertical Navigation 宽度*/
.pure-css-nav.nav-vertical nav > ul {
	display:block; width:100%;
	}
.pure-css-nav.nav-vertical nav > ul li a:first-child:nth-last-child(2):after {margin-left:auto;}
.pure-css-nav.nav-vertical nav > ul ul {left:100%; top:0;
	/* margin-top:5px;*/
	}
.pure-css-nav.nav-vertical nav > ul > li	{
	margin-bottom:0px;
	
		/*background-color: #FF0;*/
	border: 1px solid rgba(0,0,0,.125);
  border-right-width: 0;
    border-left-width: 0;
    border-radius: 0;
    border-top-width: 0;
	}

/* ---------- */

/* Mobile Navigation */
.pure-css-nav.mobile-nav input {display:none;}
.pure-css-nav.mobile-nav input + label {margin-bottom:0; z-index:999;}
.pure-css-nav.mobile-nav input + label + nav > ul > li {margin-right:1px;}
.pure-css-nav.mobile-nav input:checked + label {position:absolute; top:8px; right:10px;}
.pure-css-nav.mobile-nav input:checked + label i:before {content:'\f00d';}

/* ---------- */

/* Responsive Breakpoints - down */

/* Extra Small (xs) and down */
@media (max-width:575px) {}

/* Small (sm) and down */
@media (max-width:767px) {}

/* Medium (md) and down */
@media (max-width:991px) {
	.pure-css-nav.mobile-nav > nav {display:none;}
	.pure-css-nav.mobile-nav input:checked + label + nav {display:block;}

/* Mobile Navigation > Animations */
.pure-css-nav.mobile-nav input:checked + label + nav			{animation:mobile-nav-slide-in 0.5s;}
.pure-css-nav.mobile-nav.pure-css-nav-animation-ready input:not(:checked) + label + nav 	{animation:mobile-nav-slide-out 5s; animation-play-state:paused!important;}
.pure-css-nav.mobile-nav input:checked + label i:before		{animation:fade-icon-close 0.5s;}

@keyframes mobile-nav-slide-in {
	0%		{left:-100%; opacity:0; visibility:visible; /*transition-timing-function: linear;*/}
	100%	{left:0; opacity:1;}
}

@keyframes mobile-nav-slide-out {
	0%		{left:0; opacity:1; visibility:visible;}
	100%	{left:-100%; opacity:0; visibility:hidden;}
}
@keyframes fade-icon-close {
	0%		{opacity:0;}
	100%	{opacity:1;}
}


/* Mobile Navigation > Vertical Navigation */
.pure-css-nav.mobile-nav input:checked + label + nav > ul {display:block; width:300px; max-width:100%; height:100%;}
.pure-css-nav.mobile-nav input:checked + label + nav > ul li a:first-child:nth-last-child(2):after {margin-left:auto;}
.pure-css-nav.mobile-nav input:checked + label + nav > ul ul {left:0; top:100%; width:100%;}
.pure-css-nav.mobile-nav input:checked + label + nav > ul > li {margin-bottom:1px;}
.pure-css-nav.mobile-nav input:checked + label + nav > ul li:hover > ul {position:relative; margin-left:10px; border-left:3px solid #999;}
.pure-css-nav.mobile-nav input:checked + label + nav ul ul ul {margin-top:0;}
.pure-css-nav.mobile-nav input:checked + label i:before {animation:anim1 2s;}
@keyframes anim1 {
	from {color:red; background:green;}
}


.pure-css-nav.mobile-nav input + label + nav {
	background-color:rgba(255, 0, 255, 0.9)!important;
	} /* temp */
.pure-css-nav.mobile-nav input + label + nav {
	display:block;
	margin:0 -100%;
	margin:0 calc(50% - 50vw);
	position:fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	z-index:99;
	width:100%;
	height:100%;
}



.pure-css-nav.mobile-nav input:checked + label + nav {

	top:0;
	left:0;
	right:0;
	bottom:0;
	z-index:99;
	width:100%;
	height:100%;




}



.pure-css-nav.mobile-nav input:checked + label + nav			{visibility:visible; opacity:1;}
.pure-css-nav.mobile-nav input:not(:checked) + label + nav 	{visibility:hidden; opacity:0;}
/*
.pure-css-nav.mobile-nav *,
.pure-css-nav.mobile-nav *:before,
.pure-css-nav.mobile-nav *:after {animation-play-state:paused!important;}
*/







.pure-css-nav.mobile-nav:not(:hover) * {
	-webkit-transition: none !important;
	-moz-transition: none !important;
	-ms-transition: none !important;
	-o-transition: none !important;
	border:2px solid red;
}





}

/* Large (lg) and down */
@media (max-width:1199px) {}

/* ---------- */

/* Responsive Breakpoints - up */

/* Small (sm) and up */
@media (min-width:576px) {}

/* Medium (md) and up */
@media (min-width:768px) {}

/* Large (lg) and up */
@media (min-width:992px) {
	.pure-css-nav.mobile-nav input:not(:checked),
	.pure-css-nav.mobile-nav input:not(:checked) + label {display:none;}
}

/* Extra Large (xl) and up */
@media (min-width:1200px) {}

.pure-css-nav a:not([href]),
.pure-css-nav a[href='']:hover,
.pure-css-nav a[href='#']:hover,
.pure-css-nav a[href='']:active,
.pure-css-nav a[href='#']:active {pointer-events:none;}





/*
multi-layer mobile nav
https://codepen.io/tiffachoo/pen/yzZRXK



try not covering the whole window - just the slide out
*/
			
			</style>

 
<div class="card card-filter">
  <div class="card-body">
    <h5 class="card-titlex  ">CATEGORY</h5>
    
  <div class="pure-css-nav nav-vertical mb-5">
					<nav>
<?php 
//echo str_replace("active","font-weight-bold active-item", str_replace("menu-item ","list-group-item d-flex justify-content-between align-items-center px-0 ", str_replace("nav-link","text-dark",do_shortcode('[MAINMENU menu_name="'.$settings['menu_id'].'" class="list-group999 list-group-flush999"][/MAINMENU]')))); 

$from = array('dropdown-toggle nav-link','dropdown-menu');
$to = array('','');
echo str_replace($from,$to,do_shortcode('[MAINMENU menu_name="'.$settings['menu_id'].'" class="list-group999 list-group-flush999"][/MAINMENU]'));

//dropdown-toggle nav-link
?>
</nav>
</div>



</div>
</div>