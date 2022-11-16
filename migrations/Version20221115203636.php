<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221115203636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED893481B65292');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED893481B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE solde_conge DROP FOREIGN KEY FK_EF1BB271B65292');
        $this->addSql('ALTER TABLE solde_conge ADD CONSTRAINT FK_EF1BB271B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED893481B65292');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED893481B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE solde_conge DROP FOREIGN KEY FK_EF1BB271B65292');
        $this->addSql('ALTER TABLE solde_conge ADD CONSTRAINT FK_EF1BB271B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
    }
}
