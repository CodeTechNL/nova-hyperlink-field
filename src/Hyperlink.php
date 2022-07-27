<?php

namespace Codetech\Hyperlink;

use Laravel\Nova\Fields\Field;
use function Aws\map;

class Hyperlink extends Field
{

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'hyperlink';

    /**
     * @return Hyperlink
     */
    public function url(string $url): static
    {
        return $this->withMeta([
            'url' => $url
        ]);
    }

    /**
     * @return Hyperlink
     */
    public function label(string $label): static
    {
        return $this->withMeta([
            'label' => $label
        ]);
    }

    /**
     * @param string $target
     * @return Hyperlink
     */
    public function target(string $target = '_blank'): static
    {
        return $this->withMeta([
            'target' => $target
        ]);
    }

    /**
     * @return Hyperlink
     */
    public function classes(): static
    {
        return $this->withMeta([
            'classes' => implode(' ', func_get_args())
        ]);
    }
}
