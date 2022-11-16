<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221116151744 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge CHANGE etat etat VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE solde_conge DROP INDEX IDX_EF1BB271B65292, ADD UNIQUE INDEX UNIQ_EF1BB271B65292 (employe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge CHANGE etat etat VARCHAR(255) DEFAULT \'en Attente...\' NOT NULL');
        $this->addSql('ALTER TABLE solde_conge DROP INDEX UNIQ_EF1BB271B65292, ADD INDEX IDX_EF1BB271B65292 (employe_id)');
    }
}
