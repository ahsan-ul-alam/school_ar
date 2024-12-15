@extends('pages.dashboard.student_master')

@section('student_dashboard')
    <style>
        .p_notice {
            background: #0D6EFD !important;
            color: #fff;
        }

        .notice-card {
            border-left: 5px solid #007bff;
            border-radius: 5px;
        }

        .notice-card .notice-header {
            background-color: #f8f9fa;
            font-weight: bold;
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        .notice-card .notice-body {
            padding: 15px;
        }

        .notice-card .notice-footer {
            background-color: #f8f9fa;
            font-size: 14px;
            padding: 10px 15px;
            border-top: 1px solid #ddd;
            text-align: right;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <h3 class="text-center my-4">ব্যক্তিগত নোটিশ</h3>
        </div>

        @php
            $notices = [
                [
                    'title' => 'এসাইনমেন্ট জমা দেওয়ার সময়সীমা',
                    'description' => 'আপনার আগামী এসাইনমেন্ট জমা দেওয়ার সর্বশেষ তারিখ ২০শে নভেম্বর।',
                    'date' => '১৮ নভেম্বর, ২০২৪',
                ],
                [
                    'title' => 'পরীক্ষার ফলাফল প্রকাশিত',
                    'description' =>
                        'আপনার গ্রীষ্মকালীন পরীক্ষার ফলাফল প্রকাশিত হয়েছে। ফলাফল দেখতে আপনার প্রোফাইলে যান।',
                    'date' => '১৫ নভেম্বর, ২০২৪',
                ],
            ];
        @endphp
        @foreach ($notices as $notice)
            <div class="col-12 mb-4">
                <div class="card shadow-sm notice-card">
                    <div class="notice-header">
                        {{ $notice['title'] }}
                    </div>
                    <div class="notice-body">
                        <p>{{ $notice['description'] }}</p>
                    </div>
                    <div class="notice-footer">
                        @isset($notice['date'])
                            <span>তারিখ: {{ $notice['date'] }}</span>
                        @endisset
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
