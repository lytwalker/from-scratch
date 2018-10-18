<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home page
    public function home() {
      $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to homie'
      ];
      return view('pages.welcome', [
        'tasks' => $tasks,
        'stringliteral' => 'Hello string!!!',
        'foo' => request('title', 'Try entering a url parameter \'title\' with whatever value you want')
      ]);
    }

    // About page
    public function about(){
        return view('pages.about', [
        'unescaped' => '<script>alert("This is a demo of how to pass unescaped code.")</script>'
        ]);
    }

    // Contact page
    public function contact(){
      $tasks = [
        'Go to the contact store',
        'Go to the contact market',
        'Go to contact work',
        'Go to contact home'
      ];
        return view('pages.contact')->withTasks($tasks)->withFoo('foo');
    }

    // Extra page
    public function extra(){
        return view('pages.extra')->with([
          'foo' => request('title', 'Try entering a url parameter \'title\' with whatever value you want'),
          'tasks' => ['some task']
        ]);
    }
}
