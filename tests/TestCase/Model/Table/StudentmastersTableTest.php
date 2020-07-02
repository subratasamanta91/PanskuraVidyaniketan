<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentmastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentmastersTable Test Case
 */
class StudentmastersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentmastersTable
     */
    protected $Studentmasters;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Studentmasters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Studentmasters') ? [] : ['className' => StudentmastersTable::class];
        $this->Studentmasters = TableRegistry::getTableLocator()->get('Studentmasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Studentmasters);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
