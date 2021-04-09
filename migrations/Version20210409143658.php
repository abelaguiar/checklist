<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409143658 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activities (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description CLOB NOT NULL, done BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE activity_category (activity_id INTEGER NOT NULL, category_id INTEGER NOT NULL, PRIMARY KEY(activity_id, category_id))');
        $this->addSql('CREATE INDEX IDX_A646A9CF81C06096 ON activity_category (activity_id)');
        $this->addSql('CREATE INDEX IDX_A646A9CF12469DE2 ON activity_category (category_id)');
        $this->addSql('CREATE TABLE categories (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activities');
        $this->addSql('DROP TABLE activity_category');
        $this->addSql('DROP TABLE categories');
    }
}
