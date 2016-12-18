<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinkPartnersProjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinkPartnersProjectsTable Test Case
 */
class LinkPartnersProjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LinkPartnersProjectsTable
     */
    public $LinkPartnersProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.link_partners_projects',
        'app.partners',
        'app.projects',
        'app.contents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LinkPartnersProjects') ? [] : ['className' => 'App\Model\Table\LinkPartnersProjectsTable'];
        $this->LinkPartnersProjects = TableRegistry::get('LinkPartnersProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LinkPartnersProjects);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
