<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MediaAvaliacoesFixture
 *
 */
class MediaAvaliacoesFixture extends TestFixture
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
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'avaliacao_avaliador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nota_auto_avaliacao' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'peso_auto_avaliacao' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'avaliacao_avaliador_superior_1_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nota_superior_1' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'peso_superior' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'avaliacao_avaliador_par_1_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nota_par_1' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'avaliacao_avaliador_par_2_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nota_par_2' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'peso_pares' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'nota_media_pares' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'nota_final' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'avaliacao_avaliador_superior_2_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nota_superior_2' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'nota_media_superior' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'feedback' => ['type' => 'string', 'length' => 1500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'flag_feedback_concluido' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'nota_criterio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'peso_criterio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_id'], 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores2' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_par_1_id'], 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores3' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_par_2_id'], 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Desempenho' => ['type' => 'index', 'columns' => ['avaliacao_desempenho_id'], 'length' => []],
            'FK_Media_Avaliacoes_Usuario' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores1' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_superior_1_id'], 'length' => []],
            'FK_media_avaliacoes_7' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_superior_2_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores1' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_superior_1_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores2' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_par_1_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Avaliadores3' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_par_2_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Media_Avaliacoes_Avaliacao_Desempenho' => ['type' => 'foreign', 'columns' => ['avaliacao_desempenho_id'], 'references' => ['avaliacao_desempenhos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Media_Avaliacoes_Usuario' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_media_avaliacoes_7' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_superior_2_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'usuario_id' => 1,
            'avaliacao_avaliador_id' => 1,
            'nota_auto_avaliacao' => 1,
            'peso_auto_avaliacao' => 1,
            'avaliacao_avaliador_superior_1_id' => 1,
            'nota_superior_1' => 1,
            'peso_superior' => 1,
            'avaliacao_avaliador_par_1_id' => 1,
            'nota_par_1' => 1,
            'avaliacao_avaliador_par_2_id' => 1,
            'nota_par_2' => 1,
            'peso_pares' => 1,
            'nota_media_pares' => 1,
            'nota_final' => 1,
            'avaliacao_avaliador_superior_2_id' => 1,
            'nota_superior_2' => 1,
            'nota_media_superior' => 1,
            'feedback' => 'Lorem ipsum dolor sit amet',
            'flag_feedback_concluido' => 1,
            'nota_criterio' => 1,
            'peso_criterio' => 1,
            'created' => '2015-10-25 01:06:59',
            'modified' => '2015-10-25 01:06:59',
            'status' => 1
        ],
    ];
}
