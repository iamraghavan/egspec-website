<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WomenEmpowermentCellMember;
use Illuminate\Support\Facades\DB;

class WomenEmpowermentCellMembersSeeder extends Seeder
{
    public function run()
    {
        $members = [
            ['name' => 'Prof.Dr.A.R.Deepa', 'role' => 'Convener', 'department' => 'S & H'],
            ['name' => 'Mrs. A. Hema', 'role' => 'Member', 'department' => 'MCA'],
            ['name' => 'Mrs. S. Shajathi Begam', 'role' => 'Member', 'department' => 'CSBS'],
            ['name' => 'Dr. R. Lavanya', 'role' => 'Member', 'department' => 'IT'],
            ['name' => 'Dr.M. Priya', 'role' => 'Member', 'department' => 'CSE'],
            ['name' => 'Mrs. K. Usha', 'role' => 'Member', 'department' => 'S & H'],
            ['name' => 'Mrs. S. Latha', 'role' => 'Member', 'department' => 'EEE'],
            ['name' => 'Ms. N. Karthika', 'role' => 'Member', 'department' => 'CIVIL'],
            ['name' => 'Mrs. B. Asha Daisy', 'role' => 'Member', 'department' => 'MBA'],
            ['name' => 'Dr. T. Kavitha', 'role' => 'Member', 'department' => 'S & H'],
            ['name' => 'Mrs. Louis Anitha', 'role' => 'Member', 'department' => 'BME'],
            ['name' => 'Mrs. S. Angelin Nivedita', 'role' => 'Member', 'department' => 'AIDS'],
            ['name' => 'P.Dharshana', 'role' => 'Student Representative', 'department' => 'AIDS'],
            ['name' => 'R.Adhi Lakshmi', 'role' => 'Student Representative', 'department' => 'CIVIL'],
            ['name' => 'M.Inmozhi Srii', 'role' => 'Student Representative', 'department' => 'EEE'],
            ['name' => 'K.Abinaya', 'role' => 'Student Representative', 'department' => 'ECE'],
            ['name' => 'G.Anitha', 'role' => 'Student Representative', 'department' => 'CSE'],
            ['name' => 'R Abinaya Harini', 'role' => 'Student Representative', 'department' => 'IT'],
            ['name' => 'C.Banu', 'role' => 'Student Representative', 'department' => 'IT'],
            ['name' => 'T.Abirami', 'role' => 'Student Representative', 'department' => 'CSBS'],
            ['name' => 'R.Surya Prabha', 'role' => 'Student Representative', 'department' => 'BME'],
        ];

        DB::table('women_empowerment_cell_members')->insert($members);
    }
}
