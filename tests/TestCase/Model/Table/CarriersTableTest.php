<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarriersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarriersTable Test Case
 */
class CarriersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarriersTable
     */
    public $Carriers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carriers',
        'app.patients',
        'app.appointments',
        'app.doctors',
        'app.invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carriers') ? [] : ['className' => 'App\Model\Table\CarriersTable'];
        $this->Carriers = TableRegistry::get('Carriers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carriers);

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
}
