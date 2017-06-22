<?php

class Learning_Library_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function detailsAction()
    {
        $slug = $this->getRequest()->getParam('slug');
        $editor = Mage::getModel('learning_library/editor')->loadBySlug($slug);
        Mage::register('current_editor', $editor);

        $associatedProduct = $editor
            ->getSelectedProductsCollection()
            ->addAttributeToFilter('status', Mage_Catalog_Model_Product_Status::STATUS_ENABLED)
            ->addAttributeToFilter('visibility', Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)
            ->addAttributeToSelect(['name', 'id'])
        ;

        Mage::register('current_editor_associated_product', $associatedProduct);

        $this->loadLayout();
        $this->renderLayout();
    }
}