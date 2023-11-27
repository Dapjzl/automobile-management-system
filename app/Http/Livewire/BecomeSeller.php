<?php

namespace App\Http\Livewire;


use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class BecomeSeller extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $country;
    public $address;
    public $city;
    public $profile;
    public $password;
    public $password_confirmation;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'profile' => ['required','mimes:png,jpg,jpeg','max:2048'],
            'city' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255','unique:users']
        ]);
    }


    public function beSeller()
    {
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'profile' => ['required','mimes:png,jpg,jpeg','max:2048'],
            'city' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'password_confirmation' => ['required', 'same:password', 'max:255'],
            'email' => ['required', 'string', 'email','max:255','unique:users']
        ]);
        $random = Str::random(5);
        $ranCode = "SEL-".$random;

        $utype = "SEL";
        $sel = new User();
        $sel->firstname = $this->firstname;
        $sel->lastname = $this->lastname;
        $sel->phone = $this->phone; 
        $sel->address = $this->address;
        $sel->country = $this->country;
        $sel->city = $this->city;
        $sel->email = $this->email;
        $sel->utype = $utype;
        $sel->password = Hash::make($this->password);
        $sel->code = $ranCode;

        $imageName = Carbon::now()->timestamp.'.'.$this->profile->getClientOriginalExtension();
        $this->profile->storeAs('seller_profile', $imageName);
        $sel->image = $imageName;

        $sel->save();
        
       $this->dispatchBrowserEvent('seller-success');
    }

    public function render()
    {
        return view('livewire.become-seller')->layout('layouts.base');
    }
}
