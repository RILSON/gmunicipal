<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MediaAvaliaco Entity.
 *
 * @property int $id
 * @property int $avaliacao_desempenho_id
 * @property \App\Model\Entity\AvaliacaoDesempenho $avaliacao_desempenho
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $avaliacao_avaliador_id
 * @property float $nota_auto_avaliacao
 * @property float $peso_auto_avaliacao
 * @property int $avaliacao_avaliador_superior_1_id
 * @property float $nota_superior_1
 * @property float $peso_superior
 * @property int $avaliacao_avaliador_par_1_id
 * @property float $nota_par_1
 * @property int $avaliacao_avaliador_par_2_id
 * @property float $nota_par_2
 * @property float $peso_pares
 * @property float $nota_media_pares
 * @property float $nota_final
 * @property int $avaliacao_avaliador_superior_2_id
 * @property \App\Model\Entity\AvaliacaoAvaliadore $avaliacao_avaliadore
 * @property float $nota_superior_2
 * @property float $nota_media_superior
 * @property string $feedback
 * @property bool $flag_feedback_concluido
 * @property float $nota_criterio
 * @property float $peso_criterio
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class MediaAvaliaco extends Entity
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
