<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidenciasTable Test Case
 */
class EvidenciasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidencias',
        'app.avaliacao_desempenhos',
        'app.status_avaliacoes',
        'app.avaliacao_grupo_modelos',
        'app.grupos',
        'app.cargos',
        'app.usuarios',
        'app.departamentos',
        'app.perfils',
        'app.media_avaliacoes',
        'app.criterios',
        'app.modelo_tipo_avaliacoes',
        'app.modelo_avaliacoes',
        'app.tipo_avaliacoes',
        'app.avaliacao_avaliadores',
        'app.competencias',
        'app.tipo_competencias',
        'app.grau_relevancias',
        'app.emails',
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
        $config = TableRegistry::exists('Evidencias') ? [] : ['className' => 'App\Model\Table\EvidenciasTable'];
        $this->Evidencias = TableRegistry::get('Evidencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Evidencias);

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
