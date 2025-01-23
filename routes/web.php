<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'Technician',
                'salary' => '50,000',
            ],
            [
                'id' => '2',
                'title' => 'AI human',
                'salary' => '10,000',
            ],
            [
                'id' => '3',
                'title' => 'Plumber',
                'salary' => '80,000',
            ]
        ]]);
});

Route::get("/jobs/{id}", function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'Technician',
            'salary' => '50,000',
        ],
        [
            'id' => '2',
            'title' => 'AI human',
            'salary' => '10,000',
        ],
        [
            'id' => '3',
            'title' => 'Plumber',
            'salary' => '80,000',
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    return view('job',['job'=>$job]);

});

Route::get("/contact", function () {
    return view("contact");
});



