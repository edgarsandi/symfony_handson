<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131009083805 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE Address (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, street VARCHAR(255) NOT NULL, number INT NOT NULL, postal_code VARCHAR(20) NOT NULL, city VARCHAR(100) NOT NULL, state VARCHAR(100) NOT NULL, INDEX IDX_C2F3561DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE User (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE Address ADD CONSTRAINT FK_C2F3561DA76ED395 FOREIGN KEY (user_id) REFERENCES User (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Address DROP FOREIGN KEY FK_C2F3561DA76ED395");
        $this->addSql("DROP TABLE Address");
        $this->addSql("DROP TABLE User");
    }
}
