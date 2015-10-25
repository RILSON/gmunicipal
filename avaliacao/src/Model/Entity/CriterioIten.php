<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CriterioIten Entity.
 *
 * @property int $id
 * @property int $criterio_id
 * @property \App\Model\Entity\Criterio $criterio
 * @property int $criterio_pontuacao_id
 * @property \App\Model\Entity\CriterioPontuaco $criterio_pontuaco
 * @property int $pontuacao
 * @property int $avaliacao_avaliador_id
 * @property \App\Model\Entity\AvaliacaoAvaliadore $avaliacao_avaliadore
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class CriterioIten extends Entity
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
