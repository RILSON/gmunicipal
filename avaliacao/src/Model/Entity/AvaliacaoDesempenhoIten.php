<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AvaliacaoDesempenhoIten Entity.
 *
 * @property int $id
 * @property int $avaliacao_avaliador_id
 * @property \App\Model\Entity\AvaliacaoAvaliadore $avaliacao_avaliadore
 * @property int $evidencia_id
 * @property \App\Model\Entity\Evidencia $evidencia
 * @property int $nivel_proficiencia_id
 * @property \App\Model\Entity\NivelProficiencia $nivel_proficiencia
 * @property string $observacao
 * @property int $peso_competencia_cargo
 * @property int $somatorio_relevancia_competencia
 * @property int $quantidade_competencia_tipo
 * @property int $grau_relevancia_competencia
 * @property int $qtde_perguntas_competencia
 * @property float $valor_maximo_evidencia
 * @property float $valor_resposta
 * @property float $valor_maximo_competencia
 * @property int $divisor_nivel
 * @property float $valor_resposta_peso
 * @property int $peso_real
 * @property int $quantidade_superior_imediato
 * @property int $quantidade_pares
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class AvaliacaoDesempenhoIten extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
