<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221116173756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED89348BC7F70A9');
        $this->addSql('DROP INDEX UNIQ_2ED89348BC7F70A9 ON conge');
        $this->addSql('ALTER TABLE conge DROP solde_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge ADD solde_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED89348BC7F70A9 FOREIGN KEY (solde_id) REFERENCES solde_conge (id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2ED89348BC7F70A9 ON conge (solde_id)');
    }
}
