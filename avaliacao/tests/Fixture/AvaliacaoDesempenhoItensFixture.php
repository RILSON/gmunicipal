<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AvaliacaoDesempenhoItensFixture
 *
 */
class AvaliacaoDesempenhoItensFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'avaliacao_avaliador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'evidencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nivel_proficiencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observacao' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'peso_competencia_cargo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'somatorio_relevancia_competencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidade_competencia_tipo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grau_relevancia_competencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'qtde_perguntas_competencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_maximo_evidencia' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_resposta' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_maximo_competencia' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'divisor_nivel' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_resposta_peso' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'peso_real' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidade_superior_imediato' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidade_pares' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Avaliacao_Desempenho_Item_Avaliacao_Avaliadores' => ['type' => 'index', 'columns' => ['avaliacao_avaliador_id'], 'length' => []],
            'FK_Avaliacao_Desempenho_Item_Evidencia' => ['type' => 'index', 'columns' => ['evidencia_id'], 'length' => []],
            'FK_Avaliacao_Desempenho_Item_Nivel_Proficiencia' => ['type' => 'index', 'columns' => ['nivel_proficiencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Avaliacao_Desempenho_Item_Avaliacao_Avaliadores' => ['type' => 'foreign', 'columns' => ['avaliacao_avaliador_id'], 'references' => ['avaliacao_avaliadores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Desempenho_Item_Evidencia' => ['type' => 'foreign', 'columns' => ['evidencia_id'], 'references' => ['evidencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Avaliacao_Desempenho_Item_Nivel_Proficiencia' => ['type' => 'foreign', 'columns' => ['nivel_proficiencia_id'], 'references' => ['nivel_proficiencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'avaliacao_avaliador_id' => 1,
            'evidencia_id' => 1,
            'nivel_proficiencia_id' => 1,
            'observacao' => 'Lorem ipsum dolor sit amet',
            'peso_competencia_cargo' => 1,
            'somatorio_relevancia_competencia' => 1,
            'quantidade_competencia_tipo' => 1,
            'grau_relevancia_competencia' => 1,
            'qtde_perguntas_competencia' => 1,
            'valor_maximo_evidencia' => 1,
            'valor_resposta' => 1,
            'valor_maximo_competencia' => 1,
            'divisor_nivel' => 1,
            'valor_resposta_peso' => 1,
            'peso_real' => 1,
            'quantidade_superior_imediato' => 1,
            'quantidade_pares' => 1,
            'created' => '2015-10-25 01:04:40',
            'modified' => '2015-10-25 01:04:40',
            'status' => 1
        ],
    ];
}
