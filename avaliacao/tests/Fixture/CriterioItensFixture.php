<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CriterioItensFixture
 *
 */
class CriterioItensFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'criterio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'criterio_pontuacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pontuacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'avaliacao_avaliador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_criterio_item_criterio' => ['type' => 'index', 'columns' => ['criterio_id'], 'length' => []],
            'FK_criterio_item_criterio_pontuacao' => ['type' => 'index', 'columns' => ['criterio_pontuacao_id'], 'length' => []],
            'FK_criterio_item_avaliacao_avaliadores' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_criterio_item_avaliacao_avaliadores' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_criterio_item_criterio' => ['type' => 'foreign', 'columns' => ['criterio_id'], 'references' => ['criterios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_criterio_item_criterio_pontuacao' => ['type' => 'foreign', 'columns' => ['criterio_pontuacao_id'], 'references' => ['criterio_pontuacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'criterio_id' => 1,
            'criterio_pontuacao_id' => 1,
            'pontuacao' => 1,
            'avaliacao_avaliador_id' => 1,
            'created' => '2015-10-25 01:06:07',
            'modified' => '2015-10-25 01:06:07',
            'status' => 1
        ],
    ];
}
