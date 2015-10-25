<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaAvaliacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaAvaliacoesTable Test Case
 */
class MediaAvaliacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.media_avaliacoes',
        'app.avaliacao_desempenhos',
        'app.status_avaliacoes',
        'app.avaliacao_grupo_modelos',
        'app.grupos',
        'app.cargos',
        'app.evidencias',
        'app.competencias',
        'app.tipo_competencias',
        'app.grau_relevancias',
        'app.avaliacao_desempenho_itens',
        'app.avaliacao_avaliadores',
        'app.usuarios',
        'app.departamentos',
        'app.perfils',
        'app.nivel_proficiencias',
        'app.criterios',
        'app.criterio_itens',
        'app.criterio_pontuacoes',
        'app.modelo_tipo_avaliacoes',
        'app.modelo_avaliacoes',
        'app.tipo_avaliacoes',
        'app.emails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MediaAvaliacoes') ? [] : ['className' => 'App\Model\Table\MediaAvaliacoesTable'];
        $this->MediaAvaliacoes = TableRegistry::get('MediaAvaliacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MediaAvaliacoes);

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
