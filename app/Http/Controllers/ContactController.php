<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * عرض صفحة التواصل
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * استقبال وتخزين رسالة التواصل
     */
    public function store(Request $request)
    {
        // التحقق من البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:300',
            'message' => 'required|string',
        ]);

        // إنشاء الرسالة
        ContactMessage::create([
            'user_id' => Auth::id(), // null لو مش مسجل دخول
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully! We will contact you soon.');
    }
}