@extends('pages.dashboard.student_master')

@section('student_dashboard')
    <style>
        .dashboard {
            background: #0D6EFD !important;
            color: #fff;
        }

        .dashboard-card {
            height: 200px;
            /* Adjust height as needed */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dashboard-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .dashboard-card .card-body div {
            line-height: 1.2;
        }
    </style>

    <div class="row">
        @php
            $dashboardData = [
                ['title' => 'বিষয়', 'count' => '১১', 'size' => 'display-2'],
                ['title' => 'এসাইনমেন্ট', 'count' => '০১', 'size' => 'display-2'],
                ['title' => 'পরীক্ষা', 'count' => '১০', 'size' => 'display-2'],
                ['title' => 'পুরষ্কার', 'count' => '০৪', 'size' => 'display-2'],
                ['title' => 'ব্যক্তিগত নোটিশ', 'count' => '০২', 'size' => 'display-2'],
                ['title' => 'বেতন বাকি', 'count' => '১০০০', 'month' => 'নভেম্বর', 'size' => 'display-5'],
            ];
        @endphp

        @foreach ($dashboardData as $data)
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm text-center bg-light dashboard-card">
                    <div class="card-header">
                        <h4 class="card-title mt-3 text-dark">{{ $data['title'] }}</h4>
                    </div>
                    <div class="card-body py-2">
                        <div class="{{ $data['size'] }} text-primary fw-bold">{{ $data['count'] }}</div>
                        @isset($data['month'])
                            <div class="display-7 text-dark">মাসঃ {{ $data['month'] }}</div>
                        @endisset
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
