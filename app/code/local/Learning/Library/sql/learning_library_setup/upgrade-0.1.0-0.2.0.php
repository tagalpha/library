<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('learning_library/editor'), 'address', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => 255,
    'comment' => 'Address'
));
$installer->getConnection()->addColumn($installer->getTable('learning_library/editor'), 'phone_number', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => 255,
    'comment' => 'Phone Number'
));
$installer->getConnection()->addColumn($installer->getTable('learning_library/editor'), 'book_type', array(
    'type'    => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length'  => 255,
    'comment' => 'Book Type'
));
$installer->getConnection()->dropColumn($installer->getTable('learning_library/editor'), 'image_url');
$installer->getConnection()->dropColumn($installer->getTable('learning_library/editor'), 'is_active');
$installer->getConnection()->dropColumn($installer->getTable('learning_library/editor'), 'position');

$installer->endSetup();