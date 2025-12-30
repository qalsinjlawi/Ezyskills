<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'question' => 'How do I enroll in a course?',
            'answer' => 'You can enroll by clicking the "Register Now" button on the course page after creating an account.',
            'order_number' => 1
        ]);

        Faq::create([
            'question' => 'Do I get a certificate after completing the course?',
            'answer' => 'Yes, you will receive a verified certificate of completion after finishing all course lessons.',
            'order_number' => 2
        ]);

        Faq::create([
            'question' => 'Can I get a refund?',
            'answer' => 'Yes, you can request a full refund within 14 days of purchase.',
            'order_number' => 3
        ]);

        Faq::create([
            'question' => 'How long do I have access to the course?',
            'answer' => 'You have unlimited lifetime access to the course after purchase.',
            'order_number' => 4
        ]);
    }
}