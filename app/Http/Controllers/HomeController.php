<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => 'truck',
                'title' => 'Road Transportation',
                'description' => 'Pan India logistics solutions with fleet of modern trucks'
            ],
            [
                'icon' => 'warehouse',
                'title' => 'Warehousing',
                'description' => 'Secure storage facilities with inventory management'
            ],
            [
                'icon' => 'box',
                'title' => 'Cargo Services',
                'description' => 'Full truckload and part truckload cargo solutions'
            ],
            [
                'icon' => 'map',
                'title' => 'Express Delivery',
                'description' => 'Time-critical deliveries with real-time tracking'
            ]
        ];

        $stats = [
            ['number' => '25+', 'label' => 'Years Experience'],
            ['number' => '500+', 'label' => 'Fleet Size'],
            ['number' => '1000+', 'label' => 'Happy Clients'],
            ['number' => '50+', 'label' => 'Cities Covered']
        ];

        $aboutText = "Bhavna Roadlines Pvt. Ltd. is a leading logistics and transportation company providing reliable road transport solutions across India. With over 25 years of experience, we have built a reputation for timely deliveries and exceptional customer service.";

        return view('home', compact('services', 'stats', 'aboutText'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function investor()
    {
        return view('investor');
    }

    public function contact()
    {
        return view('contact');
    }

    public function careers()
    {
        return view('careers');
    }
}
