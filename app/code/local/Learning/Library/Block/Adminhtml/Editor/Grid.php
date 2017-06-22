<?php

class Learning_Library_Block_Adminhtml_Editor_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('entity_id');
        $this->setId('learning_library_editor_grid');
        $this->setDefaultDir('asc');
    }

    /**
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('learning_library/editor')->getCollection();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * @return $this
     * @throws Exception
     */
    protected function _prepareColumns()
    {

        $this->addColumn('entity_id', array(
            'header' => $this->__('ID'),
            'align'  => 'right',
            'width'  => '50px',
            'index'  => 'entity_id'
        ));

        $this->addColumn('name', array(
            'header' => $this->__('Name'),
            'align'  => 'right',
            'width'  => '100px',
            'index'  => 'name'
        ));

        $this->addColumn('phone_number', array(
            'header'  => $this->__('Phone number'),
            'index'   => 'phone_number',
            'align'   => 'left',
            'width'   => '100px'
        ));

        $this->addColumn('book_type', array(
            'header' => $this->__('Book Type'),
            'align'  => 'right',
            'width'  => '100px',
            'index'  => 'book_type'
        ));

        $this->addColumn('address', array(
            'header' => $this->__('Address'),
            'align'  => 'right',
            'width'  => '100px',
            'index'  => 'address'
        ));

        return parent::_prepareColumns();
    }

    /**
     * @return $this
     */
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('entity_id');
        $this->getMassactionBlock()->setFormFieldName('editor');

        $this->getMassactionBlock()->addItem('delete', array(
            'label'   => Mage::helper('learning_library')->__('Delete'),
            'url'     => $this->getUrl('*/*/massDelete'),
            'confirm' => Mage::helper('learning_library')->__('Are you sure?')
        ));

        return $this;
    }

    /**
     * Get row URL on click
     *
     * @param $row
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}