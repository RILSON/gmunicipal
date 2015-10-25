<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoAvaliaco Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property bool $flag_superior_imediato
 * @property bool $flag_auto_avaliacao
 * @property bool $flag_subordinado
 * @property bool $flag_cliente_interno
 * @property bool $flag_fornecedor_interno
 * @property bool $flag_360
 * @property bool $flag_pares
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class TipoAvaliaco extends Entity
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
