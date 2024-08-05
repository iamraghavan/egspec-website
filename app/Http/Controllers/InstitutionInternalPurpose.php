<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionInternalPurpose extends Controller
{
    public function contact_website_admin()
    {
        return view('pages.institution.contact-web-admin');
    }
}
