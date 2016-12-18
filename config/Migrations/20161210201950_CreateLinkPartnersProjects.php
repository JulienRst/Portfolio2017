<?php
use Migrations\AbstractMigration;

class CreateLinkPartnersProjects extends AbstractMigration
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
        $table = $this->table('link_partners_projects');
        $table->addColumn('partner_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('project_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        $table->create();
    }
}
