<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactInfo::create([
            'address_1' => 'Buttonwood, California.',
            'address_2' => 'Rosemead, CA 91770',
            'phone' => 4409865562,
            'email' => 'support@colorlib.com',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34111.34231280081!2d-7.579077525062955!3d33.592170474604075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cdb2f812837f%3A0xbbcfc74fbc11b2d9!2sLionsGeek!5e0!3m2!1sen!2sma!4v1692651703729!5m2!1sen!2sma',
        ]);
    }
}
