<?php

class Learning_Library_Block_Adminhtml_Editor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller     = 'adminhtml_editor';
        $this->_blockGroup     = 'learning_library';
        $this->_headerText     = Mage::helper('learning_library')->__('Manage editors');
        $this->_addButtonLabel = Mage::helper('learning_library')->__('Add editor');
        parent::__construct();
    }
}