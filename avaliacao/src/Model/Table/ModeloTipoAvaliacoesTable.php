<?php
namespace App\Model\Table;

use App\Model\Entity\ModeloTipoAvaliaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModeloTipoAvaliacoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ModeloAvaliacoes
 * @property \Cake\ORM\Association\BelongsTo $TipoAvaliacoes
 */
class ModeloTipoAvaliacoesTable extends Table
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

        $this->table('modelo_tipo_avaliacoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ModeloAvaliacoes', [
            'foreignKey' => 'modelo_avaliacao_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TipoAvaliacoes', [
            'foreignKey' => 'tipo_avaliacao_id',
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
            ->add('peso_sugerido', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_sugerido', 'create')
            ->notEmpty('peso_sugerido');

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
        $rules->add($rules->existsIn(['modelo_avaliacao_id'], 'ModeloAvaliacoes'));
        $rules->add($rules->existsIn(['tipo_avaliacao_id'], 'TipoAvaliacoes'));
        return $rules;
    }
}
