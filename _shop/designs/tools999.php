<?php
 
add_filter( 'ppt_admin_layouts',  array('sp_tools999',  'data') );
add_filter( 'sp_tools999',  array('sp_tools999',  'load') );
 
class sp_tools999 {

	function __construct(){}		

	public static function data($a){ 
	
		global $CORE;
  
		$a['sp_tools999'] = array(
		
			"key" => "sp_tools999",
		
			"name" 	=> "Tools 999",
			"image"	=> _ppt_demopath()."/designs/tools5.jpg",
						
			"theme"	=> "sp_tools",
			
			
			"color_p" 	=> "#f6931e",
			"color_s" 	=> "#7a7e81",
			
			"order" => 0
 	 		
		);		
		
		return $a;
	
	} 
	
	
	
	public static  function load($core){ global $CORE; 
  
  
 /* fonts */
$core['design']['font_body'] = "";
$core['design']['font_logo'] = "";
$core['design']['font_h1'] = "";
$core['design']['font_h2'] = "";
   
  	
	$core['design']['search_layout'] = "2";
	
	
	/* logo */
	$core['design']['logo_url_aid'] = "";
	$core['design']['logo_url'] = "";
	$core['design']['light_logo_url_aid'] = "";
	$core['design']['light_logo_url'] = "";
	$core['design']['textlogo'] = "Power <i class='fa fa-tools mx-2 text-primary'></i> Tools ";
	$core['design']['color_bg'] = "";
	$core['design']['color_text'] = "";


$core['design']['header_style'] = "header999";
//分类导航
$core['design']['slot1_style'] = "hero_search999";

//image_basic3,图片分类
$core['design']['slot2_style'] = "image_basic3";
$core['design']['slot3_style'] = "image_basic999";

// left image right-text 
$core['design']['slot4_style'] = "text1";
//best seller
$core['design']['slot5_style'] = "listings3";
/*
//一些图片列表 
$core['design']['slot6_style'] = "icon8b";
//
$core['design']['slot7_style'] = "text16";
*/

$core['design']['slot6_style'] = "listings7";
$core['design']['slot7_style'] = "";//"subscribe2";
$core['design']['footer_style'] = "footer1";
$core['design']['slot8_style'] = '';
$core['design']['slot9_style'] = '';
$core['design']['slot10_style'] = '';
$core['design']['color_primary'] = "#a2c535";//主色调
$core['design']['color_secondary'] = "#D2D2D2";
 
 
        /* header4 头条 已经不用 header999了*/    
        $core["header"]["header4"]["section_padding"] = "section-80";     
        $core["header"]["header4"]["section_bg"] = "bg-white";     
        $core["header"]["header4"]["section_pos"] = "";     
        $core["header"]["header4"]["section_w"] = "container";     
        $core["header"]["header4"]["btn_show"] = "yes";     
        $core["header"]["header4"]["btn_link"] = "[link-search]";     
        $core["header"]["header4"]["btn_txt"] = "Search Website";     
        $core["header"]["header4"]["btn_bg"] = "primary";     
        $core["header"]["header4"]["btn_bg_txt"] = "text-light";     
        $core["header"]["header4"]["btn_icon"] = "";     
        $core["header"]["header4"]["btn_icon_pos"] = "before";     
        $core["header"]["header4"]["btn_size"] = "btn-md";     
        $core["header"]["header4"]["btn_margin"] = "mt-0";     
        $core["header"]["header4"]["btn_style"] = "1";     
        $core["header"]["header4"]["btn_font"] = "";     
        $core["header"]["header4"]["topmenu_show"] = ""; 		
 
        /* hero_search999 分类*/    
        $core["home"]["hero_search999"]["section_padding"] = "section-40";     
        $core["home"]["hero_search999"]["section_bg"] = "bg-white";     
        $core["home"]["hero_search999"]["section_pos"] = "";     
        $core["home"]["hero_search999"]["section_w"] = "container";     
        $core["home"]["hero_search999"]["title_show"] = "yes";     
        $core["home"]["hero_search999"]["title"] = "CATEGORIES";     
        $core["home"]["hero_search999"]["subtitle"] = "";     
        $core["home"]["hero_search999"]["desc"] = "";     
        $core["home"]["hero_search999"]["title_style"] = "1";     
        $core["home"]["hero_search999"]["title_pos"] = "left";     
        $core["home"]["hero_search999"]["title_heading"] = "h4";     
        $core["home"]["hero_search999"]["title_margin"] = "mb-4";     
        $core["home"]["hero_search999"]["subtitle_margin"] = "mb-4";     
        $core["home"]["hero_search999"]["desc_margin"] = "mb-4";     
        $core["home"]["hero_search999"]["title_txtcolor"] = "dark";     
        $core["home"]["hero_search999"]["subtitle_txtcolor"] = "dark";     
        $core["home"]["hero_search999"]["desc_txtcolor"] = "opacity-5";     
        $core["home"]["hero_search999"]["title_font"] = "";     
        $core["home"]["hero_search999"]["subtitle_font"] = "";     
        $core["home"]["hero_search999"]["desc_font"] = "";     
        $core["home"]["hero_search999"]["title_txtw"] = "font-weight-bold";     
        $core["home"]["hero_search999"]["subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["hero_search999"]["btn_show"] = "no";     
        $core["home"]["hero_search999"]["btn2_show"] = "no";    
        ///furniture/inline2.jpg 1950*500
        $core["home"]["hero_search999"]["hero_image"] ="/i.png";// _ppt_demopath()."/tools/inline1.jpg";     
        $core["home"]["hero_search999"]["hero_size"] = "hero-medium";     
        $core["home"]["hero_search999"]["hero_txtcolor"] = "light"; 		
 
        /* listings3 */    
        $core["home"]["listings3"]["section_padding"] = "section-40";     
        $core["home"]["listings3"]["section_bg"] = "bg-light";     
        $core["home"]["listings3"]["section_pos"] = "";     
        $core["home"]["listings3"]["section_w"] = "container";     
        $core["home"]["listings3"]["title_show"] = "yes";     
        $core["home"]["listings3"]["title"] = "BEST <i class='fa fa-tools mx-2 text-primary'></i> SELLERS";     
        $core["home"]["listings3"]["subtitle"] = "";     
        $core["home"]["listings3"]["desc"] = "";     
        $core["home"]["listings3"]["title_style"] = "1";     
        $core["home"]["listings3"]["title_pos"] = "center";     
        $core["home"]["listings3"]["title_heading"] = "h2";     
        $core["home"]["listings3"]["title_margin"] = "mb-4";     
        $core["home"]["listings3"]["subtitle_margin"] = "mb-4";     
        $core["home"]["listings3"]["desc_margin"] = "mb-4";     
        $core["home"]["listings3"]["title_txtcolor"] = "dark";     
        $core["home"]["listings3"]["subtitle_txtcolor"] = "dark";     
        $core["home"]["listings3"]["desc_txtcolor"] = "opacity-5";     
        $core["home"]["listings3"]["title_font"] = "";     
        $core["home"]["listings3"]["subtitle_font"] = "";     
        $core["home"]["listings3"]["desc_font"] = "";     
        $core["home"]["listings3"]["title_txtw"] = "font-weight-bold";     
        $core["home"]["listings3"]["subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["listings3"]["datastring"] = " dataonly='1' cat='' show='' custom='new' customvalue='' order='date' orderby='date' debug='0' ";     
        $core["home"]["listings3"]["perrow"] = "5";     
        $core["home"]["listings3"]["card"] = "blank"; 		
        
        
         /* image_basic3  产品分类图片*/    
        $core["home"]["image_basic3"]["section_padding"] = "section-40";     
        $core["home"]["image_basic3"]["section_bg"] = "bg-light";     
        $core["home"]["image_basic3"]["section_pos"] = "";     
        $core["home"]["image_basic3"]["section_w"] = "container";     
        $core["home"]["image_basic3"]["title_show"] = "no";     
        $core["home"]["image_basic3"]["image_block1"] = "/cate1.png";     
        $core["home"]["image_basic3"]["image_block1_effect"] = "3";     
        $core["home"]["image_basic3"]["image_block1_txtpos"] = "bleft";     
        $core["home"]["image_basic3"]["image_block1_title"] = "HAND SAWS";     
        $core["home"]["image_basic3"]["image_block1_subtitle"] = "";     
        $core["home"]["image_basic3"]["image_block1_title_margin"] = "mb-4";     
        $core["home"]["image_basic3"]["image_block1_subtitle_margin"] = "mb-0";     
        $core["home"]["image_basic3"]["image_block1_title_txtcolor"] = "black";     
        $core["home"]["image_basic3"]["image_block1_subtitle_txtcolor"] = "black";     
        $core["home"]["image_basic3"]["image_block1_title_txtsize"] = "lg";     
        $core["home"]["image_basic3"]["image_block1_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic3"]["image_block1_title_font"] = "";     
        $core["home"]["image_basic3"]["image_block1_subtitle_font"] = "";     
        $core["home"]["image_basic3"]["image_block1_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block1_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block1_btn_show"] = "yes";     
        $core["home"]["image_basic3"]["image_block1_btn_txt"] = "shop now";     
        $core["home"]["image_basic3"]["image_block1_btn_bg"] = "primary";     
        $core["home"]["image_basic3"]["image_block1_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic3"]["image_block1_btn_icon"] = "";     
        $core["home"]["image_basic3"]["image_block1_btn_icon_pos"] = "before";     
        $core["home"]["image_basic3"]["image_block1_btn_size"] = "btn-md";     
        $core["home"]["image_basic3"]["image_block1_btn_margin"] = "mt-0";     
        $core["home"]["image_basic3"]["image_block1_btn_style"] = "5";     
        $core["home"]["image_basic3"]["image_block1_btn_font"] = "";     
        $core["home"]["image_basic3"]["image_block1_btn_link"] = "[link-search]";     
        $core["home"]["image_basic3"]["image_block2"] = "/cate2.png";     
        $core["home"]["image_basic3"]["image_block2_effect"] = "3";     
        $core["home"]["image_basic3"]["image_block2_txtpos"] = "bleft";     
        $core["home"]["image_basic3"]["image_block2_title"] = "POWER DRILLS";     
        $core["home"]["image_basic3"]["image_block2_subtitle"] = "";     
        $core["home"]["image_basic3"]["image_block2_title_margin"] = "mb-4";     
        $core["home"]["image_basic3"]["image_block2_subtitle_margin"] = "mb-4";     
        $core["home"]["image_basic3"]["image_block2_title_txtcolor"] = "dark";     
        $core["home"]["image_basic3"]["image_block2_subtitle_txtcolor"] = "dark";     
        $core["home"]["image_basic3"]["image_block2_title_txtsize"] = "lg";     
        $core["home"]["image_basic3"]["image_block2_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic3"]["image_block2_title_font"] = "";     
        $core["home"]["image_basic3"]["image_block2_subtitle_font"] = "";     
        $core["home"]["image_basic3"]["image_block2_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block2_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block2_btn_show"] = "yes";     
        $core["home"]["image_basic3"]["image_block2_btn_txt"] = "shop now";     
        $core["home"]["image_basic3"]["image_block2_btn_bg"] = "primary";     
        $core["home"]["image_basic3"]["image_block2_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic3"]["image_block2_btn_icon"] = "";     
        $core["home"]["image_basic3"]["image_block2_btn_icon_pos"] = "before";     
        $core["home"]["image_basic3"]["image_block2_btn_size"] = "btn-lg";     
        $core["home"]["image_basic3"]["image_block2_btn_margin"] = "mt-0";     
        $core["home"]["image_basic3"]["image_block2_btn_style"] = "5";     
        $core["home"]["image_basic3"]["image_block2_btn_font"] = "";     
        $core["home"]["image_basic3"]["image_block2_btn_link"] = "[link-search]";     
        $core["home"]["image_basic3"]["image_block3"] = "/cate3.png";     
        $core["home"]["image_basic3"]["image_block3_effect"] = "3";     
        $core["home"]["image_basic3"]["image_block3_txtpos"] = "bleft";     
        $core["home"]["image_basic3"]["image_block3_title"] = "POWER SAWS";     
        $core["home"]["image_basic3"]["image_block3_subtitle"] = "";     
        $core["home"]["image_basic3"]["image_block3_title_margin"] = "mb-4";     
        $core["home"]["image_basic3"]["image_block3_subtitle_margin"] = "mb-4";     
        $core["home"]["image_basic3"]["image_block3_title_txtcolor"] = "black";     
        $core["home"]["image_basic3"]["image_block3_subtitle_txtcolor"] = "dark";     
        $core["home"]["image_basic3"]["image_block3_title_txtsize"] = "lg";     
        $core["home"]["image_basic3"]["image_block3_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic3"]["image_block3_title_font"] = "";     
        $core["home"]["image_basic3"]["image_block3_subtitle_font"] = "";     
        $core["home"]["image_basic3"]["image_block3_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block3_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic3"]["image_block3_btn_show"] = "yes";     
        $core["home"]["image_basic3"]["image_block3_btn_txt"] = "shop now";     
        $core["home"]["image_basic3"]["image_block3_btn_bg"] = "primary";     
        $core["home"]["image_basic3"]["image_block3_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic3"]["image_block3_btn_icon"] = "";     
        $core["home"]["image_basic3"]["image_block3_btn_icon_pos"] = "before";     
        $core["home"]["image_basic3"]["image_block3_btn_size"] = "btn-md";     
        $core["home"]["image_basic3"]["image_block3_btn_margin"] = "mt-0";     
        $core["home"]["image_basic3"]["image_block3_btn_style"] = "5";     
        $core["home"]["image_basic3"]["image_block3_btn_font"] = "";     
        $core["home"]["image_basic3"]["image_block3_btn_link"] = "[link-search]";     
        $core["home"]["image_basic3"]["image_block4_effect"] = "1";     
        $core["home"]["image_basic3"]["image_block4_txtpos"] = "left";     
        $core["home"]["image_basic3"]["image_block5_effect"] = "1";     
        $core["home"]["image_basic3"]["image_block5_txtpos"] = "left";     
        $core["home"]["image_basic3"]["image_block6_effect"] = "1";     
        $core["home"]["image_basic3"]["image_block6_txtpos"] = "left"; 		
 
 
 
 
  /* image_basic999 */    
        $core["home"]["image_basic999"]["section_padding"] = "section-40";     
        $core["home"]["image_basic999"]["section_bg"] = "bg-light";     
        $core["home"]["image_basic999"]["section_pos"] = "";     
        $core["home"]["image_basic999"]["section_w"] = "container";     
        $core["home"]["image_basic999"]["title_show"] = "no";     
        $core["home"]["image_basic999"]["image_block1"] = "/cate4.png";     
        $core["home"]["image_basic999"]["image_block1_effect"] = "3";     
        $core["home"]["image_basic999"]["image_block1_txtpos"] = "bleft";     
        $core["home"]["image_basic999"]["image_block1_title"] = "HAND SAWS";     
        $core["home"]["image_basic999"]["image_block1_subtitle"] = "";     
        $core["home"]["image_basic999"]["image_block1_title_margin"] = "mb-4";     
        $core["home"]["image_basic999"]["image_block1_subtitle_margin"] = "mb-0";     
        $core["home"]["image_basic999"]["image_block1_title_txtcolor"] = "black";     
        $core["home"]["image_basic999"]["image_block1_subtitle_txtcolor"] = "black";     
        $core["home"]["image_basic999"]["image_block1_title_txtsize"] = "lg";     
        $core["home"]["image_basic999"]["image_block1_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic999"]["image_block1_title_font"] = "";     
        $core["home"]["image_basic999"]["image_block1_subtitle_font"] = "";     
        $core["home"]["image_basic999"]["image_block1_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block1_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block1_btn_show"] = "yes";     
        $core["home"]["image_basic999"]["image_block1_btn_txt"] = "shop now";     
        $core["home"]["image_basic999"]["image_block1_btn_bg"] = "primary";     
        $core["home"]["image_basic999"]["image_block1_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic999"]["image_block1_btn_icon"] = "";     
        $core["home"]["image_basic999"]["image_block1_btn_icon_pos"] = "before";     
        $core["home"]["image_basic999"]["image_block1_btn_size"] = "btn-md";     
        $core["home"]["image_basic999"]["image_block1_btn_margin"] = "mt-0";     
        $core["home"]["image_basic999"]["image_block1_btn_style"] = "5";     
        $core["home"]["image_basic999"]["image_block1_btn_font"] = "";     
        $core["home"]["image_basic999"]["image_block1_btn_link"] = "[link-search]";     
        $core["home"]["image_basic999"]["image_block2"] = "/cate5.png";     
        $core["home"]["image_basic999"]["image_block2_effect"] = "3";     
        $core["home"]["image_basic999"]["image_block2_txtpos"] = "bleft";     
        $core["home"]["image_basic999"]["image_block2_title"] = "POWER DRILLS";     
        $core["home"]["image_basic999"]["image_block2_subtitle"] = "";     
        $core["home"]["image_basic999"]["image_block2_title_margin"] = "mb-4";     
        $core["home"]["image_basic999"]["image_block2_subtitle_margin"] = "mb-4";     
        $core["home"]["image_basic999"]["image_block2_title_txtcolor"] = "dark";     
        $core["home"]["image_basic999"]["image_block2_subtitle_txtcolor"] = "dark";     
        $core["home"]["image_basic999"]["image_block2_title_txtsize"] = "lg";     
        $core["home"]["image_basic999"]["image_block2_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic999"]["image_block2_title_font"] = "";     
        $core["home"]["image_basic999"]["image_block2_subtitle_font"] = "";     
        $core["home"]["image_basic999"]["image_block2_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block2_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block2_btn_show"] = "yes";     
        $core["home"]["image_basic999"]["image_block2_btn_txt"] = "shop now";     
        $core["home"]["image_basic999"]["image_block2_btn_bg"] = "primary";     
        $core["home"]["image_basic999"]["image_block2_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic999"]["image_block2_btn_icon"] = "";     
        $core["home"]["image_basic999"]["image_block2_btn_icon_pos"] = "before";     
        $core["home"]["image_basic999"]["image_block2_btn_size"] = "btn-lg";     
        $core["home"]["image_basic999"]["image_block2_btn_margin"] = "mt-0";     
        $core["home"]["image_basic999"]["image_block2_btn_style"] = "5";     
        $core["home"]["image_basic999"]["image_block2_btn_font"] = "";     
        $core["home"]["image_basic999"]["image_block2_btn_link"] = "[link-search]";     
        $core["home"]["image_basic999"]["image_block3"] = "/cate6.png";     
        $core["home"]["image_basic999"]["image_block3_effect"] = "3";     
        $core["home"]["image_basic999"]["image_block3_txtpos"] = "bleft";     
        $core["home"]["image_basic999"]["image_block3_title"] = "POWER SAWS";     
        $core["home"]["image_basic999"]["image_block3_subtitle"] = "";     
        $core["home"]["image_basic999"]["image_block3_title_margin"] = "mb-4";     
        $core["home"]["image_basic999"]["image_block3_subtitle_margin"] = "mb-4";     
        $core["home"]["image_basic999"]["image_block3_title_txtcolor"] = "black";     
        $core["home"]["image_basic999"]["image_block3_subtitle_txtcolor"] = "dark";     
        $core["home"]["image_basic999"]["image_block3_title_txtsize"] = "lg";     
        $core["home"]["image_basic999"]["image_block3_subtitle_txtsize"] = "md";     
        $core["home"]["image_basic999"]["image_block3_title_font"] = "";     
        $core["home"]["image_basic999"]["image_block3_subtitle_font"] = "";     
        $core["home"]["image_basic999"]["image_block3_title_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block3_subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["image_basic999"]["image_block3_btn_show"] = "yes";     
        $core["home"]["image_basic999"]["image_block3_btn_txt"] = "shop now";     
        $core["home"]["image_basic999"]["image_block3_btn_bg"] = "primary";     
        $core["home"]["image_basic999"]["image_block3_btn_bg_txt"] = "text-white";     
        $core["home"]["image_basic999"]["image_block3_btn_icon"] = "";     
        $core["home"]["image_basic999"]["image_block3_btn_icon_pos"] = "before";     
        $core["home"]["image_basic999"]["image_block3_btn_size"] = "btn-md";     
        $core["home"]["image_basic999"]["image_block3_btn_margin"] = "mt-0";     
        $core["home"]["image_basic999"]["image_block3_btn_style"] = "5";     
        $core["home"]["image_basic999"]["image_block3_btn_font"] = "";     
        $core["home"]["image_basic999"]["image_block3_btn_link"] = "[link-search]";     
        $core["home"]["image_basic999"]["image_block4_effect"] = "1";     
        $core["home"]["image_basic999"]["image_block4_txtpos"] = "left";     
        $core["home"]["image_basic999"]["image_block5_effect"] = "1";     
        $core["home"]["image_basic999"]["image_block5_txtpos"] = "left";     
        $core["home"]["image_basic999"]["image_block6_effect"] = "1";     
        $core["home"]["image_basic999"]["image_block6_txtpos"] = "left"; 		
 
 
        /* icon8b */    
        $core["home"]["icon8b"]["section_padding"] = "section-80";     
        $core["home"]["icon8b"]["section_bg"] = "bg-white";     
        $core["home"]["icon8b"]["section_pos"] = "";     
        $core["home"]["icon8b"]["section_w"] = "container";     
        $core["home"]["icon8b"]["title_show"] = "no";     
        $core["home"]["icon8b"]["btn_show"] = "yes";     
        $core["home"]["icon8b"]["btn_link"] = "[link-search]";     
        $core["home"]["icon8b"]["btn_txt"] = "Search Website";     
        $core["home"]["icon8b"]["btn_bg"] = "primary";     
        $core["home"]["icon8b"]["btn_bg_txt"] = "";     
        $core["home"]["icon8b"]["btn_icon"] = "";     
        $core["home"]["icon8b"]["btn_icon_pos"] = "before";     
        $core["home"]["icon8b"]["btn_size"] = "btn-md";     
        $core["home"]["icon8b"]["btn_margin"] = "mt-0";     
        $core["home"]["icon8b"]["btn_style"] = "1";     
        $core["home"]["icon8b"]["btn_font"] = "";     
        $core["home"]["icon8b"]["btn2_show"] = "no";     
        $core["home"]["icon8b"]["icon1"] = "";     
        $core["home"]["icon8b"]["icon1_title"] = "Chippers";     
        $core["home"]["icon8b"]["icon1_desc"] = "";     
        $core["home"]["icon8b"]["icon1_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon1_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon1_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon1_type"] = "image";     
        $core["home"]["icon8b"]["icon1_image"] = _ppt_demopath()."/tools/cat1.jpg";     
        $core["home"]["icon8b"]["icon2"] = "";     
        $core["home"]["icon8b"]["icon2_title"] = "Power Drills";     
        $core["home"]["icon8b"]["icon2_desc"] = "";     
        $core["home"]["icon8b"]["icon2_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon2_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon2_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon2_type"] = "image";     
        $core["home"]["icon8b"]["icon2_image"] = _ppt_demopath()."/tools/cat2.jpg";     
        $core["home"]["icon8b"]["icon3"] = "";     
        $core["home"]["icon8b"]["icon3_title"] = "Saws";     
        $core["home"]["icon8b"]["icon3_desc"] = "";     
        $core["home"]["icon8b"]["icon3_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon3_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon3_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon3_type"] = "image";     
        $core["home"]["icon8b"]["icon3_image"] = _ppt_demopath()."/tools/cat4.jpg";     
        $core["home"]["icon8b"]["icon4"] = "";     
        $core["home"]["icon8b"]["icon4_title"] = "Tools";     
        $core["home"]["icon8b"]["icon4_desc"] = "";     
        $core["home"]["icon8b"]["icon4_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon4_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon4_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon4_type"] = "image";     
        $core["home"]["icon8b"]["icon4_image"] = _ppt_demopath()."/tools/cat6.jpg";     
        $core["home"]["icon8b"]["icon5"] = "";     
        $core["home"]["icon8b"]["icon5_title"] = "Chippers";     
        $core["home"]["icon8b"]["icon5_desc"] = "";     
        $core["home"]["icon8b"]["icon5_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon5_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon5_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon5_type"] = "image";     
        $core["home"]["icon8b"]["icon5_image"] = _ppt_demopath()."/tools/cat5.jpg";     
        $core["home"]["icon8b"]["icon6"] = "";     
        $core["home"]["icon8b"]["icon6_title"] = "asd";     
        $core["home"]["icon8b"]["icon6_desc"] = "";     
        $core["home"]["icon8b"]["icon6_link"] = "[link-search]";     
        $core["home"]["icon8b"]["icon6_txtcolor"] = "dark";     
        $core["home"]["icon8b"]["icon6_iconcolor"] = "";     
        $core["home"]["icon8b"]["icon6_type"] = "image";     
        $core["home"]["icon8b"]["icon6_image"] = _ppt_demopath()."/tools/cat7.jpg"; 	
        
        
        
         /* text1 介绍页岩*/    
        $core["home"]["text1"]["section_padding"] = "section-60";     
        $core["home"]["text1"]["section_bg"] = "bg-light";     
        $core["home"]["text1"]["section_pos"] = "";     
        $core["home"]["text1"]["section_w"] = "container";     
        $core["home"]["text1"]["title_show"] = "yes";     
        $core["home"]["text1"]["title"] = " FREE SHIPPING  on All Bags & Rolls";     
        $core["home"]["text1"]["subtitle"] = "UP to 50% OFF Foodsealer Foodsaver";     
        $core["home"]["text1"]["desc"] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue.";     
        $core["home"]["text1"]["title_style"] = "1";     
        $core["home"]["text1"]["title_pos"] = "left";     
        $core["home"]["text1"]["title_heading"] = "h2";     
        $core["home"]["text1"]["title_margin"] = "mb-4";     
        $core["home"]["text1"]["subtitle_margin"] = "mb-4";     
        $core["home"]["text1"]["desc_margin"] = "mb-4";     
        $core["home"]["text1"]["title_txtcolor"] = "dark";     
        $core["home"]["text1"]["subtitle_txtcolor"] = "primary";     
        $core["home"]["text1"]["desc_txtcolor"] = "opacity-5";     
        $core["home"]["text1"]["title_font"] = "";     
        $core["home"]["text1"]["subtitle_font"] = "";     
        $core["home"]["text1"]["desc_font"] = "";     
        $core["home"]["text1"]["title_txtw"] = "font-weight-bold";     
        $core["home"]["text1"]["subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["text1"]["btn_show"] = "yes";     
        $core["home"]["text1"]["btn_link"] = "[link-search]";     
        $core["home"]["text1"]["btn_txt"] = "shop now";     
        $core["home"]["text1"]["btn_bg"] = "primary";     
        $core["home"]["text1"]["btn_bg_txt"] = "text-light";     
        $core["home"]["text1"]["btn_icon"] = "fas fa-long-arrow-alt-right";     
        $core["home"]["text1"]["btn_icon_pos"] = "after";     
        $core["home"]["text1"]["btn_size"] = "btn-xl";     
        $core["home"]["text1"]["btn_margin"] = "mt-0";     
        $core["home"]["text1"]["btn_style"] = "5";     
        $core["home"]["text1"]["btn_font"] = "";     
        $core["home"]["text1"]["btn2_show"] = "no";     
        $core["home"]["text1"]["text_image1"] =  "/freeshipping.png";     
        $core["home"]["text1"]["text_image1_title"] = "asd";     
        $core["home"]["text1"]["text_image1_link"] = "[link-search]";     
        $core["home"]["text1"]["text_image2"] = _ppt_demopath()."/furniture/image2.jpg";     
        $core["home"]["text1"]["text_image2_title"] = "";     
        $core["home"]["text1"]["text_image2_link"] = "[link-search]"; 		
 
 
 	
 
        /* text16 */    
        $core["home"]["text16"]["section_padding"] = "section-100";     
        $core["home"]["text16"]["section_bg"] = "bg-light";     
        $core["home"]["text16"]["section_pos"] = "";     
        $core["home"]["text16"]["section_w"] = "container";     
        $core["home"]["text16"]["title_show"] = "yes";     
        $core["home"]["text16"]["title"] = "POWER <i class='fa fa-tools mx-2 text-primary'></i> TOOLS";     
        $core["home"]["text16"]["subtitle"] = "We've got exactly what you're looking for!";     
        $core["home"]["text16"]["desc"] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";     
        $core["home"]["text16"]["title_style"] = "1";     
        $core["home"]["text16"]["title_pos"] = "left";     
        $core["home"]["text16"]["title_heading"] = "h2";     
        $core["home"]["text16"]["title_margin"] = "mb-4";     
        $core["home"]["text16"]["subtitle_margin"] = "mb-4";     
        $core["home"]["text16"]["desc_margin"] = "mb-4";     
        $core["home"]["text16"]["title_txtcolor"] = "dark";     
        $core["home"]["text16"]["subtitle_txtcolor"] = "primary";     
        $core["home"]["text16"]["desc_txtcolor"] = "dark";     
        $core["home"]["text16"]["title_font"] = "";     
        $core["home"]["text16"]["subtitle_font"] = "";     
        $core["home"]["text16"]["desc_font"] = "";     
        $core["home"]["text16"]["title_txtw"] = "font-weight-bold";     
        $core["home"]["text16"]["subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["text16"]["btn_show"] = "no";     
        $core["home"]["text16"]["btn2_show"] = "no";     
        $core["home"]["text16"]["text_image1"] = _ppt_demopath()."/tools/b3.jpg";     
        $core["home"]["text16"]["text_image1_title"] = "d";     
        $core["home"]["text16"]["text_image1_link"] = "[link-search]";     
        $core["home"]["text16"]["text_image2"] = _ppt_demopath()."/tools/e2.jpg";     
        $core["home"]["text16"]["text_image2_title"] = "";     
        $core["home"]["text16"]["text_image2_link"] = "[link-search]"; 		
 
        /* listings7 */    
        $core["home"]["listings7"]["section_padding"] = "section-100";     
        $core["home"]["listings7"]["section_bg"] = "bg-white";     
        $core["home"]["listings7"]["section_pos"] = "";     
        $core["home"]["listings7"]["section_w"] = "container";     
        $core["home"]["listings7"]["title_show"] = "no";     
        $core["home"]["listings7"]["datastring"] = " dataonly='1' cat='' show='' custom='new' customvalue='' order='date' orderby='date' debug='0' ";     
        $core["home"]["listings7"]["perrow"] = "4";     
        $core["home"]["listings7"]["card"] = "blank"; 		
 
        /* subscribe2 */    
         /* subscribe2 */    
        $core["home"]["subscribe2"]["section_padding"] = "section-100";     
        $core["home"]["subscribe2"]["section_bg"] = "bg-primary";     
        $core["home"]["subscribe2"]["section_pos"] = "";     
        $core["home"]["subscribe2"]["section_w"] = "container";     
        $core["home"]["subscribe2"]["title_show"] = "yes";     
        $core["home"]["subscribe2"]["title"] = "JOIN OUR NEWSLETTER";     
        $core["home"]["subscribe2"]["subtitle"] = "STAY UPDATED WITH THE LATEST NEWS";     
        $core["home"]["subscribe2"]["desc"] = "";     
        $core["home"]["subscribe2"]["title_style"] = "1";     
        $core["home"]["subscribe2"]["title_pos"] = "left";     
        $core["home"]["subscribe2"]["title_heading"] = "h2";     
        $core["home"]["subscribe2"]["title_margin"] = "mb-4";     
        $core["home"]["subscribe2"]["subtitle_margin"] = "mb-4";     
        $core["home"]["subscribe2"]["desc_margin"] = "mb-4";     
        $core["home"]["subscribe2"]["title_txtcolor"] = "white";     
        $core["home"]["subscribe2"]["subtitle_txtcolor"] = "white";     
        $core["home"]["subscribe2"]["desc_txtcolor"] = "opacity-5";     
        $core["home"]["subscribe2"]["title_font"] = "";     
        $core["home"]["subscribe2"]["subtitle_font"] = "";     
        $core["home"]["subscribe2"]["desc_font"] = "";     
        $core["home"]["subscribe2"]["title_txtw"] = "font-weight-bold";     
        $core["home"]["subscribe2"]["subtitle_txtw"] = "font-weight-bold";     
        $core["home"]["subscribe2"]["image_subscribe"] = _ppt_demopath()."/furniture/subscribe1.jpg"; 	
 
        /* footer1 */    
         /* footer1 */    
        $core["footer"]["footer1"]["section_padding"] = "section-100";     
        $core["footer"]["footer1"]["section_bg"] = "bg-white";     
        $core["footer"]["footer1"]["section_pos"] = "";     
        $core["footer"]["footer1"]["section_w"] = "container"; 		
 

 
		// DEFAULT INNER PAGE DAATA
		$core = $CORE->LAYOUT("default_innerpages", $core);
		
		// SAMPLE DATA
		
		$i=1;		
		while($i < 21){	
		
			$core['sampledata'][$i] = array(		 
					
					"title" => "Example Product ".$i,	
					
					"image" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg", 
					"thumb" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg",			 
					 
						"images" => array(
					
						1 => array(
							"image" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg", 
							"thumb" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg",
						),
						2 => array(
							"image" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg", 
							"thumb" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg",
						),
						3 => array(
							"image" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg", 
							"thumb" => DEMO_IMG_PATH."sp/products/tools/".$i.".jpg",
						),	
												
						
					),
									 
				);
		$i++;	
		} 		
			
	return $core;
	}
	
	
}

?>