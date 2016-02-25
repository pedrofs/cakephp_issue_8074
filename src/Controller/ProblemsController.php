<?php
namespace App\Controller;

use Cake\I18n\I18n;

class ProblemsController extends AppController
{
    public function index()
    {
        I18n::locale('es');

        $this->paginate = [
            'finder' => 'translations',
            'contain' => [
                'Authors'
            ],
            'conditions' => [
                'Problems.visible' => true
            ],
            'order' => [
                'Problems.id' => 'ASC'
            ],
            'sortWhitelist' => [
                'id',
                'name'
            ],
            'limit' => 25
        ];

        $this->set('problems', $this->paginate($this->Problems));
    }
}
