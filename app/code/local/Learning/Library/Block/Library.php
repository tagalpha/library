<?php

class Learning_Library_Block_Library extends Mage_Core_Block_Template
{
    public function methodFromTheBlock()
    {
        return 'this is a method from the block';
    }

    public function helloWorld()
    {
        return 'hello world !';
    }

    public function getEditors()
    {
        $editors = Mage::getModel('learning_library/editor')
            ->getCollection();

        return $editors;
    }
}