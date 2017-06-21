<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('learning_library/editor'), 'slug', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => 255,
    'comment' => 'Address'
));

$installer->endSetup();