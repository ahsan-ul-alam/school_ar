<style>
    .identity {
        background: #0e3802 !important;
        border-radius: 5px;
    }
</style>
<x-app>
    @section('title', 'পরিচিতি')
    <div class="row mt-4">
        <div class="col-md-8">
            <h2 class="mb-4 text-success">স্কুলের পরিচিতি</h2>
            <p class="fs-5">
                আমাদের স্কুল একটি শিক্ষামূলক প্রতিষ্ঠান যা শিক্ষার উন্নয়ন ও মানবিক মূল্যবোধ গড়ে তোলার জন্য
                প্রতিশ্রুতিবদ্ধ। এখানে শিক্ষার্থীদের জন্য একটি আদর্শ পরিবেশ তৈরি করা হয়েছে যেখানে তারা
                কেবলমাত্র একাডেমিক শিক্ষাই নয়, বরং সৃজনশীলতা, নৈতিকতা, এবং নেতৃত্বের গুণাবলি অর্জন করতে পারে।
            </p>
            <p class="fs-5">
                আমাদের স্কুলের প্রতিষ্ঠা ১৯৯৫ সালে হয় এবং এটি বর্তমানে এলাকার অন্যতম সেরা শিক্ষা প্রতিষ্ঠান
                হিসাবে পরিচিত। স্কুলটি ছাত্র-ছাত্রীদের সর্বোচ্চ মানের শিক্ষা দেওয়ার জন্য উচ্চ যোগ্যতাসম্পন্ন
                শিক্ষকবৃন্দ এবং আধুনিক সুবিধা সরবরাহ করে।
            </p>
            <p class="fs-5">
                শিক্ষার্থীদের জন্য আধুনিক প্রযুক্তি-সমৃদ্ধ ক্লাসরুম, লাইব্রেরি, এবং গবেষণাগার আমাদের স্কুলের
                অন্যতম বড় আকর্ষণ। প্রতিটি ছাত্রছাত্রী একটি সমন্বিত এবং পরিপূর্ণ শিক্ষার অভিজ্ঞতা অর্জন করে।
            </p>
            <p class="fs-5">
                শিক্ষার্থীদের জন্য আধুনিক প্রযুক্তি-সমৃদ্ধ ক্লাসরুম, লাইব্রেরি, এবং গবেষণাগার আমাদের স্কুলের
                অন্যতম বড় আকর্ষণ। প্রতিটি ছাত্রছাত্রী একটি সমন্বিত এবং পরিপূর্ণ শিক্ষার অভিজ্ঞতা অর্জন করে।
            </p>
            <a href="/contact" class="btn btn-success btn-lg mt-3 shadow">যোগাযোগ করুন</a>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/building.jpg') }}" alt="School Building" class="img-fluid rounded shadow-lg mb-3">
            <h5 class="text-muted text-center">একাডেমিক ভবন</h5>
            <img src="{{ asset('img/building.jpg') }}" alt="School Building" class="img-fluid rounded shadow-lg mb-3">
            <div class="mt-2 text-center">
                <h5 class="text-muted">প্রশাসনিক ভবন</h5>
            </div>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <h3 class="mb-4 text-center text-primary">আমাদের স্কুলের সুবিধা</h3>
        <div class="col-md-4">
            <img src="{{ asset('img/classroom.jpg') }}" alt="Classroom" style="height: 250px"
                class="img-fluid rounded shadow mb-3">
            <h6 class="text-center text-muted">আধুনিক শ্রেণীকক্ষ</h6>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/library.jpg') }}" alt="Library" style="height: 250px"
                class="img-fluid rounded shadow mb-3">
            <h6 class="text-center text-muted">লাইব্রেরি</h6>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/playground.jpg') }}" alt="Playground" style="height: 250px"
                class="img-fluid rounded shadow mb-3">
            <h6 class="text-center text-muted">খেলার মাঠ</h6>
        </div>
    </div>
</x-app>
