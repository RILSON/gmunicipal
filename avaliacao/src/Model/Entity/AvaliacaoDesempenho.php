<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AvaliacaoDesempenho Entity.
 *
 * @property int $id
 * @property int $status_avaliacao_id
 * @property \App\Model\Entity\StatusAvaliaco $status_avaliaco
 * @property string $descricao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\AvaliacaoGrupoModelo[] $avaliacao_grupo_modelos
 * @property \App\Model\Entity\Competencia[] $competencias
 * @property \App\Model\Entity\Email[] $emails
 * @property \App\Model\Entity\Evidencia[] $evidencias
 * @property \App\Model\Entity\MediaAvaliaco[] $media_avaliacoes
 */
class AvaliacaoDesempenho extends Entity
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
