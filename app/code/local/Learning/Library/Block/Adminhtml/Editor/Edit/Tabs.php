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

    protected function _beforeToHtml()
    {
        $this->addTab('products', array(
            'label' => Mage::helper('learning_library')->__('Associated products'),
            'url'   => $this->getUrl('*/*/products', array('_current' => true)),
            'class'    => 'ajax'
        ));
        parent::_beforeToHtml();
    }
}