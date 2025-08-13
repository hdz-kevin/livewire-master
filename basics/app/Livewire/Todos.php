<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    // model propertie
    public $todo = '';

    public $todos = [
        'Learn Livewire',
        'Build a cool app',
        'Profit!',
    ];

    public function add()
    {
        if (trim($this->todo) === '') {
            return;
        }

        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
