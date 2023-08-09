<?php

namespace App\Livewire\Customers;

use App\Livewire\Forms\CustomerForm;
use Puikepixels\PuikCrmCore\Models\Customer;

use Livewire\Component;

class UpdateCustomer extends Component
{
    public CustomerForm $form;



    public function mount(Customer $customer)
    {
        $this->form->setPost($customer);
    }

     
    public function save()
    {
        $this->form->update();
        $message = "Opgeslagen";
        $this->dispatch('alert', type: 'success', message: $message);

        //$this->dispatch('alert', ['type' => 'sucess', 'message' => $message]);

        //$this->dispatch('post-created', postId: $post->id); 
     }

    public function render()
    {
        return view('livewire.customers.update-customer');
    }
}
