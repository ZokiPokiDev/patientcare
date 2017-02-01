<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppointmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppointmentsTable Test Case
 */
class AppointmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppointmentsTable
     */
    public $Appointments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appointments',
        'app.patients',
        'app.carriers',
        'app.invoices',
        'app.doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Appointments') ? [] : ['className' => 'App\Model\Table\AppointmentsTable'];
        $this->Appointments = TableRegistry::get('Appointments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appointments);

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
