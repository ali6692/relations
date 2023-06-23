<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;

Route::get('/projects', function () 
{
    $project=Project::create([        
        'title'=>'Project A'
    ]);
    $user1=User::create([         
        'name'=>'User 1',
        'email'=>'user7@example.com',
        'password'=>Hash::make('password'),
        'project_id'=>$project->id    
    ]);
    $user2=User::create([        
        'name'=>'User 2',
        'email'=>'user8@example.com',
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

    return 'Created';
});