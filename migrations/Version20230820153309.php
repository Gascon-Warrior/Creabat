<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230820153309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, actu_id INT DEFAULT NULL, supplier_id INT DEFAULT NULL, project_id INT DEFAULT NULL, picture VARCHAR(80) NOT NULL, alt VARCHAR(500) NOT NULL, caption VARCHAR(500) DEFAULT NULL, INDEX IDX_6A2CA10CF77EEF58 (actu_id), INDEX IDX_6A2CA10C2ADD6D8C (supplier_id), INDEX IDX_6A2CA10C166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CF77EEF58 FOREIGN KEY (actu_id) REFERENCES actu (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C2ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CF77EEF58');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C2ADD6D8C');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C166D1F9C');
        $this->addSql('DROP TABLE media');
    }
}
