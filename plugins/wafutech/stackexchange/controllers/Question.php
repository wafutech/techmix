<?php namespace Wafutech\Stackexchange\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Question Back-end Controller
 */
class Question extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    protected $fillable =['question','question_detail','user_id','category_id'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Wafutech.Stackexchange', 'stackexchange', 'question');
    }
}
