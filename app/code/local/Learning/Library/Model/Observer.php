<?php

class Learning_Library_Model_Observer extends Mage_Core_Model_Abstract
{
    public function addToTopmenu(Varien_Event_Observer $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();

        $node = new Varien_Data_Tree_Node(array(
            'name' => 'Editors',
            'id'   => 'editors',
            'url'  => Mage::getUrl("learning_library/index"), // point somewhere
        ), 'id', $tree, $menu);

        $menu->addChild($node);
    }
}