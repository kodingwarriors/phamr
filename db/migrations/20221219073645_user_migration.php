<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('email', 'string', ['limit' => 255])
            ->addColumn('password', 'char', ['limit' => 60])
            ->addColumn('mustChangePassword', 'char', ['limit' => 1])
            ->addColumn('profilesId', 'integer')
            ->addColumn('banned', 'char', ['limit' => 1])
            ->addColumn('suspended', 'char', ['limit' => 1])
            ->addColumn('active', 'char', ['limit' => 1, 'default' => null, 'null' => true])
            ->addIndex(['profilesId'])
            ->create();
    }
}
