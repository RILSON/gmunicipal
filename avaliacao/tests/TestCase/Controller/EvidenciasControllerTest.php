<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EvidenciasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EvidenciasController Test Case
 */
class EvidenciasControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
