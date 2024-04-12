<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class TestValidation extends Component
{
    #[Validate('required|email', message: 'custom message')]
    public string $email;

    public function render()
    {
        return view('site.livewire.test-validation');
    }

    public function submit()
    {
        $this->validate();
    }
}
