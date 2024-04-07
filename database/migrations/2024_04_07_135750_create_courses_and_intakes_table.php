<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesAndIntakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_and_intakes', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_type'); // Undergraduate or Postgraduate
            $table->integer('intake');
            $table->timestamps();
        });

        // Seed the data
        $this->seedData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_and_intakes');
    }

    /**
     * Seed the table with data.
     *
     * @return void
     */
    private function seedData()
    {
        // Undergraduate courses and intakes
        $ugCourses = [
            ['B.E – Mechanical Engineering', 'ug', 120],
            ['B.E – Electronics and Communication Engineering', 'ug', 120],
            ['B.E – Electrical & Electronics Engineering', 'ug', 60],
            ['B.E – Computer Science & Engineering', 'ug', 120],
            ['B.Tech – Information Technology', 'ug', 60],
            ['B.E – Civil Engineering', 'ug', 60],
            ['B.E – Bio-Medical Engineering', 'ug', 60],
            ['B.Tech – Computer Science & Business Systems', 'ug', 60],
            ['B.Tech – Artificial Intelligence and Data Science', 'ug', 60],
        ];

        foreach ($ugCourses as $course) {
            \App\Models\CoursesAndIntakes::create([
                'course_name' => $course[0],
                'course_type' => $course[1],
                'intake' => $course[2],
            ]);
        }

        // Postgraduate courses and intakes
        $pgCourses = [
            ['M.E ( Computer Science and Engineering )', 'pg', 18],
            ['M.E (Communication Systems)', 'pg', 18],
            ['M.E (Manufacturing Engineering)', 'pg', 18],
            ['M.E (Power Electronics and Drives)', 'pg', 18],
            ['M.E (Environmental Engineering)', 'pg', 18],
            ['MCA – Master of Computer Applications ( 2 yrs)', 'pg', 60],
            ['MBA – Master of Business Administration (2 Yrs)', 'pg', 120],
        ];

        foreach ($pgCourses as $course) {
            \App\Models\CoursesAndIntakes::create([
                'course_name' => $course[0],
                'course_type' => $course[1],
                'intake' => $course[2],
            ]);
        }
    }
}
