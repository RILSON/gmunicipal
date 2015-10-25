<?php
namespace App\Model\Table;

use App\Model\Entity\AvaliacaoDesempenhoIten;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AvaliacaoDesempenhoItens Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoAvaliadores
 * @property \Cake\ORM\Association\BelongsTo $Evidencias
 * @property \Cake\ORM\Association\BelongsTo $NivelProficiencias
 */
class AvaliacaoDesempenhoItensTable extends Table
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

        $this->table('avaliacao_desempenho_itens');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoAvaliadores', [
            'foreignKey' => 'avaliacao_avaliador_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Evidencias', [
            'foreignKey' => 'evidencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('NivelProficiencias', [
            'foreignKey' => 'nivel_proficiencia_id'
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
            ->allowEmpty('observacao');

        $validator
            ->add('peso_competencia_cargo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_competencia_cargo');

        $validator
            ->add('somatorio_relevancia_competencia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('somatorio_relevancia_competencia');

        $validator
            ->add('quantidade_competencia_tipo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantidade_competencia_tipo');

        $validator
            ->add('grau_relevancia_competencia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('grau_relevancia_competencia');

        $validator
            ->add('qtde_perguntas_competencia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qtde_perguntas_competencia');

        $validator
            ->add('valor_maximo_evidencia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_maximo_evidencia');

        $validator
            ->add('valor_resposta', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_resposta');

        $validator
            ->add('valor_maximo_competencia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_maximo_competencia');

        $validator
            ->add('divisor_nivel', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('divisor_nivel');

        $validator
            ->add('valor_resposta_peso', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_resposta_peso');

        $validator
            ->add('peso_real', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('peso_real');

        $validator
            ->add('quantidade_superior_imediato', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantidade_superior_imediato');

        $validator
            ->add('quantidade_pares', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantidade_pares');

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
        $rules->add($rules->existsIn(['avaliacao_avaliador_id'], 'AvaliacaoAvaliadores'));
        $rules->add($rules->existsIn(['evidencia_id'], 'Evidencias'));
        $rules->add($rules->existsIn(['nivel_proficiencia_id'], 'NivelProficiencias'));
        return $rules;
    }
}
