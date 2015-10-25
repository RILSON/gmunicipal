<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property bool $flag_estrategico
 * @property bool $flag_tatico
 * @property bool $flag_operacional
 * @property int $peso_generica
 * @property int $peso_gerencial
 * @property int $peso_especifica
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\AvaliacaoGrupoModelo[] $avaliacao_grupo_modelos
 * @property \App\Model\Entity\Cargo[] $cargos
 * @property \App\Model\Entity\Criterio[] $criterios
 * @property \App\Model\Entity\Evidencia[] $evidencias
 */
class Grupo extends Entity
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
