<?php
namespace PD\Component\Reports\Administrator\Controller;
defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
class DisplayController extends BaseController {

    protected $default_view = 'reports';
    public function display($cachable = false, $urlparams = array()) 
    {
        return parent::display($cachable, $urlparams);
    }   
}
