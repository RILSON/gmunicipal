<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NivelProficiencia Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property string $sigla
 * @property int $divisor
 * @property float $inicio_escala
 * @property float $fim_escala
 * @property bool $flag_ab
 * @property bool $flag_ap
 * @property bool $flag_ae
 * @property bool $flag_ee
 * @property bool $flag_sb
 * @property int $ordenacao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\AvaliacaoDesempenhoIten[] $avaliacao_desempenho_itens
 */
class NivelProficiencia extends Entity
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
