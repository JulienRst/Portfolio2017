<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LinkPartnersProjects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Partners
 * @property \Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\LinkPartnersProject get($primaryKey, $options = [])
 * @method \App\Model\Entity\LinkPartnersProject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LinkPartnersProject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LinkPartnersProject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LinkPartnersProject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LinkPartnersProject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LinkPartnersProject findOrCreate($search, callable $callback = null)
 */
class LinkPartnersProjectsTable extends Table
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

        $this->table('link_partners_projects');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Partners', [
            'foreignKey' => 'partner_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['partner_id'], 'Partners'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));

        return $rules;
    }
}
