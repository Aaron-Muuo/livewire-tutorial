<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Aronto";
    public $loud = false;
    public $greeting = "Hello";

    public function mount(){
        // first method called when the component is created
        //its like a constructor

        //maybe populate variables with data from the db

        // or you can pass the values as a parameter here and pass the arguments in the calling view
       
    }
    // public function mount(Request $request){
     
    //     // you can also dependency inject Request here, or any other method
    // }

    public function hydrate(){
        // called before a request is made, when an action being listened to is listened
    
       $this->name = "hydra"; 
    }

    public function updated(){
        // called when you update a public property
    
       $this->name = "new name"; 
    }
    //you can tie updated method to a specific public value
    public function updatedGreeting(){
        // 
    
       $this->name = "new name"; 
    }

    public function resetName($name = "Chko"){
        $this->name = $name;
    }
    public function submitForm($name = "Chko"){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.hello-world',[
            'email'=>'aront0@gmail.com'
        ]);
    }
}
