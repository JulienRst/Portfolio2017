<?php
use Migrations\AbstractMigration;

class CreateContents extends AbstractMigration
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
        $table = $this->table('contents');
        $table->addColumn('project_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'null' => false
        ]);
        $table->create();
    }
}
