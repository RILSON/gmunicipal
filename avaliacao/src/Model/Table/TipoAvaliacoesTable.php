<?php
namespace App\Model\Table;

use App\Model\Entity\TipoAvaliaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoAvaliacoes Model
 *
 */
class TipoAvaliacoesTable extends Table
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

        $this->table('tipo_avaliacoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
