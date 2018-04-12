<?php namespace Wafutech\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Models\User;
use Rainlab\User\Controllers\Users as UsersController;
use Wafutech\Profile\Models\Profile;

class Plugin extends PluginBase
{
       public $require = ['RainLab.User'];
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function pluginDetails()
    {
        return [
            'name'        => 'Profile',
            'description' => 'extends user models to provide room for the user profile fields',
            'author'      => 'wafutech',
            'icon'        => 'icon-user'
        ];
    }

    public function boot()
    {
        //Add custom fields on users list at the backend
        UsersController::extendListColumns(function($list,$model)
        {
            if(!$model instanceof User)
                return;
            $list->addColumns([
                'profile[first_name]'=>[
                        'label'=>'First Name'
                    ],
                    'profile[last_name]'=>[
                        'label'=>'Last Name'
                    ],


            ]);



        });
        User::extend(function($model)
        {
            $model->hasOne['profile'] =['Wafutech\Profile\Models\Profile'];
        });
        UsersController::extendFormFields(function($form,$model,$context)
    	{
    		//Only instance of User model can extent this controller
            if(!$model instanceof User)
                return;
            if(!$model->exists)
                return;
            //Ensures that the user always has a profile or Profile Model exists
            Profile::getFromUser($model);

            $form->addTabFields(
    			[
    				'profile[first_name]'=>[
    					'label'=>'First Name',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],
    				'profile[last_name]'=>[
    					'label'=>'Last Name',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[sex]'=>[
    					'label'=>'Sex',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[bio]'=>[
    					'label'=>'Bio',
    					 'type'=>'textarea',
    					 'tab'=>'Profile'

    				],

    				'profile[phone]'=>[
    					'label'=>'Telephone/Mobile',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[country_code]'=>[
    					'label'=>'Phone Country Code',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[address]'=>[
    					'label'=>'Address',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[city]'=>[
    					'label'=>'City/Town',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[zip]'=>[
    					'label'=>'Zip Code',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[country]'=>[
    					'label'=>'country',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],

    				'profile[region]'=>[
    					'label'=>'Region/County/State',
    					 'type'=>'text',
    					 'tab'=>'Profile'

    				],
    				'profile[avatar]'=>[
    					'label'=>'Profile Image',
    					 'type'=>'text',
    					 'tab'=>'Profile Image'

    				],

    				'profile[facebook]'=>[
    					'label'=>'FaceBook',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				'profile[twitter]'=>[
    					'label'=>'Twitter',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				'profile[google]'=>[
    					'label'=>'Google',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				'profile[pinterest]'=>[
    					'label'=>'Pinterest',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				'profile[whatsup]'=>[
    					'label'=>'Whatsup',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],
    				'profile[instagram]'=>[
    					'label'=>'Instagram',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				'profile[github]'=>[
    					'label'=>'Github',
    					 'type'=>'text',
    					 'tab'=>'Social Connections'

    				],

    				

    				'profile[college]'=>[
    					'label'=>'College or University',
    					 'type'=>'text',
    					 'tab'=>'Education & Experiences'

    				],

    				'profile[high_school]'=>[
    					'label'=>'High School',
    					 'type'=>'text',
    					 'tab'=>'Education & Experiences'

    				],

    				'profile[skills]'=>[
    					'label'=>'Skills',
    					 'type'=>'text',
    					 'tab'=>'Education & Experiences'

    				],

    				'profile[work_experience]'=>[
    					'label'=>'Work Experience',
    					 'type'=>'textarea',
    					 'tab'=>'Education & Experiences'

    				],


    				'profile[awards]'=>[
    					'label'=>'Awards',
    					 'type'=>'textarea',
    					 'tab'=>'Education & Experiences'

    				]
    			]);

    	});

    }
}
