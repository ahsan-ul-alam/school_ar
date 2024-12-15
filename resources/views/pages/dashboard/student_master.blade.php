<x-app>
    @section('title', 'স্টুডেন্ট ড্যাশবোর্ড')
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card my-2 shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="card-title mb-0">স্টুডেন্ট ড্যাশবোর্ড</h4>
                </div>
                <div class="card-body">
                    <!-- Profile Section -->
                    <div class="text-center bg-light p-3 rounded">
                        <img src="{{ asset('img/ad_profile.png') }}" style="height: 100px; width: 100px"
                            class="rounded-circle border border-primary shadow-sm" alt="ahsan">
                        <h4 class="mt-3">আহসান</h4>
                        <p class="mb-1"><strong>রোলঃ</strong> ১</p>
                        <p><strong>ক্লাসঃ</strong> ১০ম</p>
                    </div>
                    <!-- Navigation Links -->
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link dashboard" href="{{ route('student.dashboard') }}">
                                <i class="fas fa-home"></i> ড্যাশবোর্ড
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p_notice" href="{{ route('student.personal_notice', ['id' => 1]) }}">
                                <i class="fas fa-bell"></i> নোটিশ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student.personal_result', ['id' => 1]) }}">
                                <i class="fas fa-chart-line"></i> ফলাফল
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user"></i> প্রোফাইল
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">
                                <i class="fas fa-sign-out-alt"></i> লগ আউট
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 py-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    @yield('student_dashboard')
                </div>
            </div>
        </div>
    </div>
</x-app>
