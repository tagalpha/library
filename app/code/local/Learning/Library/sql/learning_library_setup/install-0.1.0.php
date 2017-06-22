<?php

$installer = $this;
$installer->startSetup();

$editorTable = $installer->getConnection()
    ->newTable($installer->getTable('learning_library/editor'))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary'  => true,
    ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array())
    ->addColumn('address', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array())
    ->addColumn('phone_number', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array())
    ->addColumn('book_type', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array());

$installer->getConnection()->createTable($editorTable);

$installer->endSetup();