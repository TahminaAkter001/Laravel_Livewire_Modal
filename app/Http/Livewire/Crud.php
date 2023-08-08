<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;

class Crud extends Component

{

    public $name, $email, $course, $student_id;
    public $title;
    public $head;



    public function saveStudent()
    {
            $student = new Student;
            $student->name = $this->name;
            $student->email = $this->email;
            $student->course = $this->course;
            $student->save();
        
        $this->resetInput();
        
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }

    public function render()
    {
        
        return view('livewire.crud');
    }

}
