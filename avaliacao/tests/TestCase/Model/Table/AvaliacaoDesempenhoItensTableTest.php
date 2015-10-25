<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvaliacaoDesempenhoItensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvaliacaoDesempenhoItensTable Test Case
 */
class AvaliacaoDesempenhoItensTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.avaliacao_desempenho_itens',
        'app.avaliacao_avaliadores',
        'app.avaliacao_grupo_modelos',
        'app.avaliacao_desempenhos',
        'app.status_avaliacoes',
        'app.competencias',
        'app.tipo_competencias',
        'app.grau_relevancias',
        'app.evidencias',
        'app.cargos',
        'app.grupos',
        'app.criterios',
        'app.usuarios',
        'app.departamentos',
        'app.perfils',
        'app.media_avaliacoes',
        'app.emails',
        'app.modelo_tipo_avaliacoes',
        'app.modelo_avaliacoes',
        'app.tipo_avaliacoes',
        'app.nivel_proficiencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AvaliacaoDesempenhoItens') ? [] : ['className' => 'App\Model\Table\AvaliacaoDesempenhoItensTable'];
        $this->AvaliacaoDesempenhoItens = TableRegistry::get('AvaliacaoDesempenhoItens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AvaliacaoDesempenhoItens);

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
