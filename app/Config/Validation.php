<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $newContact = [

        'first_name' => [
            'label' => 'First Name',
            'rules' => 'required|min_length[3]|max_length[20]'
        ],

        'last_name' => [
            'label' => 'Last Name',
            'rules' => 'required'
        ],

        'phone' => [
            'label' => 'Phone',
            'rules' => 'required|min_length[8]'
        ],

        'email' => [
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ],

        'address_line' => [
            'label' => 'Address',
            'rules' => 'required'
        ],

        'city' => [
            'label' => 'City',
            'rules' => 'required'
        ],

        'postcode' => [
            'label' => 'Postcode',
            'rules' => 'required|alpha_numeric|min_length[8]'
        ]

    ];
}
