<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCoursesTable extends Migration
{
    public function up()
    {




        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('image_url');
            $table->string('created_by');
            $table->string('course_type');
            $table->text('description');
            $table->string('featured_image');
            $table->string('course_id')->unique();
            $table->timestamps();
        });

        DB::table('courses')->insert([
            [
                'course_name' => 'Mechanical Engineering',
                'image_url' => '/assets/images/department/bachelors/ME_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Mechanical Engineering course.',
                'featured_image' => 'url_to_mechanical_featured_image',
                'course_id' => 'ME_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Artificial Intelligence & Data Science',
                'image_url' => '/assets/images/department/bachelors/AIDS_EGSPEC032.avif',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Artificial Intelligence & Data Science Department.',
                'featured_image' => 'url_to_civil_featured_image',
                'course_id' => 'AIDS_EGSPEC032',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Civil Engineering',
                'image_url' => '/assets/images/department/bachelors/CE_EGSPEC02.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Civil Engineering course.',
                'featured_image' => 'url_to_civil_featured_image',
                'course_id' => 'CE_EGSPEC02',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'course_name' => 'Electrical and Electronics Engineering',
                'image_url' => '/assets/images/department/bachelors/EEE_EGSPEC03.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Electrical and Electronics Engineering course.',
                'featured_image' => 'url_to_electrical_featured_image',
                'course_id' => 'EEE_EGSPEC03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Electronics and Communication Engineering',
                'image_url' => '/assets/images/department/bachelors/ECE_EGSPEC04.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Electronics and Communication Engineering course.',
                'featured_image' => 'url_to_ec_featured_image',
                'course_id' => 'ECE_EGSPEC04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Computer Science and Engineering',
                'image_url' => '/assets/images/department/bachelors/CSE_EGSPEC05.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Computer Science and Engineering course.',
                'featured_image' => 'url_to_cs_featured_image',
                'course_id' => 'CSE_EGSPEC05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Information Technology',
                'image_url' => '/assets/images/department/bachelors/IT_EGSPEC06.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Information Technology course.',
                'featured_image' => 'url_to_it_featured_image',
                'course_id' => 'IT_EGSPEC06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Biomedical Engineering',
                'image_url' => '/assets/images/department/bachelors/BME_EGSPEC07.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Biomedical Engineering course.',
                'featured_image' => 'url_to_biomedical_featured_image',
                'course_id' => 'BME_EGSPEC07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Computer Science & Business Systems Engineering',
                'image_url' => '/assets/images/department/bachelors/CSBSE_EGSPEC08.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'bachelors',
                'description' => 'Description of Computer Science & Business Systems Engineering course.',
                'featured_image' => 'url_to_csbse_featured_image',
                'course_id' => 'CSBSE_EGSPEC08',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'course_name' => 'Mechanical Engineering',
                'image_url' => '/assets/images/department/bachelors/ME_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Mechanical Engineering course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'MEM_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Manufacturing Engineering',
                'image_url' => '/assets/images/department/masters/MF_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Manufacturing Engineering course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'MF_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Computer Science and Engineering',
                'image_url' => '/assets/images/department/bachelors/CSE_EGSPEC05.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Computer Science and Engineering course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'CS_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Power Electronics and Drives',
                'image_url' => '/assets/images/department/masters/PED_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Power Electronics and Drives course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'PED_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Communication Systems',
                'image_url' => '/assets/images/department/masters/CSYS_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Communication Systems course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'CSYS_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_name' => 'Environmental Engineering',
                'image_url' => '/assets/images/department/masters/ENV_EGSPEC01.jpg',
                'created_by' => 'raghavan_egspec',
                'course_type' => 'masters',
                'description' => 'Description of Environmental Engineering course.',
                'featured_image' => 'url_to_featured_image',
                'course_id' => 'ENV_EGSPEC01',
                'created_at' => now(),
                'updated_at' => now(),
            ],






        ]);
    }


    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
