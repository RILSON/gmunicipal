<?php
namespace App\Model\Table;

use App\Model\Entity\MediaAvaliaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MediaAvaliacoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoDesempenhos
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 */
class MediaAvaliacoesTable extends Table
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

        $this->table('media_avaliacoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoDesempenhos', [
            'foreignKey' => 'avaliacao_desempenho_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_id'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_superior_1_id'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_par_1_id'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_par_2_id'
        ]);
        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_superior_2_id'
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
            ->add('nota_auto_avaliacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_auto_avaliacao');

        $validator
            ->add('peso_auto_avaliacao', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_auto_avaliacao');

        $validator
            ->add('nota_superior_1', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_superior_1');

        $validator
            ->add('peso_superior', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_superior');

        $validator
            ->add('nota_par_1', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_par_1');

        $validator
            ->add('nota_par_2', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_par_2');

        $validator
            ->add('peso_pares', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_pares');

        $validator
            ->add('nota_media_pares', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_media_pares');

        $validator
            ->add('nota_final', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_final');

        $validator
            ->add('nota_superior_2', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_superior_2');

        $validator
            ->add('nota_media_superior', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nota_media_superior');

        $validator
            ->allowEmpty('feedback');

        $validator
            ->add('flag_feedback_concluido', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_feedback_concluido', 'create')
            ->notEmpty('flag_feedback_concluido');

        $validator
            ->add('nota_criterio', 'valid', ['rule' => 'numeric'])
            ->requirePresence('nota_criterio', 'create')
            ->notEmpty('nota_criterio');

        $validator
            ->add('peso_criterio', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_criterio', 'create')
            ->notEmpty('peso_criterio');

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
        $rules->add($rules->existsIn(['avaliacao_desempenho_id'], 'AvaliacaoDesempenhos'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_id'], 'AvaliacaoAvaliadores'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_superior_1_id'], 'AvaliacaoAvaliadores'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_par_1_id'], 'AvaliacaoAvaliadores'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_par_2_id'], 'AvaliacaoAvaliadores'));
        $rules->add($rules->existsIn(['avaliacao_avaliador_superior_2_id'], 'AvaliacaoAvaliadores'));
        return $rules;
    }
}
