<?php
namespace PD\Component\Reports\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

class MessageModel extends ItemModel {
    public function getItem($pk= null): object {
        $item = new \stdClass();
        $item->message = Text::_('COM_HELLOWORLD_MSG_GREETING');
        return $item;
    }
        
}