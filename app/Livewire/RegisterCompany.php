<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use Illuminate\Support\Str;
class RegisterCompany extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;
    #[Validate('required')]
    public $confirm_password;
    #[Validate('required')]
    public $tax_code;
    #[Validate('required')]
    public $phone;

    public function register(){
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Company::create([
            'name' => $this->name,
            'user_id' => $user->id,
            'email' => $this->email,
            'slug' => Str::slug($this->name),
            'phone' => $this->phone,
            'tax_code' => $this->tax_code
        ]);

    }


    public function render()
    {
        return view('livewire.register-company');
    }
}
