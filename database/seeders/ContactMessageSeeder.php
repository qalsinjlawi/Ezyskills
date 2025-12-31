<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    public function run()
    {
        ContactMessage::create([
            'user_id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'subject' => 'Course Structure',
            'message' => 'I would like to know more about the Angular course content and prerequisites.'
        ]);

        ContactMessage::create([
            'user_id' => null,
            'name' => 'Alex Williams',
            'email' => 'alex@example.com',
            'phone' => '+9876543210',
            'subject' => 'Other',
            'message' => 'We are interested in corporate training packages for our team.'
        ]);

        ContactMessage::create([
            'user_id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => null,
            'subject' => 'Technical Issue',
            'message' => 'I am having trouble accessing my enrolled courses. Please help.'
        ]);

        ContactMessage::create([
            'user_id' => null,
            'name' => 'Sarah Johnson',
            'email' => 'sarah@example.com',
            'phone' => '+1122334455',
            'subject' => 'Payment Failure',
            'message' => 'My payment was declined but the amount was deducted from my account. Please investigate.'
        ]);
    }
}