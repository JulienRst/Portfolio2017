<?php
use Migrations\AbstractMigration;

class CreateProject extends AbstractMigration
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
        $table = $this->table('projects');
        $table->addColumn('title', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('desc_min', 'text', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('desc_main', 'text', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('img_min', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('img_main', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->create();
    }
}
