<?php
namespace App\Model\Table;

use App\Model\Entity\Competencia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competencias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoDesempenhos
 * @property \Cake\ORM\Association\BelongsTo $TipoCompetencias
 * @property \Cake\ORM\Association\BelongsTo $GrauRelevancias
 * @property \Cake\ORM\Association\HasMany $Evidencias
 */
class CompetenciasTable extends Table
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

        $this->table('competencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoDesempenhos', [
            'foreignKey' => 'avaliacao_desempenho_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TipoCompetencias', [
            'foreignKey' => 'tipo_competencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GrauRelevancias', [
            'foreignKey' => 'grau_relevancia_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Evidencias', [
            'foreignKey' => 'competencia_id'
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
        $rules->add($rules->existsIn(['avaliacao_desempenho_id'], 'AvaliacaoDesempenhos'));
        $rules->add($rules->existsIn(['tipo_competencia_id'], 'TipoCompetencias'));
        $rules->add($rules->existsIn(['grau_relevancia_id'], 'GrauRelevancias'));
        return $rules;
    }
}
