<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Response; 


class ProjectController extends Controller
{

   public function index()
    {
         $projects = Project::all(); 
         return response()->json([
            'success' => true , 
            'results' => $projects
            ]) ; 
    }

   }






    