<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Route;


class CreateRoutesTable extends Migration
{
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('route');
            $table->string('operated_via');
            $table->time('starting_time');
            $table->integer('total_km');
            $table->timestamps();
        });

        DB::transaction(function () {
            $routes = [
                ['route' => 'Mannargudi', 'operated_via' => 'Kilvelur-Thiruvarur-Lakshumangudi', 'starting_time' => '07:05:00', 'total_km' => 65],
                ['route' => 'Velankanni', 'operated_via' => 'Akkaraipettai-Poigainallur', 'starting_time' => '08:00:00', 'total_km' => 15],
                ['route' => 'Thethakudi', 'operated_via' => 'Velankanni-Sembodai', 'starting_time' => '07:30:00', 'total_km' => 45],
                ['route' => 'Umbalacherry', 'operated_via' => 'Velankanni-Alangudi-Thalainayar', 'starting_time' => '07:20:00', 'total_km' => 50],
                ['route' => 'Srivanjiyam', 'operated_via' => 'Narimanam-Gangalancherry-Andipandhal', 'starting_time' => '07:25:00', 'total_km' => 40],
                ['route' => 'Thillaiyadi', 'operated_via' => 'Karaikkal-Tharangambadi-Thirukkadaiyur', 'starting_time' => '07:25:00', 'total_km' => 40],
                ['route' => 'Sankaranpandhal', 'operated_via' => 'T.R Pattinam-Karikkal-Poraiyar', 'starting_time' => '07:25:00', 'total_km' => 42],
                ['route' => 'Kuthalam', 'operated_via' => 'Thirumarugal-Sannanallur-Mayiladuthurai', 'starting_time' => '07:00:00', 'total_km' => 70],
                ['route' => 'Peralam', 'operated_via' => 'Karaikkal-Thirunallar-Ambagarathur', 'starting_time' => '07:30:00', 'total_km' => 42],
                ['route' => 'Muthupettai', 'operated_via' => 'Alangudi-Thiruthuraipoondi-Pandi', 'starting_time' => '07:30:00', 'total_km' => 75],
                ['route' => 'Sembanorkoil', 'operated_via' => 'Karikkal-Nedungadu-Arumbakkam', 'starting_time' => '07:30:00', 'total_km' => 50],
                ['route' => 'Thirukkuvalai', 'operated_via' => 'Sikkal-Avarani-Thevur', 'starting_time' => '07:30:00', 'total_km' => 43],
                ['route' => 'Thiruvarur', 'operated_via' => 'Narimanam-Gangalancherry-Senthamangalam', 'starting_time' => '07:45:00', 'total_km' => 38],
                ['route' => 'Kudavasal', 'operated_via' => 'Kilvelur-Thiruvarur-Kattur', 'starting_time' => '07:10:00', 'total_km' => 60],
                ['route' => 'Alathambadi', 'operated_via' => 'Kilvelur-Pulivalam-Mangudi', 'starting_time' => '07:15:00', 'total_km' => 60],
                ['route' => 'Koradacherry', 'operated_via' => 'Kilvelur-Thiruvarur-Ammaiyappan', 'starting_time' => '07:15:00', 'total_km' => 50],
                ['route' => 'Earavancherry', 'operated_via' => 'Annamandapam-Polagam-Poonthottam', 'starting_time' => '07:15:00', 'total_km' => 50],
                ['route' => 'Nannilam', 'operated_via' => 'Thirumarugal-Sannanallur', 'starting_time' => '07:45:00', 'total_km' => 35],
                ['route' => 'Nangur', 'operated_via' => 'Karaikkal-Tharangambadi-Karuvi-Thiruvenkadu', 'starting_time' => '07:00:00', 'total_km' => 55],
                ['route' => 'Sirkali', 'operated_via' => 'Karaikkal-Tharangambadi-Karuvi', 'starting_time' => '07:10:00', 'total_km' => 62],
                ['route' => 'Ayakaranpulam', 'operated_via' => 'Velankanni-Sembodai-Vedharanyam', 'starting_time' => '07:10:00', 'total_km' => 69],
                ['route' => 'Karkathi', 'operated_via' => 'Thirumarugal-Sannanallur-Kollumangudi', 'starting_time' => '07:20:00', 'total_km' => 55],
                ['route' => 'Thevur', 'operated_via' => 'Sikkal-Kilvelur', 'starting_time' => '07:50:00', 'total_km' => 22],
                ['route' => 'Kottur', 'operated_via' => 'Velankanni-Thiruthuraipoondi', 'starting_time' => '07:10:00', 'total_km' => 55],
                ['route' => 'Mayiladuthurai', 'operated_via' => 'Karikkal-Tharangambadi-Akkur-Sembanorkoil', 'starting_time' => '07:10:00', 'total_km' => 63]
            ];

            foreach ($routes as $route) {
                Route::create($route);
            }
        });
    }




    public function down()
    {
        Schema::dropIfExists('routes');
    }
}