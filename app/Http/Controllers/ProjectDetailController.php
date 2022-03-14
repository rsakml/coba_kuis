<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projectDetail;

class ProjectDetailController extends Controller
{
    public function ProjectDetail(){
        $projectDetail = ProjectDetail::all();

        return view('project-detail')
                ->with('title', 'Project Detail')
                ->with('projectDetail', $projectDetail);
        }
}
