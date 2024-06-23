<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619080344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enseignant_matiere (enseignant_id INT NOT NULL, matiere_id INT NOT NULL, INDEX IDX_33D1A024E455FCC0 (enseignant_id), INDEX IDX_33D1A024F46CD258 (matiere_id), PRIMARY KEY(enseignant_id, matiere_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enseignant_matiere ADD CONSTRAINT FK_33D1A024E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseignant_matiere ADD CONSTRAINT FK_33D1A024F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseignant ADD matiere VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX uniq_identifier_email ON enseignant');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81A72FA1E7927C74 ON enseignant (email)');
        $this->addSql('ALTER TABLE matiere CHANGE nom nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant_matiere DROP FOREIGN KEY FK_33D1A024E455FCC0');
        $this->addSql('ALTER TABLE enseignant_matiere DROP FOREIGN KEY FK_33D1A024F46CD258');
        $this->addSql('DROP TABLE enseignant_matiere');
        $this->addSql('ALTER TABLE enseignant DROP matiere');
        $this->addSql('DROP INDEX uniq_81a72fa1e7927c74 ON enseignant');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON enseignant (email)');
        $this->addSql('ALTER TABLE matiere CHANGE nom nom VARCHAR(255) DEFAULT NULL');
    }
}
