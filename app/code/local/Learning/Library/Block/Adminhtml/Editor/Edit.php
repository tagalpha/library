<?php

class Learning_Library_Block_Adminhtml_Editor_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->_objectId   = 'id';
        $this->_blockGroup = 'learning_library';
        $this->_controller = 'adminhtml_editor';

        $this->_updateButton('save', 'label', Mage::helper('learning_library')->__('Save editor'));
        $this->_updateButton('delete', 'label', Mage::helper('learning_library')->__('Delete editor'));
        $this->_removeButton('reset');

        $this->_addButton('saveandcontinue', array(
            'label'   => Mage::helper('learning_library')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save',
        ), -100);

        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('editor_data') && Mage::registry('editor_data')->getId()) {
            return Mage::helper('learning_library')->__("Edit editor '%s'", Mage::registry('editor_data')->getName());
        } else {
            return Mage::helper('learning_library')->__('Add editor');
        }
    }
}