<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * عرض صفحة الأسئلة الشائعة
     */
   public function index()
{
    // لو العمود order_number موجود، نرتب بيه، لو مش موجود نرتب بـ created_at فقط
    $faqs = Faq::when(Schema::hasColumn('faqs', 'order_number'), function ($query) {
                return $query->orderBy('order_number');
            })
            ->orderBy('created_at')
            ->get();

    return view('faq.index', compact('faqs'));
}
}