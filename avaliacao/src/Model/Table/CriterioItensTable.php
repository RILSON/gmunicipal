<?php
namespace App\Model\Table;

use App\Model\Entity\CriterioIten;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CriterioItens Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Criterios
 * @property \Cake\ORM\Association\BelongsTo $CriterioPontuacoes
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 */
class CriterioItensTable extends Table
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

        $this->table('criterio_itens');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Criterios', [
            'foreignKey' => 'criterio_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CriterioPontuacoes', [
            'foreignKey' => 'criterio_pontuacao_id'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_id',
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
            ->add('pontuacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pontuacao');

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
        $rules->add($rules->existsIn(['criterio_id'], 'Criterios'));
        $rules->add($rules->existsIn(['criterio_pontuacao_id'], 'CriterioPontuacoes'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_id'], 'AvaliacaoAvaliadores'));
        return $rules;
    }
}
