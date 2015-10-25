<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AvaliacaoGrupoModelo Entity.
 *
 * @property int $id
 * @property int $avaliacao_desempenho_id
 * @property \App\Model\Entity\AvaliacaoDesempenho $avaliacao_desempenho
 * @property int $grupo_id
 * @property \App\Model\Entity\Grupo $grupo
 * @property int $modelo_tipo_avaliacao_id
 * @property \App\Model\Entity\ModeloTipoAvaliaco $modelo_tipo_avaliaco
 * @property int $peso_real
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\AvaliacaoAvaliadore[] $avaliacao_avaliadores
 */
class AvaliacaoGrupoModelo extends Entity
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
