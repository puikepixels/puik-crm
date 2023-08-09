<?php

namespace App\Livewire\Forms;

use Puikepixels\PuikCrmCore\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CustomerForm extends Form
{
    public ?Customer $customer;

    #[Rule('required')]
    public $name = '';
    #[Rule('required|email')]
    public $email = '';
    public $phone = '';
    public $mobil = '';


    public function setPost(Customer $customer)
    {
        $this->customer = $customer;
 
        $this->name = $customer->name;
 
        $this->email = $customer->email;

        $this->phone = $customer->phone;

        $this->mobil = $customer->mobil;

    }
 
    public function store()
    {
        $this->validate();

        Customer::create($this->all());
    }
 
    public function update()
    {
        $this->validate();
        $this->customer->update(
            $this->all()
        );
    }

}
