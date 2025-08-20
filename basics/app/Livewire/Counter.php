<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
class Counter extends Component
{
    // All public properties are automatically available to the view
    public $count = 0;

    // Any public method can be called from the view and any parameters
    // can be passed to it.

    public function increment($by)
    {
        // Increment the count property by the specified amount
        $this->count += $by;

        // Important: Don't trust frontend input parameters
    }

    public function decrement($by = 1)
    {
        if ($this->count > 0) {
            $this->count -= $by;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
