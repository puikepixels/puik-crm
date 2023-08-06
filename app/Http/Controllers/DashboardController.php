<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
       /**
     * Display the specified resource.
     */
    public function show()
    {
        $customerCount = Customer::count();
        $taskCount = Task::count();
        $projectCount = Project::count();

        return view('dashboard',compact('customerCount', 'taskCount', 'projectCount'));       
    } 
}
