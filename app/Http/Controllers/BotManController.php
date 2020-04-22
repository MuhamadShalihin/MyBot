<?php
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\URL;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) 
        {
  
            if ($message == 'Hi') 
            {
                $this->askName($botman);
            }

            elseif ($message == 'What are you?')
            {
                $botman->reply("I am a chatbot created using Artificial Intelligence");
            }


            elseif ($message == 'What can i ask you?')
            {
                $botman->reply("You can ask me anything i.e. how many stock left for specific item");
            }

            elseif ($message == 'Suggest me some good foods')
            {
                $link = "https://www.foodpanda.my/";
                $botman->reply("You can refer here: " . $link);
            }
            
            else
            {
                $botman->reply("Hello");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Nice to meet you, '.$name);
        });
    }
}