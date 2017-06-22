<?php

class Learning_Library_Block_Adminhtml_Editor_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form implements Mage_Adminhtml_Block_Widget_Tab_Interface
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('editor_form', array('legend' => Mage::helper('learning_library')->__('editor information')));

        $fieldset->addField('name', 'text', array(
            'label'    => Mage::helper('learning_library')->__('Name'),
            'name'     => 'name',
            'class'    => 'required-entry',
            'required' => true
        ));

        $fieldset->addField('address', 'text', array(
            'label'    => Mage::helper('learning_library')->__('Address'),
            'name'     => 'address',
            'class'    => 'required-entry',
            'required' => true
        ));

        $fieldset->addField('book_type', 'text', array(
            'label'    => Mage::helper('learning_library')->__('Book Type'),
            'name'     => 'book_type',
            'class'    => 'required-entry',
            'required' => true
        ));

        $fieldset->addField('phone_number', 'text', array(
            'label'    => Mage::helper('learning_library')->__('Phone Number'),
            'name'     => 'phone_number',
            'class'    => 'required-entry',
            'required' => true
        ));

        if (Mage::getSingleton('adminhtml/session')->getEditorData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getEditorData());
            Mage::getSingleton('adminhtml/session')->getEditorData(null);
        } elseif (Mage::registry('editor_data')) {
            $form->setValues(Mage::registry('editor_data')->getData());
        }

        return parent::_prepareForm();
    }

    public function getTabLabel()
    {
        return Mage::helper('learning_library')->__('editor Information');
    }

    public function getTabTitle()
    {
        return Mage::helper('learning_library')->__('editor Information');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }
}