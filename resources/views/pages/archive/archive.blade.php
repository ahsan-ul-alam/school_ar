<!-- Add the Lightbox CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>

<style>
    .archive {
        background: #0E3802 !important;
        padding: 20px;
    }
    .archive-page {
        background: #f8f9fa !important;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .archive-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        margin-bottom: 20px;
        padding: 15px;
    }

    .archive-card h5 {
        font-size: 1.3rem;
        color: #0e3802;
        margin: 0;
    }

    .archive-card p {
        margin: 5px 0;
        color: #555;
        font-size: 1rem;
    }

    .archive-card a {
        text-decoration: none;
        color: #ffffff;
        background: #0e3802;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }

    .archive-card a:hover {
        background: #085f02;
    }

    .archive-header {
        background: #0e3802;
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 20px;
    }

    .archive-header h2 {
        margin: 0;
    }

    .archive-footer {
        text-align: center;
        margin-top: 30px;
        font-size: 1rem;
        color: #666;
    }

    .archive-category {
        margin-bottom: 20px;
    }

    .archive-category h3 {
        font-size: 1.4rem;
        color: #0e3802;
        border-bottom: 2px solid #0e3802;
        padding-bottom: 5px;
    }

    .archive-image {
        max-width: 400px;
        height: auto;
        border-radius: 5px;
        cursor: pointer;
    }

    .archive-video iframe {
        width: 100%;
        height: 300px;
        border-radius: 5px;
    }
</style>

<x-app>
    @section('title', 'একাডেমিক এবং প্রোগ্রাম আর্কাইভ')

    <div class="container mt-4">
        <!-- Archive Header -->
        <div class="archive-header">
            <h2>একাডেমিক এবং প্রোগ্রাম আর্কাইভ</h2>
            <p>অতীত শিক্ষাবর্ষ এবং প্রোগ্রাম আর্কাইভ দেখতে নিচে স্ক্রোল করুন।</p>
        </div>

        <!-- Academic Archive Section -->
        <div class="archive-category">
            <h3>একাডেমিক আর্কাইভ</h3>
            <div class="archive-page">
                <div class="archive-card">
                    <h5>২০২৩ শিক্ষাবর্ষ</h5>
                    <p>২০২৩ শিক্ষাবর্ষে আমাদের স্কুলে বিভিন্ন গুরুত্বপূর্ণ শিক্ষা কার্যক্রম অনুষ্ঠিত হয়েছে।</p>

                    <!-- Image with Lightbox -->
                    <div class="d-flex">
                        <a style="margin:5px 20px;" href="{{ asset('img/Ahsan.png') }}" data-lightbox="academic-2023">
                            <img src="{{ asset('img/Ahsan.png') }}" alt="Academic 2023"
                                style="height: 80px;margin:5px 20px;" class="archive-image">
                        </a>
                        <a style="margin:5px 20px;" href="{{ asset('img/ad_profile.png') }}"
                            data-lightbox="academic-2023">
                            <img src="{{ asset('img/ad_profile.png') }}" alt="Academic 2023"
                                style="height: 80px !important ;margin:5px 20px;" class="archive-image">
                        </a>
                    </div>

                    <!-- Video Embed -->
                    <div class="archive-video mt-3">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section -->
        <div class="archive-footer">
            <p>এটি একাডেমিক এবং প্রোগ্রাম আর্কাইভ পৃষ্ঠা, যেখানে আপনি অতীত শিক্ষাবর্ষ এবং বিভিন্ন প্রোগ্রামের বিস্তারিত
                তথ্য দেখতে পারবেন।</p>
        </div>
    </div>
</x-app>
