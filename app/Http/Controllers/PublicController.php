<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function Home(){
        return view('welcome');
    }

    public function Menu(){
        $menu = Http::get('https://api.sampleapis.com/recipes/recipes')->json();
        return view('menu' , ['menu'=>$menu]);
    }

    public function Details($id){
        $menu = Http::get('https://api.sampleapis.com/recipes/recipes')->json();

        foreach($menu as $single){
            if($id == $single['id']){
                return view('details',['singolo' => $single]);
            }
        }
        abort(404);
    }

    public function Location(){

        $photosLocation = [
            ['id'=>1 , 'img' => '/media/photoLocation/Photo1.jpg'],
            ['id'=>2 , 'img' => '/media/photoLocation/Photo2.jpg'],
            ['id'=>3 , 'img' => '/media/photoLocation/Photo3.jpg'],
            ['id'=>4 , 'img' => '/media/photoLocation/Photo4.jpg'],
            ['id'=>5 , 'img' => '/media/photoLocation/Photo5.jpg'],
            ['id'=>6 , 'img' => '/media/photoLocation/Photo6.jpg'],
            ['id'=>7 , 'img' => '/media/photoLocation/Photo7.jpg'],
        ];

        return view('location',['photos' => $photosLocation]);
    }

    public function ContactUs(){
        return view('contact-us');
    }

    public function Services(){
        return view('services');
    }

    public function MailSend(request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');
        try{
            Mail::to($email)->send(new ContactMail($name,$email, $text));
            return redirect('/')->with('send','Mail inviata con successo! Verrai ricontattato a breve. LaravelSushi Staff');
        }catch(Exception $error){
            return redirect()->back()->with('send',"È stato riscontrato un problema con l'invio della mail. Prego,riprova più tardi");
        }
    }

    public function AYCE(){
        return view('allyoucaneat');
    }
}
