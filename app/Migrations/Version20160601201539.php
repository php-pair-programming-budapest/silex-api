<?php

namespace App\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160601201539 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $table = $schema->createTable('users');
        $table->addColumn('id', Type::INTEGER)->setAutoincrement(true);
        $table->addColumn('name', Type::STRING)->setLength(255);
        $table->addColumn('email', Type::STRING)->setLength(255);
        $table->addColumn('password', Type::STRING)->setLength(255);
        $table->addColumn('created_at', Type::DATETIME);
        $table->addColumn('updated_at', Type::DATETIME);
        $table->setPrimaryKey(['id']);
        $table->addUniqueIndex(['email']);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('users');
    }
}
