<?php

class Learning_Library_Model_Resource_Editor_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Magento class constructor
     */
    protected function _construct()
    {
        $this->_init('learning_library/editor');
    }
}