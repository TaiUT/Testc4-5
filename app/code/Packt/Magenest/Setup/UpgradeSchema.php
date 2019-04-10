<?php

namespace Packt\Magenest\Setup;

use test\Framework\Setup\UpgradeSchemaInterface;
use test\Framework\Setup\ModuleContextInterface;
use test\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup,
                            ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $connection = $installer->getConnection();

// create table director
        if (version_compare($context->getVersion(), '2.0.15') < 0) {

            $table = $installer->getConnection()->newTable(
                $installer->getTable('packt_magenest_magenestdirector')
            )->addColumn(

                'director_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Director id'
            )->addColumn(
                'name',
                \magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null, [
                'nullable' => false,

            ],
                'Name');

            $installer->getConnection()->createTable($table);
        }


        if (version_compare($context->getVersion(), '2.0.16') < 0) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('packt_magenest_magenestactor')
            )->addColumn(

                'actor_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'actor_id'
            )->addColumn(
                'name',
                \magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null, [
                'nullable' => false,

            ],
                'Name');

            $installer->getConnection()->createTable($table);

        }

        if (version_compare($context->getVersion(), '2.0.19') < 0){

            $table = $installer->getConnection()->newTable(
                $installer->getTable('packt_magenest_magenestmovie')
            )->addColumn(

                'movie_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Movie Id'
            )->addColumn(
                'name',
                \magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null, [
                'nullable' => false,

            ],
                'Name'
            )->addColumn(
                'description',
                \magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                [],
                'Description'
            )->addColumn(
                'rating',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                64,
                ['nullable' => false],
                'Rating'
            )->addColumn(
                'director_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                64,
                ['nullable' => false,
                    'unsigned' => true],
                'Director id')
                ->addForeignKey(
                    $installer->getFkName('packt_magenest_magenestmovie', 'director_id', 'packt_magenest_magenestdirector', 'director_id'),
                    'director_id',
                    $installer->getTable('packt_magenest_magenestdirector'),
                    'director_id',
                    \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
                );
            $installer->getConnection()->createTable($table);

        }
        if (version_compare($context->getVersion(), '2.0.19') < 0){


            $table = $installer->getConnection()->newTable(
                $installer->getTable('packt_magenest_magenestmovieactor')
            )->addColumn(

                'movie_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'nullable' => false,
                'primary' => true,
                'unsigned'=> true
            ],
                'Movie Id'
            )->addColumn(
                'actor_id',
                \magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'actor_id'
            )->addForeignKey(
                $installer->getFkName('packt_magenest_magenestmovieactor', 'movie_id', 'packt_magenest_magenestmovie', 'movie_id'),
                'movie_id',
                $installer->getTable('packt_magenest_magenestmovie'),
                'movie_id',
                \magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->addForeignKey(
                $installer->getFkName('packt_magenest_magenestmovieactor', 'actor_id', 'packt_magenest_magenestactor', 'actor_id'),
                'actor_id',
                $installer->getTable('packt_magenest_magenestactor'),
                'actor_id',
                \magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            );
            $installer->getConnection()->createTable($table);
            $installer->endSetup();

        }
    }
}
