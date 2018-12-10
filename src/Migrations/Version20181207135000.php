<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181207135000 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE crowdin_auth_user (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, user_mail VARCHAR(255) NOT NULL, user_lang VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_5CF2504F24A232CF (user_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE crowdin_project CHANGE base_lang base_lang VARCHAR(255) NOT NULL, CHANGE content content BLOB(32768) DEFAULT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE user user INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE crowdin_auth_user');
        $this->addSql('ALTER TABLE crowdin_project CHANGE name name TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE user user INT DEFAULT NULL, CHANGE base_lang base_lang TINYTEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE content content TEXT DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
