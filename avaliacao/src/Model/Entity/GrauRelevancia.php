<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GrauRelevancia Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property int $peso
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\Competencia[] $competencias
 */
class GrauRelevancia extends Entity
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
