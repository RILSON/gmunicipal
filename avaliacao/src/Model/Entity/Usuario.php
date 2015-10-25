<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 *
 * @property int $id
 * @property int $cargo_id
 * @property \App\Model\Entity\Cargo $cargo
 * @property int $departamento_id
 * @property \App\Model\Entity\Departamento $departamento
 * @property int $perfil_id
 * @property \App\Model\Entity\Perfil $perfil
 * @property string $nome
 * @property string $matricula
 * @property \Cake\I18n\Time $data_admissao
 * @property string $email
 * @property string $login
 * @property string $password
 * @property bool $flag_first_login
 * @property bool $flag_trocar_senha
 * @property bool $flag_avaliador
 * @property bool $flag_demitido
 * @property bool $flag_administrador
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 * @property \App\Model\Entity\MediaAvaliaco[] $media_avaliacoes
 */
class Usuario extends Entity
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
