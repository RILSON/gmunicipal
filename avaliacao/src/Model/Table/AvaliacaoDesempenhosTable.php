<?php
namespace App\Model\Table;

use App\Model\Entity\AvaliacaoDesempenho;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AvaliacaoDesempenhos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $StatusAvaliacoes
 * @property \Cake\ORM\Association\HasMany $AvaliacaoGrupoModelos
 * @property \Cake\ORM\Association\HasMany $Competencias
 * @property \Cake\ORM\Association\HasMany $Emails
 * @property \Cake\ORM\Association\HasMany $Evidencias
 * @property \Cake\ORM\Association\HasMany $MediaAvaliacoes
 */
class AvaliacaoDesempenhosTable extends Table
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

        $this->table('avaliacao_desempenhos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StatusAvaliacoes', [
            'foreignKey' => 'status_avaliacao_id'
        ]);
        $this->hasMany('AvaliacaoGrupoModelos', [
            'foreignKey' => 'avaliacao_desempenho_id'
        ]);
        $this->hasMany('Competencias', [
            'foreignKey' => 'avaliacao_desempenho_id'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'avaliacao_desempenho_id'
        ]);
        $this->hasMany('Evidencias', [
            'foreignKey' => 'avaliacao_desempenho_id'
        ]);
        $this->hasMany('MediaAvaliacoes', [
            'foreignKey' => 'avaliacao_desempenho_id'
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
        $rules->add($rules->existsIn(['status_avaliacao_id'], 'StatusAvaliacoes'));
        return $rules;
    }
}
