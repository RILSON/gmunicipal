<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompetenciasFixture
 *
 */
class CompetenciasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'avaliacao_desempenho_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_competencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grau_relevancia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 650, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 650, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Competencia_Avaliacao_Desempenho' => ['type' => 'index', 'columns' => ['avaliacao_desempenho_id'], 'length' => []],
            'FK_Competencia_Grau_Relevancia' => ['type' => 'index', 'columns' => ['grau_relevancia_id'], 'length' => []],
            'FK_Competencia_Tipo_Competencia' => ['type' => 'index', 'columns' => ['tipo_competencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Competencia_Avaliacao_Desempenho' => ['type' => 'foreign', 'columns' => ['avaliacao_desempenho_id'], 'references' => ['avaliacao_desempenhos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Competencia_Grau_Relevancia' => ['type' => 'foreign', 'columns' => ['grau_relevancia_id'], 'references' => ['grau_relevancias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Competencia_Tipo_Competencia' => ['type' => 'foreign', 'columns' => ['tipo_competencia_id'], 'references' => ['tipo_competencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'avaliacao_desempenho_id' => 1,
            'tipo_competencia_id' => 1,
            'grau_relevancia_id' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'descricao' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-10-25 01:03:38',
            'modified' => '2015-10-25 01:03:38',
            'status' => 1
        ],
    ];
}
