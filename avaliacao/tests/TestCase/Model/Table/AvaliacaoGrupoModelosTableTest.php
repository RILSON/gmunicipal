<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvaliacaoGrupoModelosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvaliacaoGrupoModelosTable Test Case
 */
class AvaliacaoGrupoModelosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.avaliacao_grupo_modelos',
        'app.avaliacao_desempenhos',
        'app.status_avaliacoes',
        'app.competencias',
        'app.emails',
        'app.evidencias',
        'app.media_avaliacoes',
        'app.grupos',
        'app.cargos',
        'app.usuarios',
        'app.departamentos',
        'app.perfils',
        'app.criterios',
        'app.modelo_tipo_avaliacoes',
        'app.modelo_avaliacoes',
        'app.tipo_avaliacoes',
        'app.avaliacao_avaliadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AvaliacaoGrupoModelos') ? [] : ['className' => 'App\Model\Table\AvaliacaoGrupoModelosTable'];
        $this->AvaliacaoGrupoModelos = TableRegistry::get('AvaliacaoGrupoModelos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AvaliacaoGrupoModelos);

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
