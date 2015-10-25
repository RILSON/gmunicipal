<?php
namespace App\Model\Table;

use App\Model\Entity\AvaliacaoAvaliadore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AvaliacaoAvaliadores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoGrupoModelos
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 */
class AvaliacaoAvaliadoresTable extends Table
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

        $this->table('avaliacao_avaliadores');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoGrupoModelos', [
            'foreignKey' => 'avaliacao_grupo_modelo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_avaliador_id'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_avaliado_id',
            'joinType' => 'INNER'
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
            ->add('valor_avaliacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_avaliacao');

        $validator
            ->add('flag_finalizado', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_finalizado', 'create')
            ->notEmpty('flag_finalizado');

        $validator
            ->add('flag_superior_imediato', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_superior_imediato', 'create')
            ->notEmpty('flag_superior_imediato');

        $validator
            ->add('flag_auto_avaliacao', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_auto_avaliacao', 'create')
            ->notEmpty('flag_auto_avaliacao');

        $validator
            ->add('flag_subordinado', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_subordinado', 'create')
            ->notEmpty('flag_subordinado');

        $validator
            ->add('flag_cliente_interno', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_cliente_interno', 'create')
            ->notEmpty('flag_cliente_interno');

        $validator
            ->add('flag_fornecedor_interno', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_fornecedor_interno', 'create')
            ->notEmpty('flag_fornecedor_interno');

        $validator
            ->add('flag_360', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_360', 'create')
            ->notEmpty('flag_360');

        $validator
            ->add('flag_pares', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_pares', 'create')
            ->notEmpty('flag_pares');

        $validator
            ->add('flag_avaliador_aprovado', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_avaliador_aprovado');

        $validator
            ->add('flag_avaliacao_concluida', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('flag_avaliacao_concluida');

        $validator
            ->add('valor_criterio', 'valid', ['rule' => 'numeric'])
            ->requirePresence('valor_criterio', 'create')
            ->notEmpty('valor_criterio');

        $validator
            ->add('flag_criterio_finalizado', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_criterio_finalizado', 'create')
            ->notEmpty('flag_criterio_finalizado');

        $validator
            ->add('flag_avaliacao_iniciada', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_avaliacao_iniciada', 'create')
            ->notEmpty('flag_avaliacao_iniciada');

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
        $rules->add($rules->existsIn(['avaliacao_grupo_modelo_id'], 'AvaliacaoGrupoModelos'));
        $rules->add($rules->existsIn(['usuario_avaliador_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['usuario_avaliado_id'], 'Usuarios'));
        return $rules;
    }
}
