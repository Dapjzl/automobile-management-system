<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Redirect extends Component
{
    public function doRedirect()
    {
        if(Auth::user()->utype === "ADM")
        {
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth::user()->utype === "CUS")
        {
            return redirect()->route('home');
        }
        elseif(Auth::user()->utype === "SEL")
        {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        $this->doRedirect();
        return view('livewire.redirect');
    }

}
