<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartUpdateForm extends Component
{

	public $item = [];

	public $quantity = 0;

	public function mount($item)
	{
		$this->item = $item;

		$this->quantity = $item['quantity'];
	}

	public function updateCart()
	{
		dd('updating cart baby');
	}



    public function render()
    {
        return view('livewire.cart-update-form');
    }
}
