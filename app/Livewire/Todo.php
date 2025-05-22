<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $items = [];
    public $textContent;

    public function add()
    {
        array_push($this->items, $this->textContent);
    }

    public function remove($item)
    {
        $key = array_search($item, $this->items);
        if ($key === false) {
            dd("failed to find item " . $item);
        }

        unset($this->items[$key]);
    }

    public function render()
    {
        return view("livewire.todo");
    }
}
