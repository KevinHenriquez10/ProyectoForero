<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_scripts'))
{
    function load_scripts(){
        
        return '<script src="'.base_url().'js/jquery.min.js"></script>
                <script src="'.base_url().'assets/owl/owl.carousel.min.js"></script>
                <script src="'.base_url().'assets/bootstrap/bootstrap.min.js"></script>
                <script src="'.base_url().'assets/wow-js/wow.min.js"></script>
                <script src="'.base_url().'assets/slider/slider.js"></script>
                <script src="'.base_url().'assets/facncybox/jquery.fancybox.js"></script>
                <script src="'.base_url().'assets/alert/sweetalert.js"></script>
                <script src="'.base_url().'assets/toastr/toastr.js"></script>
                <script src="'.base_url().'assets/cryptojs/cryptojs.js"></script>
                <script src="'.base_url().'assets/select/bootstrap-selectpicker.js"></script>
                <script src="'.base_url().'js/main.js"></script>
                <script src="'.base_url().'js/utils.js"></script>';
    }   

}

if (!function_exists('load_scripts_ext'))
{
    function load_scripts_ext(){
        
        return '<script src="'.base_url().'js/jquery.min.js"></script>
                <script src="'.base_url().'assets/popper/popper.min.js"></script>
                <script src="'.base_url().'assets/admin/bootstrap-admin.min.js"></script>
                <script src="'.base_url().'assets/slick/slick.min.js"></script>
                <script src="'.base_url().'assets/nouislider/nouislider.min.js"></script>
                <script src="'.base_url().'js/jquery.zoom.min.js"></script>
                <script src="'.base_url().'assets/alert/sweetalert.js"></script>
                <script src="'.base_url().'assets/toastr/toastr.js"></script>
                <script src="'.base_url().'assets/jqwidgets/jqxcore.js"></script>
                <script src="'.base_url().'assets/jqwidgets/jqx-all.js"></script>
                <script src="'.base_url().'assets/cryptojs/cryptojs.js"></script>
                <script src="'.base_url().'assets/select/bootstrap-selectpicker.js"></script>
                <script src="'.base_url().'assets/admin/perfect-scrollbar.jquery.min.js"></script>
                <script src="'.base_url().'assets/admin/jquery.bootstrap-wizard.js"></script>
                <script src="'.base_url().'assets/admin/moment.min.js"></script>
                <script src="'.base_url().'assets/admin/bootstrap-datetimepicker.min.js"></script>
                <script src="'.base_url().'assets/admin/jquery.dataTables.min.js"></script>
                <script src="'.base_url().'assets/admin/bootstrap-tagsinput.js"></script>
                <script src="'.base_url().'assets/admin/jasny-bootstrap.min.js"></script>
                <script src="'.base_url().'assets/admin/fullcalendar.min.js"></script>
                <script src="'.base_url().'assets/admin/jquery-jvectormap.js"></script>
                <script src="'.base_url().'assets/admin/core.js"></script>
                <script src="'.base_url().'assets/admin/arrive.min.js"></script>
                <script src="'.base_url().'assets/admin/chartist.min.js"></script>
                <script src="'.base_url().'assets/admin/jasny-bootstrap.min.js"></script>
                <script src="'.base_url().'assets/admin/admin.js?v=2.1.2" type="text/javascript"></script>
                <script src="'.base_url().'assets/admin/admin-scripts.js" type="text/javascript"></script>
                <script src="'.base_url().'js/utils.js"></script>';
                
    }   

}

if (!function_exists('load_scripts_url'))
{
    function load_scripts_url($src){
        
        return '<script src="'.base_url().$src.'"></script>';
    }   
    
}