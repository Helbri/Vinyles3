<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230815223022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cla_ent_style_cla_ent_artiste (cla_ent_style_id INT NOT NULL, cla_ent_artiste_id INT NOT NULL, INDEX IDX_73E96FFCFB24A042 (cla_ent_style_id), INDEX IDX_73E96FFC33AA4A68 (cla_ent_artiste_id), PRIMARY KEY(cla_ent_style_id, cla_ent_artiste_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cla_ent_style_cla_ent_artiste ADD CONSTRAINT FK_73E96FFCFB24A042 FOREIGN KEY (cla_ent_style_id) REFERENCES cla_ent_style (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cla_ent_style_cla_ent_artiste ADD CONSTRAINT FK_73E96FFC33AA4A68 FOREIGN KEY (cla_ent_artiste_id) REFERENCES cla_ent_artiste (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cla_ent_style_cla_ent_artiste DROP FOREIGN KEY FK_73E96FFCFB24A042');
        $this->addSql('ALTER TABLE cla_ent_style_cla_ent_artiste DROP FOREIGN KEY FK_73E96FFC33AA4A68');
        $this->addSql('DROP TABLE cla_ent_style_cla_ent_artiste');
    }
}
