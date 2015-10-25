<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ModeloAvaliaco Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property bool $flag_360
 * @property bool $flag_270
 * @property bool $flag_180
 * @property bool $flag_por_comite
 * @property bool $flag_top_down
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class ModeloAvaliaco extends Entity
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
