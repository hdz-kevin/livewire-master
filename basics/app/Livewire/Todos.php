<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos Page')]
class Todos extends Component
{
    // model propertie
    public $todo = '';

    public $todos = [];

    /**
     * A Lifecycle hook is just a method that Livewire calls at a specific point in the component's lifecycle.
     *
     * Mount is gonna call anytime the component is mounted on the page.
     * It is a good place to initialize properties or perform any setup tasks.
     */
    public function mount() {
        $this->todos = [
            'Learn Livewire',
            'Build a Todo App',
            'Share with the community',
        ];
    }

    /**
     * The updated hook is called anytime a property is updated.
     */
    public function updated($property, $value) {
        $this->$property = strtoupper($value);
    }

    /**
     * Handle a specific property update
     */
    public function updatedTodo($value) {
        $this->todo = strtoupper($value." - ");
    }

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
