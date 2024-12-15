<style>
    .notice {
        background: #0e3802 !important;
        border-radius: 5px;
    }

    .notice-board {
        background: #f8f9fa !important;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .notice-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        margin-bottom: 15px;
        padding: 15px;
        transition: transform 0.3s;
    }

    .notice-card:hover {
        transform: scale(1.02);
    }

    .notice-card h5 {
        font-size: 1.2rem;
        color: #0e3802;
        margin: 0;
        font-weight: bold;
    }

    .notice-card p {
        margin: 5px 0;
        color: #555;
        font-size: 1rem;
    }

    .notice-card a {
        text-decoration: none;
        color: #ffffff;
        background: #0e3802;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
        font-size: 1rem;
    }

    .notice-card a:hover {
        background: #085f02;
    }

    .highlight {
        background: #eafaf1;
        padding: 10px;
        border-left: 5px solid #0e3802;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .date {
        font-size: 0.9rem;
        color: #777;
        margin-top: 5px;
    }
</style>

<x-app>
    @section('title', 'নোটিশ বোর্ড')
    <div class="container mt-4">
        <h2 class="text-success mb-4 text-center">নোটিশ বোর্ড</h2>
        <div class="notice-board">
            {{-- Highlighted Notice --}}
            <div class="highlight">
                <h5 class="text-danger">বিশেষ নোটিশ: বার্ষিক পরীক্ষা 2024</h5>
                <p>বার্ষিক পরীক্ষা আগামী 15 জানুয়ারি 2024 থেকে শুরু হবে। সময়সূচী ও বিস্তারিত জানতে নিচের লিঙ্কে ক্লিক
                    করুন।</p>
                <a href="/notices/exam-schedule" class="btn btn-danger btn-sm">বিস্তারিত</a>
                <p class="date">প্রকাশিত: 1 ডিসেম্বর 2023</p>
            </div>

            {{-- General Notices --}}
            <div class="notice-card">
                <h5>স্কুলে শীতকালীন ছুটি</h5>
                <p>শীতকালীন ছুটি শুরু হবে 24 ডিসেম্বর থেকে এবং 1 জানুয়ারি পর্যন্ত চলবে।</p>
                <a href="/notices/winter-holiday">বিস্তারিত</a>
                <p class="date">প্রকাশিত: 10 ডিসেম্বর 2023</p>
            </div>

            <div class="notice-card">
                <h5>ইভেন্ট: বিজ্ঞান মেলা 2024</h5>
                <p>বিজ্ঞান মেলা অনুষ্ঠিত হবে 10 ফেব্রুয়ারি 2024 তারিখে। অংশগ্রহণের জন্য আপনার নাম নিবন্ধন করুন।</p>
                <a href="/notices/science-fair">বিস্তারিত</a>
                <p class="date">প্রকাশিত: 5 ডিসেম্বর 2023</p>
            </div>

            <div class="notice-card">
                <h5>স্কুলের নতুন শিক্ষাবর্ষ</h5>
                <p>নতুন শিক্ষাবর্ষ শুরু হবে 5 জানুয়ারি 2024 তারিখে। নতুন বই বিতরণ হবে প্রথম দিনে।</p>
                <a href="/notice-details">বিস্তারিত</a>
                <p class="date">প্রকাশিত: 1 জানুয়ারি 2024</p>
            </div>
        </div>
    </div>
</x-app>
