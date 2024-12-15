<style>
    .admission {
        background: #0E3802 !important;
        padding: 20px;
    }

    .admission-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .admission-header h2 {
        color: #0e3802;
    }

    .admission-container {
        padding: 30px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        margin-top: 30px;
    }

    .admission-form {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    .form-group label {
        font-size: 1rem;
        color: #0e3802;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    .form-group textarea {
        height: 100px;
    }

    .form-group input[type="file"] {
        padding: 5px;
    }

    /* General Image Preview */
    .image-preview {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e9ecef;
        width: 150px;
        height: 150px;
        border: 1px dashed #ccc;
        border-radius: 50%;
        margin-top: -160px;
        overflow: hidden;
        /* Prevent content from overflowing the circle */
    }

    .image-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image fits within the circle */
        border-radius: 50%;
        /* Keep the image circular */
    }

    .btn-submit {
        grid-column: span 3;
        background: #0e3802;
        color: white;
        padding: 15px;
        text-align: center;
        border: none;
        border-radius: 5px;
        font-size: 1.1rem;
        cursor: pointer;
    }

    .btn-submit:hover {
        background: #085f02;
    }

    @media (max-width: 768px) {
        .admission-form {
            grid-template-columns: 1fr;
        }

        .btn-submit {
            grid-column: span 1;
        }
    }
</style>

<x-app>
    @section('title', 'অ্যাডমিশন ফর্ম')

    <div class="container mt-4">
        <!-- Header -->
        <div class="admission-header" style="text-align: center; margin-bottom: 150px;">
            <h2>অ্যাডমিশন ফর্ম</h2>
            <p>অনুগ্রহ করে সঠিক তথ্য দিন এবং ফর্মটি জমা দিন</p>
        </div>

        <!-- Form -->
        <div class="admission-container">
            <div class="image-preview mx-auto" id="imagePreview">
                <img src="{{ asset('img/user.png') }}" alt="Image Preview">
            </div>
            <form id="admissionForm" class="admission-form" enctype="multipart/form-data">
                <!-- Column 1 -->
                <div class="form-group">
                    <label for="studentName">শিক্ষার্থীর নামঃ</label>
                    <input type="text" id="studentName" name="studentName" placeholder="শিক্ষার্থীর নাম" required>
                </div>

                <div class="form-group">
                    <label for="dob">জন্মতারিখঃ</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="form-group">
                    <label for="gender">লিঙ্গঃ</label>
                    <select id="gender" name="gender" required>
                        <option value="">লিঙ্গ নির্বাচন করুন</option>
                        <option value="male">পুরুষ</option>
                        <option value="female">মহিলা</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="imageUpload">ছবি আপলোড করুনঃ </label>
                    <input type="file" id="imageUpload" name="imageUpload" accept="image/jpg, image/jpeg, image/png">
                    <small class="text-danger">jpg , jpeg , png</small>
                </div>

                <div class="form-group">
                    <label for="desiredGrade">ক্লাস নির্বাচন করুনঃ (ভর্তির ইচ্ছুক)</label>
                    <select id="desiredGrade" name="desiredGrade" required>
                        <option value="">ক্লাস নির্বাচন করুন</option>
                        <option value="grade1">ক্লাস ১</option>
                        <option value="grade2">ক্লাস ২</option>
                        <option value="grade3">ক্লাস ৩</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="previousSchool">পূর্ববর্তী বিদ্যালয়ঃ <small>( প্রথম হলে 'নাই' লিখুন )</small> </label>
                    <input type="text" id="previousSchool" name="previousSchool"
                        placeholder="পূর্ববর্তী বিদ্যালয়ের নাম" required>
                </div>

                <div class="form-group">
                    <label for="phone">ফোন নম্বরঃ</label>
                    <input type="tel" id="phone" name="phone" placeholder="ফোন নম্বর" pattern="[0-9]{11}"
                        required>
                </div>

                <div class="form-group">
                    <label for="phone">ফোন নম্বরঃ <small>( বাড়ি )</small> </label>
                    <input type="tel" id="phone" name="phone" placeholder="ফোন নম্বর" pattern="[0-9]{11}"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">ইমেইলঃ</label>
                    <input type="email" id="email" name="email" placeholder="ইমেইল ঠিকানা">
                </div>

                <div class="form-group">
                    <label for="parentName">পিতার নামঃ</label>
                    <input type="text" id="parentName" name="parentName" placeholder="অভিভাবকের নাম" required>
                </div>

                <div class="form-group">
                    <label for="parentName">মাতার নামঃ</label>
                    <input type="text" id="parentName" name="parentName" placeholder="অভিভাবকের নাম" required>
                </div>

                <div class="form-group">
                    <label for="parentName">ঠিকানাঃ </label>
                    <input type="text" id="parentName" name="parentName"
                        placeholder="হাউস নম্বর , গ্রাম , ওয়ার্ড ইত্যাদি" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">ফর্ম জমা দিন</button>
            </form>
        </div>
    </div>

    <script>
        const defaultImage = "{{ asset('img/user.png') }}";

        // Change Image Preview
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview">';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app>
