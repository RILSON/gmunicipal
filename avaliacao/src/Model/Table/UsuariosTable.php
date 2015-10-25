<?php
namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cargos
 * @property \Cake\ORM\Association\BelongsTo $Departamentos
 * @property \Cake\ORM\Association\BelongsTo $Perfils
 * @property \Cake\ORM\Association\HasMany $MediaAvaliacoes
 */
class UsuariosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cargos', [
            'foreignKey' => 'cargo_id'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Perfils', [
            'foreignKey' => 'perfil_id'
        ]);
        $this->hasMany('MediaAvaliacoes', [
            'foreignKey' => 'usuario_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('matricula');

        $validator
            ->add('data_admissao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_admissao');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');

        $validator
            ->allowEmpty('login');

        $validator
            ->allowEmpty('password');

        $validator
            ->add('flag_first_login', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_first_login');

        $validator
            ->add('flag_trocar_senha', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_trocar_senha');

        $validator
            ->add('flag_avaliador', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_avaliador');

        $validator
            ->add('flag_demitido', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_demitido');

        $validator
            ->add('flag_administrador', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_administrador');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->existsIn(['cargo_id'], 'Cargos'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['perfil_id'], 'Perfils'));
        return $rules;
    }
}
