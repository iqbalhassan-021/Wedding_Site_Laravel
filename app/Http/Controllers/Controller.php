<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\guest;
use App\Http\Controller\guestsController;
use App\Http\Controllers\guestsController as ControllersGuestsController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function ContentPage(){
        
   

      
        $couple = [
            'couplename' => 'Jenna & James',
            'Groom' => 'James',
            'Bride' => 'Jenna',
            'day' => 10,
            'month' => 11,
            'year' => 2023,
            'textaboutGroom' => 'A good man is someone who puts others before themselves, is honest and kind, and always works to better himself and those around him. He is respectful of those around him, takes responsibility for his actions, and is willing to admit when he is wrong. He is an active listener and helps others when they need it. He is also generous with his time and resources, and is willing to go out of his way to help others. A good man is someone who truly cares about the people around him and is willing to do whatever it takes to make the world a better place.',
            'textaboutBride' => 'A good woman is a woman who is kind, caring, and understanding. She treats others with respect, is open to new ideas, and is devoted to making the world a better place. She is an advocate for equality and fairness and is always willing to lend a helping hand to those in need. She is considerate and mindful of the feelings of others, and she understands that everyone is different and has different needs. She is not afraid to stand up for what she believes in, and she is always willing to compromise to reach her goals. A good woman is an asset to any community, and she deserves to be honored and respected for the amazing things she does.',
            'weddingDestination' => 'Badshahi Mousque',
            'firstmet' => 'text about first meeting',
            'date' => 'text about date',
            'proposal' => 'text about proposal'
        ];
      
        return view('ContentPage',$couple);
    }
    public function ContactPage(){
        //$data = DB::select('select email from guests');
        $couple = [
            'couplename' => 'Jenna & James',
            'Groom' => 'James',
            'Bride' => 'Jenna',
            'day' => 10,
            'month' => 11,
            'year' => 2023,
            'textaboutGroom' => 'A good man is someone who puts others before themselves, is honest and kind, and always works to better himself and those around him. He is respectful of those around him, takes responsibility for his actions, and is willing to admit when he is wrong. He is an active listener and helps others when they need it. He is also generous with his time and resources, and is willing to go out of his way to help others. A good man is someone who truly cares about the people around him and is willing to do whatever it takes to make the world a better place.',
            'textaboutBride' => 'A good woman is a woman who is kind, caring, and understanding. She treats others with respect, is open to new ideas, and is devoted to making the world a better place. She is an advocate for equality and fairness and is always willing to lend a helping hand to those in need. She is considerate and mindful of the feelings of others, and she understands that everyone is different and has different needs. She is not afraid to stand up for what she believes in, and she is always willing to compromise to reach her goals. A good woman is an asset to any community, and she deserves to be honored and respected for the amazing things she does.',
            'weddingDestination' => 'Badshahi Mousque',
            'firstmet' => 'text about first meeting',
            'date' => 'text about date',
            'proposal' => 'text about proposal'
        ];
  
        return view('ContactPage',$couple);
    }
    public function Blog(){
        $couple = [
            'couplename' => 'Jenna & James',
            'Groom' => 'James',
            'Bride' => 'Jenna',
            'day' => 10,
            'month' => 11,
            'year' => 2023,
            'textaboutGroom' => 'A good man is someone who puts others before themselves, is honest and kind, and always works to better himself and those around him. He is respectful of those around him, takes responsibility for his actions, and is willing to admit when he is wrong. He is an active listener and helps others when they need it. He is also generous with his time and resources, and is willing to go out of his way to help others. A good man is someone who truly cares about the people around him and is willing to do whatever it takes to make the world a better place.',
            'textaboutBride' => 'A good woman is a woman who is kind, caring, and understanding. She treats others with respect, is open to new ideas, and is devoted to making the world a better place. She is an advocate for equality and fairness and is always willing to lend a helping hand to those in need. She is considerate and mindful of the feelings of others, and she understands that everyone is different and has different needs. She is not afraid to stand up for what she believes in, and she is always willing to compromise to reach her goals. A good woman is an asset to any community, and she deserves to be honored and respected for the amazing things she does.',
            'weddingDestination' => 'Badshahi Mousque',
            'firstmet' => 'text about first meeting',
            'date' => 'text about date',
            'proposal' => 'text about proposal'
        ];
      
        return view('Blog',$couple);
    }
}
