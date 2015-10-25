<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ModeloTipoAvaliaco Entity.
 *
 * @property int $id
 * @property int $modelo_avaliacao_id
 * @property \App\Model\Entity\ModeloAvaliaco $modelo_avaliaco
 * @property int $tipo_avaliacao_id
 * @property \App\Model\Entity\TipoAvaliaco $tipo_avaliaco
 * @property int $peso_sugerido
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class ModeloTipoAvaliaco extends Entity
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
