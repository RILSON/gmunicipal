<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evidencia Entity.
 *
 * @property int $id
 * @property int $avaliacao_desempenho_id
 * @property \App\Model\Entity\AvaliacaoDesempenho $avaliacao_desempenho
 * @property int $competencia_id
 * @property \App\Model\Entity\Competencia $competencia
 * @property int $cargo_id
 * @property \App\Model\Entity\Cargo $cargo
 * @property int $grupo_id
 * @property \App\Model\Entity\Grupo $grupo
 * @property string $descricao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\AvaliacaoDesempenhoIten[] $avaliacao_desempenho_itens
 */
class Evidencia extends Entity
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
