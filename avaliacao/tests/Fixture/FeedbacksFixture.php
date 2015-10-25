<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FeedbacksFixture
 *
 */
class FeedbacksFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'media_avaliacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descricao' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'prioridade_acao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_feedback_media_avaliacoes' => ['type' => 'index', 'columns' => ['media_avaliacao_id'], 'length' => []],
            'FK_feedback_prioridade_acao' => ['type' => 'index', 'columns' => ['prioridade_acao_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_feedback_media_avaliacoes' => ['type' => 'foreign', 'columns' => ['media_avaliacao_id'], 'references' => ['media_avaliacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_feedback_prioridade_acao' => ['type' => 'foreign', 'columns' => ['prioridade_acao_id'], 'references' => ['prioridade_acoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'media_avaliacao_id' => 1,
            'descricao' => 'Lorem ipsum dolor sit amet',
            'prioridade_acao_id' => 1,
            'created' => '2015-10-25 01:07:15',
            'modified' => '2015-10-25 01:07:15',
            'status' => 1
        ],
    ];
}
