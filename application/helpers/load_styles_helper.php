<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_styles'))
{
    function load_styles(){
        
        return '<link type="text/css" rel="stylesheet" href="'.base_url().'assets/bootstrap/bootstrap.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/ionicons/ionicons.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/animaciones/animate.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/slider/slider.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/owl/owl.carousel.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/owl/owl.theme.default.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/font-awesome/font-awesome.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/facncybox/jquery.fancybox.css">
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/toastr/toastr.css">
                <link type="text/css" rel="stylesheet" href="'.base_url().'css/style.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'css/app.css"/>';
    }   
    
}

if (!function_exists('load_styles_ext'))
{
    function load_styles_ext(){
        
        return '<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/slick/slick.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/slick/slick-theme.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/nouislider/nouislider.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/font-awesome/font-awesome.min.css"/>
                <link type="text/css" rel="stylesheet" href="'.base_url().'assets/toastr/toastr.css">
                <link href="'.base_url().'assets/jqwidgets/styles/jqx.base.css" rel="stylesheet">
                <link href="'.base_url().'assets/jqwidgets/styles/jqx.bootstrap.css" rel="stylesheet">
                <link href="'.base_url().'assets/jqwidgets/styles/jqx.metro.css" rel="stylesheet">
                <link href="'.base_url().'css/admin.css?v=2.1.2" rel="stylesheet" />
                <link href="'.base_url().'css/admin-pro.css?v=2.0.3" rel="stylesheet" />
                <link type="text/css" rel="stylesheet" href="'.base_url().'css/app.css"/>';
    }   
    
}

if (!function_exists('load_styles_url'))
{
    function load_styles_url($src){
        
        return '<link href="'.base_url().$src.'" rel="stylesheet">';
    }   
    
}