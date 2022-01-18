<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    const REQUIRED = '<span class="text-blue-500">*</span>';
    const DISABLED = ' disabled';

    public $name;
    public $label;
    public $placeholder;
    public $comment;
    public $id;
    public $required;
    public $disabled;
    public $size;
    public $value;
    public $type;
    public $rows;

    public function __construct(
        string $name,
        string $label = null,
        string $placeholder = null,
        string $comment = null,
        string $id = null,
        bool $required = false,
        bool $disabled = false,
        string $value = null,
        string $type = null,
        int $rows = 6
    ) {
        $this->name = $name;
        $this->label = $label ?? ucfirst($name);
        $this->placeholder = $placeholder ?? '';
        $this->comment = $comment ?? '';
        $this->id = $id ?? $name;
        $this->required = $required ? $this::REQUIRED : '';
        $this->disabled = $disabled ? $this::DISABLED : '';
        $this->value = $value;
        $this->type = $type ?? 'text';
        $this->rows = $rows;
    }

    public function render()
    {
        return view('components.forms.textarea');
    }
}
