<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AvaliacaoAvaliadoresFixture
 *
 */
class AvaliacaoAvaliadoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'avaliacao_grupo_modelo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_avaliador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_avaliado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_avaliacao' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'flag_finalizado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_superior_imediato' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_auto_avaliacao' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_subordinado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_cliente_interno' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_fornecedor_interno' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_360' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_pares' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_avaliador_aprovado' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_avaliacao_concluida' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'valor_criterio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'flag_criterio_finalizado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'flag_avaliacao_iniciada' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Avaliacao_Avaliadores_Avaliacao_Grupo_Modelo' => ['type' => 'index', 'columns' => ['avaliacao_grupo_modelo_id'], 'length' => []],
            'FK_Avaliacao_Avaliadores_Usuario' => ['type' => 'index', 'columns' => ['usuario_avaliador_id'], 'length' => []],
            'FK_Avaliacao_Avaliadores_Usuario1' => ['type' => 'index', 'columns' => ['usuario_avaliado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Avaliacao_Avaliadores_Avaliacao_Grupo_Modelo' => ['type' => 'foreign', 'columns' => ['avaliacao_grupo_modelo_id'], 'references' => ['avaliacao_grupo_modelos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Avaliadores_Usuario' => ['type' => 'foreign', 'columns' => ['usuario_avaliador_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Avaliadores_Usuario1' => ['type' => 'foreign', 'columns' => ['usuario_avaliado_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'avaliacao_grupo_modelo_id' => 1,
            'usuario_avaliador_id' => 1,
            'usuario_avaliado_id' => 1,
            'valor_avaliacao' => 1,
            'flag_finalizado' => 1,
            'flag_superior_imediato' => 1,
            'flag_auto_avaliacao' => 1,
            'flag_subordinado' => 1,
            'flag_cliente_interno' => 1,
            'flag_fornecedor_interno' => 1,
            'flag_360' => 1,
            'flag_pares' => 1,
            'flag_avaliador_aprovado' => 1,
            'flag_avaliacao_concluida' => 1,
            'valor_criterio' => 1,
            'flag_criterio_finalizado' => 1,
            'flag_avaliacao_iniciada' => 1,
            'created' => '2015-10-25 01:03:21',
            'modified' => '2015-10-25 01:03:21',
            'status' => 1
        ],
    ];
}
