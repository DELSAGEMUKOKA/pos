<?php

namespace App\Livewire;

use Livewire\Component;

class Customer extends Component
{
    
    public string $name;
    public string $email;
    public string $phone;
    public string $shopname;
    public string $account_holder;
    public string $account_number;
    public string $bank_name;
    public string $bank_branch;
    public string $city;
    public string $address;

    public function render()
    {
        return view('livewire.customer');
    }

    public function addCustomer() {
        
    }

}
