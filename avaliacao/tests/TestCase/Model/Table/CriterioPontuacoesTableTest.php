<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CriterioPontuacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CriterioPontuacoesTable Test Case
 */
class CriterioPontuacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.criterio_pontuacoes',
        'app.criterios',
        'app.grupos',
        'app.avaliacao_grupo_modelos',
        'app.avaliacao_desempenhos',
        'app.status_avaliacoes',
        'app.competencias',
        'app.tipo_competencias',
        'app.grau_relevancias',
        'app.evidencias',
        'app.cargos',
        'app.usuarios',
        'app.departamentos',
        'app.perfils',
        'app.media_avaliacoes',
        'app.avaliacao_desempenho_itens',
        'app.avaliacao_avaliadores',
        'app.nivel_proficiencias',
        'app.emails',
        'app.modelo_tipo_avaliacoes',
        'app.modelo_avaliacoes',
        'app.tipo_avaliacoes',
        'app.criterio_itens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CriterioPontuacoes') ? [] : ['className' => 'App\Model\Table\CriterioPontuacoesTable'];
        $this->CriterioPontuacoes = TableRegistry::get('CriterioPontuacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CriterioPontuacoes);

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
