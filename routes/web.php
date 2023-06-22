<?php

use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/projects', function () 
{
    $project=Project::create([        
        'title'=>'Project A'
    ]);
    $user1=User::create([         
        'name'=>'User 1',
        'email'=>'user1@example.com',
        'password'=>Hash::make('password'),
        'project_id'=>$project->id    
    ]);
    $user2=User::create([        
        'name'=>'User 2',
        'email'=>'user2@example.com',
        'password'=>Hash::make('password'),
        'project_id'=>$project->id    
    ]);
    $task1=Task::create([    
        'title'=>'Task 1 for project 1 by user 1',
        'user_id'=>$user1->id    
    ]);
    $task2=Task::create([        
        'title'=>'Task 2 for project 1 by user 1',
        'user_id'=>$user1->id    
    ]);
    $task3=Task::create([    
        'title'=>'Task 3 for project 1 by user 2',
        'user_id'=>$user2->id    
    ]);
});