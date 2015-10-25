<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoCompetencia Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property bool $flag_generica
 * @property bool $flag_gerencial
 * @property bool $flag_especifica
 * @property int $ordenacao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\Competencia[] $competencias
 */
class TipoCompetencia extends Entity
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
