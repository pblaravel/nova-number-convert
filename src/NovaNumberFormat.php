<?php

namespace Pblaravel\NovaNumberFormat;

use Laravel\Nova\Fields\Field;

class NovaNumberFormat extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-number-format';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->withMeta([
            'precision' => 2,
            'division' => 0,
        ]);
    }

    public function numberPrecision($precision = 2)
    {
        return $this->withMeta(['precision' => $precision]);
    }

    public function numberDivision($division = 10)
    {
        return $this->withMeta(['division' => $division]);
    }
}
