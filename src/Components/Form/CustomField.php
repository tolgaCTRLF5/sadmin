<?php

namespace OmerKamcili\Sadmin\Components\Form;

use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;

/**
 * Class CustomField
 * @package OmerKamcili\Sadmin\Components\Form
 */
class CustomField extends FormElementInterface
{

    /**
     * @var string
     */
    public $view = 'form-elements/custom-field';

    /**
     * CustomField constructor.
     *
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {

        parent::__construct($properties);

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    function render()
    {
        return View::make($this->view, ['row' => $this])->render();
    }
}
