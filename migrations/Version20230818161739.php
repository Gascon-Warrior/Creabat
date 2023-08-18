<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230818161739 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE media_actu (id INT AUTO_INCREMENT NOT NULL, actu_id INT NOT NULL, picture VARCHAR(80) NOT NULL, alt VARCHAR(500) NOT NULL, caption VARCHAR(500) DEFAULT NULL, INDEX IDX_4034DC91F77EEF58 (actu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media_actu ADD CONSTRAINT FK_4034DC91F77EEF58 FOREIGN KEY (actu_id) REFERENCES actu (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media_actu DROP FOREIGN KEY FK_4034DC91F77EEF58');
        $this->addSql('DROP TABLE media_actu');
    }
}
