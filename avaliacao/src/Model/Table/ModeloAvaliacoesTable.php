<?php
namespace App\Model\Table;

use App\Model\Entity\ModeloAvaliaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModeloAvaliacoes Model
 *
 */
class ModeloAvaliacoesTable extends Table
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

        $this->table('modelo_avaliacoes');
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
            ->add('flag_360', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_360', 'create')
            ->notEmpty('flag_360');

        $validator
            ->add('flag_270', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_270', 'create')
            ->notEmpty('flag_270');

        $validator
            ->add('flag_180', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_180', 'create')
            ->notEmpty('flag_180');

        $validator
            ->add('flag_por_comite', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_por_comite', 'create')
            ->notEmpty('flag_por_comite');

        $validator
            ->add('flag_top_down', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_top_down', 'create')
            ->notEmpty('flag_top_down');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
