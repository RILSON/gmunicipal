<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feedback Entity.
 *
 * @property int $id
 * @property int $media_avaliacao_id
 * @property \App\Model\Entity\MediaAvaliaco $media_avaliaco
 * @property string $descricao
 * @property int $prioridade_acao_id
 * @property \App\Model\Entity\PrioridadeAco $prioridade_aco
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class Feedback extends Entity
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
