<?php

class Learning_Library_Block_Adminhtml_Editor_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('editor_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('learning_library')->__('editor Information'));
    }
}