<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221114230634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conge (id INT AUTO_INCREMENT NOT NULL, employe_id INT DEFAULT NULL, nom_employe VARCHAR(255) NOT NULL, datedepart DATE NOT NULL, dateretour DATE NOT NULL, nb_jours INT NOT NULL, type VARCHAR(255) NOT NULL, motif VARCHAR(255) NOT NULL, INDEX IDX_2ED893481B65292 (employe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, nom_employe VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, numtel VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, carte_bancaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, nom_responsable VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, numtel VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, carte_bancaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solde_conge (id INT AUTO_INCREMENT NOT NULL, employe_id INT DEFAULT NULL, solde_compensation INT NOT NULL, solde_maladie INT NOT NULL, solde_exception INT NOT NULL, solde_annuel INT NOT NULL, INDEX IDX_EF1BB271B65292 (employe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED893481B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE solde_conge ADD CONSTRAINT FK_EF1BB271B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED893481B65292');
        $this->addSql('ALTER TABLE solde_conge DROP FOREIGN KEY FK_EF1BB271B65292');
        $this->addSql('DROP TABLE conge');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('DROP TABLE solde_conge');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
