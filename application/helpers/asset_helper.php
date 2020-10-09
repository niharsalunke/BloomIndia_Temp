<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('asset_url'))
{
    function asset_url()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        //return the full asset path
        return base_url() . $CI->config->item('asset_path');
    }
}

if ( ! function_exists('public_css_url'))
{
    function public_css_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('public_css_path');
    }
}

if ( ! function_exists('admin_css_url'))
{
    function admin_css_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_css_path');
    }
}

if ( ! function_exists('public_js_url'))
{
    function public_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('public_js_path');
    }
}

if ( ! function_exists('admin_js_url'))
{
    function admin_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_js_path');
    }
}

if ( ! function_exists('public_js_url'))
{
    function public_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('public_js_path');
    }
}

if ( ! function_exists('public_img_url'))
{
    function public_img_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('public_img_path');
    }
}

if ( ! function_exists('admin_img_url'))
{
    function admin_img_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_img_path');
    }
}

/**
 * Get Upload URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('public_upload_url'))
{
    function public_upload_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('public_upload_path');
    }
}



// ------------------------------------------------------------------------
// PATH HELPERS

/**
 * Get asset Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('asset_path'))
{
    function asset_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('asset_path');
    }
}



/* End of file asset_helper.php */
