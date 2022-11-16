<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221114232349 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge ADD nom_employe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED89348F9D2E5 FOREIGN KEY (nom_employe_id) REFERENCES employe (id)');
        $this->addSql('CREATE INDEX IDX_2ED89348F9D2E5 ON conge (nom_employe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED89348F9D2E5');
        $this->addSql('DROP INDEX IDX_2ED89348F9D2E5 ON conge');
        $this->addSql('ALTER TABLE conge DROP nom_employe_id');
    }
}
