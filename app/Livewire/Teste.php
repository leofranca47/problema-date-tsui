<?php

namespace App\Livewire;

use Livewire\Component;

class Teste extends Component
{
    public \App\Livewire\Forms\teste $form;

    public function updatedFormCep(): void
    {
        $this->form->resultado = $this->form->cep;
    }

    public function render()
    {
        return view('livewire.teste');
    }
}
