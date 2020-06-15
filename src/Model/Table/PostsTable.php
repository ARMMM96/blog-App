<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->requirePresence(('title'))
            ->notEmpty('body')
            ->requirePresence(('body'))
            ->notEmpty('author')
            ->requirePresence(('author'))
            ->notEmpty('category')
            ->requirePresence(('category'));
        return $validator;
    }
}
