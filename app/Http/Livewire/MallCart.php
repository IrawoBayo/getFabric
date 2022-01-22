<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MallCart extends Component
{
	public $cartItems = [];
	

	protected $listeners = ['cartUpdated' => 'onCartUpdate'];




	public function mount()
	{
		
		$this->cartItems = \Cart::session(auth()->id())->getcontent()->toArray();
	}

	public function onCartUpdate()
	{
		// $this->cartItems = \Cart::session(auth()->id())->getcontent()->toArray();
		$this->mount();
	}

    public function render()
    {
        return view('livewire.mall-cart');
    }
}
