<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ------------------------------------------------------------------------
/**
 * Random String Generator : Helper File for Codeigniter 
 * 
  * @access    public
 * @param    string
 * @param    integer
 * @return    integer
 */    
if ( ! function_exists('setDate'))
{
    function setDate($datestr = '',$format = 'long')
    {
        if ($datestr == '')
            return '--';
    
        $time = strtotime($datestr);
        switch ($format) {
            case 'short': $fmt = 'm / d / Y - g:iA'; break;
            case 'long': $fmt = 'F j, Y - g:iA'; break;
            case 'notime': $fmt = 'm / d / Y'; break;
        }
        $newdate = date($fmt,$time);
        return $newdate;
    }

    function dateFormat($date, $format = 'd-M-Y'){
        return date($format, strtotime($date));
    }


}


/* End of file rand_helper.php */