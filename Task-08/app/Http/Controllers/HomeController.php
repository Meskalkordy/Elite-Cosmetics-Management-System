<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Welcome to Home Page!'
        ]);
    }

    public function about()
    {
        return view('about', [
            'info' => 'We are Computer Engineering students from the Islamic University of Gaza. This project was developed for the Software Engineering course.'
        ]);
    }

    public function features()
    {
        $features = [
            'Computer Engineering Students',
            'Islamic University of Gaza',
            'Software Engineering Course',
            'Laravel MVC Architecture',
            'Blade Templating Engine',
            'Routing System',
            'Teamwork and Collaboration'
        ];

        return view('features', ['features' => $features]);
    }

    public function team()
    {
        $team = [
            ['name' => 'Mesk Zoheer Alkordy', 'id' => '220213008'],
            ['name' => 'Aya Rafat Breika', 'id' => '220210776'],
            ['name' => 'Hala Awni Ibrahim', 'id' => '220210702'],
            ['name' => 'Yara Raafat Abu Taima', 'id' => '220190357'],
            ['name' => 'Susan Sameh Qassem', 'id' => '220203034'],
            ['name' => 'Shrooq Hassan Musa', 'id' => '220200676'],
            ['name' => 'Nour Samir Zaqout', 'id' => '220212891'],
            ['name' => 'Lama Mahmoud Ruwaished', 'id' => '220212891']
        ];

        return view('team', ['team' => $team]);
    }
}