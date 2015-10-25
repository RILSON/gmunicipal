<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NivelProficienciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NivelProficienciasTable Test Case
 */
class NivelProficienciasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nivel_proficiencias',
        'app.avaliacao_desempenho_itens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NivelProficiencias') ? [] : ['className' => 'App\Model\Table\NivelProficienciasTable'];
        $this->NivelProficiencias = TableRegistry::get('NivelProficiencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NivelProficiencias);

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
