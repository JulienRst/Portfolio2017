<?php
use Migrations\AbstractMigration;

class CreatePartners extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('partners');
        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('website', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->create();
    }
}
