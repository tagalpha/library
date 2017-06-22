<?php

class Learning_Library_Model_Resource_Editor extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Magento class constructor
     */
    protected function _construct()
    {
        $this->_init('learning_library/editor', 'entity_id');
    }

    /**
     * Perform actions before object save
     *
     * @param Varien_Object $object
     * @return Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
        $slug = Mage::getModel('catalog/product_url')->formatUrlKey($object->getName());
        $this->checkIfSlugExist($slug, $object->getId());
        $object->setSlug($slug);

        return $this;
    }

    private function checkIfSlugExist($slug, $id)
    {
        $reader = $this->_getReadAdapter();
        $select = $reader->select()->from($this->getMainTable())->where('slug = ?', $slug)->where('entity_id <> ?', $id);
        $result = $reader->fetchRow($select);
        if ($result) {
            throw new Exception($slug . ' already exist');
        }
    }
}