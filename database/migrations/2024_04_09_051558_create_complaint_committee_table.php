<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateComplaintCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_committee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('committee');
            $table->string('contact_details');
            $table->timestamps();
        });

        // Insert default data
        DB::table('complaint_committee')->insert([
            [
                'name' => 'Dr. M. Arularasu',
                'address' => 'Directorate of Technical Education, Chennai-600 025',
                'committee' => 'Chairman',
                'contact_details' => 'tncapitation@gmail.com, cmarul62@gmail.com',
            ],
            [
                'name' => 'Dr. P. Thamarai',
                'address' => 'Govenment College of Technology, Coimbatore',
                'committee' => 'Member',
                'contact_details' => 'thamdamu@yahoo.com, 9486558500',
            ],
            [
                'name' => 'Dr. R. Senthil',
                'address' => 'Anna University, Chennai-600 025',
                'committee' => 'Member',
                'contact_details' => 'senthilr68@gmail.com, 7598632796',
            ],
            [
                'name' => 'Dr. A. Elayaperumal',
                'address' => 'Anna University, Chennai-600 025',
                'committee' => 'Member',
                'contact_details' => 'profelaya@gmail.com, 9940347766, 7299007201',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaint_committee');
    }
}
