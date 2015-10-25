<?php
namespace App\Model\Table;

use App\Model\Entity\Feedback;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feedbacks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $MediaAvaliacoes
 * @property \Cake\ORM\Association\BelongsTo $PrioridadeAcoes
 */
class FeedbacksTable extends Table
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

        $this->table('feedbacks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MediaAvaliacoes', [
            'foreignKey' => 'media_avaliacao_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PrioridadeAcoes', [
            'foreignKey' => 'prioridade_acao_id',
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
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

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
        $rules->add($rules->existsIn(['media_avaliacao_id'], 'MediaAvaliacoes'));
        $rules->add($rules->existsIn(['prioridade_acao_id'], 'PrioridadeAcoes'));
        return $rules;
    }
}
