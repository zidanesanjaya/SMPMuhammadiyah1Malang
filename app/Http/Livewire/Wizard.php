<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $username, $birth_place, $birth_date, $status, $email, $phone;
    public $successMessage = '';

    public function firstStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'name' => 'required',
        //     'username' => 'required',
        //     'birth_place' => 'required',
        //     'birth_date' => 'required',
        //     'status' => 'required'
        // ]);
 
        $this->currentStep = 2;
    }
  
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'email' => 'required|unique:users,email',
        //     'phone' => 'required|numeric',
        // ]);
  
        $this->currentStep = 3;
    }
  
    public function submitForm()
    {
        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'birth_place' => $this->birth_place,
            'birth_date' => $this->birth_date,
            'status' => $this->status,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
  
        $this->successMessage = 'You\'ve successfully registered';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function clearForm()
    {
        $this->name = '';
        $this->username = '';
        $this->birth_place = '';
        $this->birth_date = '';
        $this->status = '';
        $this->email = '';
        $this->phone = '';
    }
    
    public function render()
    {
        return view('livewire.wizard');
    }
}
