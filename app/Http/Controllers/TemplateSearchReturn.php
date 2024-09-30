<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class TemplateSearchReturn extends Controller
{
    // Main entry point for consultancy details
    public function showConsultancyDetails(Request $request)
    {
        // Sanitize input
        $department = $this->sanitizeInput($request->input('department'));
        $project = $this->sanitizeInput($request->input('project'));

        // Get consultancy data
        $data = $this->loadJsonFile($department, 'consultancy', $project);

        if (!$data) {
            return abort(404, 'Consultancy data not found.');
        }

        // Flatten the consultancy projects
        $projects = $this->flattenProjects($data['ConsultancyProjects']);
        $departmentName = $projects[0]['Department'] ?? 'Unknown';

        return view('pages.research.consultancy-details-template', [
            'ConsultancyProjects' => $projects,
            'departmentName' => $departmentName
        ]);
    }

    // Main entry point for research details
    public function showResearchDetails(Request $request)
    {
        $department = $this->sanitizeInput($request->input('department'));
        $project = $this->sanitizeInput($request->input('project'));

        $data = $this->loadJsonFile($department, 'research', $project);

        if (!$data) {
            return abort(404, 'Research data not found.');
        }

        $projects = $this->flattenProjects($data['ResearchProjects']);
        $departmentName = $projects[0]['Department'] ?? 'Unknown';

        return view('pages.research.research-details-template', [
            'ResearchProjects' => $projects,
            'departmentName' => $departmentName
        ]);
    }

    // Main entry point for student achievements
    public function showStudentsDetails(Request $request)
    {
        $department = $this->sanitizeInput($request->input('department'));
        $project = $this->sanitizeInput($request->input('project'));

        $data = $this->loadJsonFile($department, 'student-achievements', $project);

        if (!$data) {
            return abort(404, 'Student achievements data not found.');
        }

        $students = $this->flattenStudents($data['StudentAchievements']);
        $departmentName = $students[0]['Department'] ?? 'Unknown';

        return view('components.templates.student-achievements-templates', [
            'StudentAchievements' => $students,
            'departmentName' => $departmentName
        ]);
    }

    // Helper function to sanitize input
    private function sanitizeInput($input)
    {
        return preg_replace('/[^a-zA-Z0-9_-]/', '', $input);
    }

    // Helper function to load JSON file
    private function loadJsonFile($department, $category, $project)
    {
        $filePath = public_path("json/{$department}/{$category}/{$project}.json");

        if (!file_exists($filePath)) {
            Log::error("File not found: {$filePath}");
            return null;
        }

        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    }

    // Helper function to flatten consultancy/research projects
    private function flattenProjects($projectArray)
    {
        $projects = [];

        foreach ($projectArray as $academicYearData) {
            if (isset($academicYearData['Projects']) && is_array($academicYearData['Projects'])) {
                foreach ($academicYearData['Projects'] as $project) {
                    $project['AcademicYear'] = $academicYearData['AcademicYear'];
                    $projects[] = $project;
                }
            }
        }

        return $projects;
    }

    // Helper function to flatten student achievements
    private function flattenStudents($studentArray)
    {
        $students = [];

        foreach ($studentArray as $achievementData) {
            if (isset($achievementData['Students']) && is_array($achievementData['Students'])) {
                foreach ($achievementData['Students'] as $student) {
                    $students[] = $student;
                }
            }
        }

        return $students;
    }
}