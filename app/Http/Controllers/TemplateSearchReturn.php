<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateSearchReturn extends Controller
{
    public function showConsultancyDetails(Request $request)
    {
        $department = $request->input('department');
        $project = $request->input('project');

        // Ensure parameters are sanitized to prevent directory traversal attacks
        $department = preg_replace('/[^a-zA-Z0-9_-]/', '', $department);
        $project = preg_replace('/[^a-zA-Z0-9_-]/', '', $project);

        // Define the path to the JSON file based on department and project
        $filePath = public_path("json/{$department}/consultancy/{$project}.json");

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'Data not found');
        }

        // Load and decode the JSON data
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        // Extract the department name from the first element of ConsultancyProjects
        $departmentName = $data['ConsultancyProjects'][0]['Department'] ?? 'Unknown';

        // Flatten the projects array
        $projects = [];
        foreach ($data['ConsultancyProjects'] as $academicYearData) {
            if (isset($academicYearData['Projects']) && is_array($academicYearData['Projects'])) {
                foreach ($academicYearData['Projects'] as $project) {
                    $project['AcademicYear'] = $academicYearData['AcademicYear'];
                    $projects[] = $project;
                }
            }
        }

        // Pass the flattened projects array and department name to the view
        return view('pages.research.consultancy-details-template', [
            'ConsultancyProjects' => $projects,
            'departmentName' => $departmentName
        ]);
    }



    public function showResearchDetails(Request $request)
    {
        $department = $request->input('department');
        $project = $request->input('project');

        // Sanitize parameters
        $department = preg_replace('/[^a-zA-Z0-9_-]/', '', $department);
        $project = preg_replace('/[^a-zA-Z0-9_-]/', '', $project);

        // Define the path to the JSON file
        $filePath = public_path("json/{$department}/research/{$project}.json");

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'Data not found');
        }

        // Load and decode the JSON data
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        // Extract the department name
        $departmentName = $data['ResearchProjects'][0]['Department'] ?? 'Unknown';

        // Flatten the projects array
        $projects = [];
        foreach ($data['ResearchProjects'] as $academicYearData) {
            if (isset($academicYearData['Projects']) && is_array($academicYearData['Projects'])) {
                foreach ($academicYearData['Projects'] as $project) {
                    // Add academic year to each project
                    $project['AcademicYear'] = $academicYearData['AcademicYear'];
                    $projects[] = $project;
                }
            }
        }

        // Pass the flattened projects array and department name to the view
        return view('pages.research.research-details-template', [
            'ResearchProjects' => $projects,
            'departmentName' => $departmentName
        ]);
    }

    public function showStudentsDetails(Request $request)
    {
        $department = $request->input('department');
        $project = $request->input('project'); // Changed from 'achievements' to 'project'

        // Sanitize parameters
        $department = preg_replace('/[^a-zA-Z0-9_-]/', '', $department);
        $project = preg_replace('/[^a-zA-Z0-9_-]/', '', $project);

        // Define the path to the JSON file
        $filePath = public_path("json/{$department}/student-achievements/{$project}.json");

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'Data not found');
        }

        // Load and decode the JSON data
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        // Extract the department name
        $departmentName = $data['StudentAchievements'][0]['Department'] ?? 'Unknown';

        // Flatten the students array
        $students = [];
        foreach ($data['StudentAchievements'] as $achievementData) {
            if (isset($achievementData['Students']) && is_array($achievementData['Students'])) {
                foreach ($achievementData['Students'] as $student) {
                    $students[] = $student;
                }
            }
        }

        // Pass the flattened students array and department name to the view
        return view('components.templates.student-achievements-templates', [
            'StudentAchievements' => $students,
            'departmentName' => $departmentName
        ]);
    }
}