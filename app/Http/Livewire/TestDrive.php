<?php

namespace App\Http\Livewire;

use App\Models\Tester;
use Livewire\Component;

class TestDrive extends Component
{
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $city;
    public $country;
    public $address;
    public $date;
    public $period;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
            'period' => ['required', 'string', 'max:255'],
        ]);
    }

    public function testDrive(){
        
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
            'period' => ['required', 'string', 'max:255'],
        ]);

        $test = new Tester();
        $test->firstname = $this->firstname;
        $test->lastname = $this->lastname;
        $test->phone = $this->phone; 
        $test->address = $this->address;
        $test->country = $this->country;
        $test->city = $this->city;
        $test->email = $this->email;
        $test->date = $this->date;
        $test->period = $this->period;

        $test->save();
        
        $this->dispatchBrowserEvent('tester-success');
    }

    
    public function render()
    {
        return view('livewire.test-drive')->layout('layouts.base');
    }
}
