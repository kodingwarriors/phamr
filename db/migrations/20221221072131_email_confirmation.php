<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EmailConfirmation extends AbstractMigration
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
        $table = $this->table('email_confirmations');
        $table->addColumn('usersId', 'integer')
            ->addColumn('code', 'char', ['limit' => 32])
            ->addColumn('createdAt', 'integer')
            ->addColumn('modifiedAt', 'integer', ['null' => true])
            ->addColumn('confirmed', 'char', ['limit' => 1, 'default' => 'N'])
            ->create();
    }
}
