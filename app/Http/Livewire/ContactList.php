<?php

namespace App\Http\Livewire;
use App\Models\ContactUs;
use App\Models\student;
use Livewire\Component;

class ContactList extends Component
{
    public $name;
    public $email;
    public $phone;
    public $rollno;
    public $message;

    /*public $mobile ="014455696";

    public function updateMessage(){
        $this->message ="form is updated";
    }
    
    protected $listeners =[
        'OpenContactUsModal',
    ];
    

    public function OpenContactUsModal(){
        $this->dispatchBrowserEvent('modalOpen','contuctUsModal');
    }*/
    public function submit(){
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        dd($this->name,$this->email,$this->phone,$this->message);
        /*$contact = new ContactUs;
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();**/
    }

    public function render()
    {
        
        return view('livewire.contact-list');
    }
}
