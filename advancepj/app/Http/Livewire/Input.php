<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Input extends Component
{
    public $posts;
    public $firstname;
    public $lastname;
    public $email;
    public $postcode;
    public $address;
    public $opinion;

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|max:8|min:8',
        'address' => 'required',
        'opinion' => 'required',
    ];
    protected $messages = [
        'required' => '必須項目です',
        'email' => '正しいメールアドレスを入力ください',
        'max'=>'半角英数字8字(ハイフン含む)で入力してください',
        'min' => '半角英数字8字(ハイフン含む)で入力してください'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);
    }
}