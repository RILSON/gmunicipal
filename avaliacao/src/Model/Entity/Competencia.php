<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competencia Entity.
 *
 * @property int $id
 * @property int $avaliacao_desempenho_id
 * @property \App\Model\Entity\AvaliacaoDesempenho $avaliacao_desempenho
 * @property int $tipo_competencia_id
 * @property \App\Model\Entity\TipoCompetencia $tipo_competencia
 * @property int $grau_relevancia_id
 * @property \App\Model\Entity\GrauRelevancia $grau_relevancia
 * @property string $nome
 * @property string $descricao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\Evidencia[] $evidencias
 */
class Competencia extends Entity
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
