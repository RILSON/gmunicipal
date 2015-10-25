<?php
namespace App\Model\Table;

use App\Model\Entity\AvaliacaoGrupoModelo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AvaliacaoGrupoModelos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoDesempenhos
 * @property \Cake\ORM\Association\BelongsTo $Grupos
 * @property \Cake\ORM\Association\BelongsTo $ModeloTipoAvaliacoes
 * @property \Cake\ORM\Association\HasMany $AvaliacaoAvaliadores
 */
class AvaliacaoGrupoModelosTable extends Table
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

        $this->table('avaliacao_grupo_modelos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoDesempenhos', [
            'foreignKey' => 'avaliacao_desempenho_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ModeloTipoAvaliacoes', [
            'foreignKey' => 'modelo_tipo_avaliacao_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_grupo_modelo_id'
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
            ->add('peso_real', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_real', 'create')
            ->notEmpty('peso_real');

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
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['modelo_tipo_avaliacao_id'], 'ModeloTipoAvaliacoes'));
        return $rules;
    }
}
