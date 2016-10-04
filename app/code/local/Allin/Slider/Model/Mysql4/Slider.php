<?php
class Allin_Slider_Model_Mysql4_Slider extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("slider/slider", "entity_id");
    }
}