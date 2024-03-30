<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndustryAcademicPartnering;

class IndustryAcademicPartneringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if the table is empty
        if (IndustryAcademicPartnering::count() === 0) {

            IndustryAcademicPartnering::insert([
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/oracle-academy.png', 'alt_name' => 'ORACLE Academy'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/IBM_logo.svg', 'alt_name' => 'IBM'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/EMC_Corporation_logo.svg', 'alt_name' => 'EMC Corporation'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/eboxlogo.svg', 'alt_name' => 'Amphisoft, E-Box'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/ICT_Academy_Logo.svg', 'alt_name' => 'ICT Academy'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/National_Instruments_logo_2020.svg', 'alt_name' => 'National Instruments'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Vmware.svg', 'alt_name' => 'VMWare'],
                ['logo_image_url' => '', 'alt_name' => 'LinuXpert Systems'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Cisco_Networking_Academy.svg', 'alt_name' => 'CISCO Academy'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Dell_EMC_logo.svg', 'alt_name' => 'Dell EMC'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/nifs-logo-mob-1.png', 'alt_name' => 'NIOS Fire and Safety Institute'],
                ['logo_image_url' => '', 'alt_name' => 'ABC Bricks Industry'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/college-of-fisheries-engineering.svg', 'alt_name' => 'College of Fisheries Engineering'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/AutoCad_logo.svg', 'alt_name' => 'CAD Academy'],
                ['logo_image_url' => '', 'alt_name' => 'Praveen NDT Instruments'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Multimedia_University_logo.png', 'alt_name' => 'MULTIMEDIA UNIVERSITY MALAYSIA'],
                ['logo_image_url' => 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/South_Eastern_University_of_Sri_Lanka_logo.png', 'alt_name' => 'SOUTH EASTERN UNIVERSITY OF SRI LANKA']
            ]);
        }
    }
}
