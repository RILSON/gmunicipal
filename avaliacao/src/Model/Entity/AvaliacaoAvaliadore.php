<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AvaliacaoAvaliadore Entity.
 *
 * @property int $id
 * @property int $avaliacao_grupo_modelo_id
 * @property \App\Model\Entity\AvaliacaoGrupoModelo $avaliacao_grupo_modelo
 * @property int $usuario_avaliador_id
 * @property int $usuario_avaliado_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property float $valor_avaliacao
 * @property bool $flag_finalizado
 * @property bool $flag_superior_imediato
 * @property bool $flag_auto_avaliacao
 * @property bool $flag_subordinado
 * @property bool $flag_cliente_interno
 * @property bool $flag_fornecedor_interno
 * @property bool $flag_360
 * @property bool $flag_pares
 * @property bool $flag_avaliador_aprovado
 * @property bool $flag_avaliacao_concluida
 * @property float $valor_criterio
 * @property bool $flag_criterio_finalizado
 * @property bool $flag_avaliacao_iniciada
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 */
class AvaliacaoAvaliadore extends Entity
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
