<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrierTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrierTable Test Case
 */
class CarrierTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrierTable
     */
    public $Carrier;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carrier',
        'app.patients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carrier') ? [] : ['className' => 'App\Model\Table\CarrierTable'];
        $this->Carrier = TableRegistry::get('Carrier', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carrier);

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
