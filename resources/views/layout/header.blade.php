    <header class="bg-primary" style="z-index: 9999; overflow: hidden;">
        <div class="container">
            <div class="topbar py-1">
                <img src="{{ asset('img/govt_logo.png') }}" alt="Government Logo" class="logos">
                <div class="text-white">
                    <h2 class="school_name text-center">এ আর ওয়েব একাডেমি</h2>
                    <p class="text-center address">ভাউলাগঞ্জ , দেবীগঞ্জ , পঞ্চগড় ।</p>
                    <p style="font-size: 1rem;" class="d-none d-md-block d-lg-block text-center">ইআইআইএন- ২২২৪ ,
                        স্কুল কোড : ২০২৪</p>
                </div>
                <img src="{{ asset('img/school_logo.png') }}" alt="School Logo" class="logos">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-secondary text-white shadow-sm sticky">
            <div class="container px-2">
                <span class="d-sm-block d-md-none d-lg-none">বিস্তারিত মেনু খুলতে এখানে ক্লিক করুন <i
                        class="fa-solid fa-arrow-right"></i></span>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse px-2" id="navbarNav">
                    <ul class="navbar-nav py-2 py-md-0 py-lg-0 me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="home nav-link links text-white active" aria-current="page" href="/"><i
                                    class="fa-solid fa-house"></i> প্রচ্ছদ</a>
                        </li>
                        <li class="nav-item">
                            <a class="identity nav-link links text-white" href="/identity"><i
                                    class="fas fa-info-circle"></i>
                                পরিচিতি</a>
                        </li>
                        <li class="nav-item">
                            <a class="staff nav-link links text-white" href="/staffs"><i
                                    class="fa-solid fa-people-arrows"></i> শিক্ষকমণ্ডলী</a>
                        </li>
                        <li class="nav-item">
                            <a class="notice nav-link links text-white" href="/notice"><i class="fa fa-bullhorn"></i>
                                নোটিশ</a>
                        </li>
                        <li class="nav-item">
                            <a class="archive nav-link links text-white" href="/archives"><i
                                    class="fa-solid fa-folder-tree"></i> আর্কাইভ</a>
                        </li>
                        <li class="nav-item">
                            <a class="result nav-link links text-white" href="/result"><i
                                    class="fa-solid fa-square-poll-vertical"></i> ফলাফল</a>
                        </li>
                        <li class="nav-item">
                            <a class="admission nav-link links text-white" href="/admission"><i
                                    class="fa-solid fa-ticket"></i> ভর্তি আবেদন</a>
                        </li>
                        <li class="nav-item">
                            <a class="contact nav-link links text-white" href="/contact"><i
                                    class="fa-solid fa-address-book"></i> যোগাযোগ</a>
                        </li>

                    </ul>
                    <div class="d-flex">
                        <a href="/student/login" class="btn btn-success btn-md w-100 fw-bold">লগ ইন <i
                                class="fa-solid fa-user"></i></a>
                    </div>
                </div>
        </nav>

    </header>
