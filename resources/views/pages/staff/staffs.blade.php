<style>
    .staff {
        background: #0e3802 !important;
        border-radius: 5px;
    }

    .staff-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        text-align: center;
        margin-bottom: 20px;
    }

    .staff-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .staff-card .card-body {
        padding: 15px;
    }

    .staff-card h5 {
        margin: 0;
        font-size: 1.2rem;
        color: #0e3802;
    }

    .staff-card p {
        margin: 5px 0;
        color: #555;
    }

    .staff-card a {
        text-decoration: none;
        color: #ffffff;
        background: #0e3802;
        padding: 8px 15px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }

    .staff-card a:hover {
        background: #085f02;
    }
</style>

<x-app>
    @section('title', 'শিক্ষক ও কর্মচারী')
    <div class="container mt-4">
        <h2 class="text-success mb-4 text-center"> শিক্ষকমণ্ডলী ও কর্মচারীবৃন্দ</h2>
        <div class="row">
            {{-- Example Staff Cards --}}
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/Ahsan.png') }}" alt="Teacher 1">
                    <div class="card-body">
                        <h5>জনাব আহসান উল আলম</h5>
                        <p>প্রধান শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/vice_principal.png') }}" alt="Staff 1">
                    <div class="card-body">
                        <h5>জনাব রফিকুল ইসলাম</h5>
                        <p>সহ প্রধান শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/user.png') }}" alt="Teacher 2">
                    <div class="card-body">
                        <h5>জনাবা রেহানা নাসরিন</h5>
                        <p>সহকারী শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/Ahsan.png') }}" alt="Teacher 1">
                    <div class="card-body">
                        <h5>জনাব আহসান উল আলম</h5>
                        <p>প্রধান শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/vice_principal.png') }}" alt="Staff 1">
                    <div class="card-body">
                        <h5>জনাব রফিকুল ইসলাম</h5>
                        <p>সহ প্রধান শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="staff-card">
                    <img src="{{ asset('img/chairman.png') }}" alt="Teacher 2">
                    <div class="card-body">
                        <h5>জনাবা রেহানা নাসরিন</h5>
                        <p>সহকারী শিক্ষক</p>
                        <div>
                            <strong>মোবাইলঃ</strong> ০১৭৭৩৭৬৬৬৫৮ <br>
                            <strong>ইমেইলঃ</strong> ahsanulalam.500@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
