<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131009084554 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Address DROP FOREIGN KEY FK_C2F3561DA76ED395");
        $this->addSql("DROP INDEX IDX_C2F3561DA76ED395 ON Address");
        $this->addSql("ALTER TABLE Address DROP user_id");
        $this->addSql("ALTER TABLE User ADD address_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE User ADD CONSTRAINT FK_2DA17977F5B7AF75 FOREIGN KEY (address_id) REFERENCES Address (id)");
        $this->addSql("CREATE INDEX IDX_2DA17977F5B7AF75 ON User (address_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Address ADD user_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Address ADD CONSTRAINT FK_C2F3561DA76ED395 FOREIGN KEY (user_id) REFERENCES User (id)");
        $this->addSql("CREATE INDEX IDX_C2F3561DA76ED395 ON Address (user_id)");
        $this->addSql("ALTER TABLE User DROP FOREIGN KEY FK_2DA17977F5B7AF75");
        $this->addSql("DROP INDEX IDX_2DA17977F5B7AF75 ON User");
        $this->addSql("ALTER TABLE User DROP address_id");
    }
}
