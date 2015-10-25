<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModeloTipoAvaliacoesFixture
 *
 */
class ModeloTipoAvaliacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'modelo_avaliacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_avaliacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'peso_sugerido' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Modelo_Tipo_Avaliacao_Modelo_Avaliacao' => ['type' => 'index', 'columns' => ['modelo_avaliacao_id'], 'length' => []],
            'FK_Modelo_Tipo_Avaliacao_Tipo_Avaliacao' => ['type' => 'index', 'columns' => ['tipo_avaliacao_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Modelo_Tipo_Avaliacao_Modelo_Avaliacao' => ['type' => 'foreign', 'columns' => ['modelo_avaliacao_id'], 'references' => ['modelo_avaliacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Modelo_Tipo_Avaliacao_Tipo_Avaliacao' => ['type' => 'foreign', 'columns' => ['tipo_avaliacao_id'], 'references' => ['tipo_avaliacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'modelo_avaliacao_id' => 1,
            'tipo_avaliacao_id' => 1,
            'peso_sugerido' => 1,
            'created' => '2015-10-25 01:02:28',
            'modified' => '2015-10-25 01:02:28',
            'status' => 1
        ],
    ];
}
