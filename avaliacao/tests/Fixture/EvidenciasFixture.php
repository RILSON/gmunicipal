<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EvidenciasFixture
 *
 */
class EvidenciasFixture extends TestFixture
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
        'competencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cargo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grupo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descricao' => ['type' => 'string', 'length' => 650, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Evidencia_Cargo' => ['type' => 'index', 'columns' => ['cargo_id'], 'length' => []],
            'FK_Evidencia_Competencia' => ['type' => 'index', 'columns' => ['competencia_id'], 'length' => []],
            'FK_Evidencia_Avaliacao_Desempenho' => ['type' => 'index', 'columns' => ['avaliacao_desempenho_id'], 'length' => []],
            'FK_Evidencia_Grupo' => ['type' => 'index', 'columns' => ['grupo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Evidencia_Avaliacao_Desempenho' => ['type' => 'foreign', 'columns' => ['avaliacao_desempenho_id'], 'references' => ['avaliacao_desempenhos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Evidencia_Cargo' => ['type' => 'foreign', 'columns' => ['cargo_id'], 'references' => ['cargos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Evidencia_Competencia' => ['type' => 'foreign', 'columns' => ['competencia_id'], 'references' => ['competencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Evidencia_Grupo' => ['type' => 'foreign', 'columns' => ['grupo_id'], 'references' => ['grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'competencia_id' => 1,
            'cargo_id' => 1,
            'grupo_id' => 1,
            'descricao' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-10-25 01:04:12',
            'modified' => '2015-10-25 01:04:12',
            'status' => 1
        ],
    ];
}
