<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AvaliacaoGrupoModelosFixture
 *
 */
class AvaliacaoGrupoModelosFixture extends TestFixture
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
        'grupo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modelo_tipo_avaliacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'peso_real' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Avaliacao_Grupo_Modelo_Avaliacao_Desempenho' => ['type' => 'index', 'columns' => ['avaliacao_desempenho_id'], 'length' => []],
            'FK_Avaliacao_Grupo_Modelo_Grupo' => ['type' => 'index', 'columns' => ['grupo_id'], 'length' => []],
            'FK_Avaliacao_Grupo_Modelo_Modelo_Tipo_Avaliacao' => ['type' => 'index', 'columns' => ['modelo_tipo_avaliacao_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Avaliacao_Grupo_Modelo_Avaliacao_Desempenho' => ['type' => 'foreign', 'columns' => ['avaliacao_desempenho_id'], 'references' => ['avaliacao_desempenhos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Grupo_Modelo_Grupo' => ['type' => 'foreign', 'columns' => ['grupo_id'], 'references' => ['grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Grupo_Modelo_Modelo_Tipo_Avaliacao' => ['type' => 'foreign', 'columns' => ['modelo_tipo_avaliacao_id'], 'references' => ['modelo_tipo_avaliacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'grupo_id' => 1,
            'modelo_tipo_avaliacao_id' => 1,
            'peso_real' => 1,
            'created' => '2015-10-25 01:02:56',
            'modified' => '2015-10-25 01:02:56',
            'status' => 1
        ],
    ];
}
