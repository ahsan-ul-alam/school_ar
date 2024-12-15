<style>
    .contact {
        background: #0E3802 !important;
        padding: 20px;
    }

    .contact-container {
        padding: 40px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .contact-header h2 {
        color: #0e3802;
    }

    .contact-header p {
        font-size: 1.1rem;
        color: #555;
    }

    .contact-form {
        background: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-size: 1rem;
        color: #0e3802;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border-radius: 5px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
    }

    .form-control:focus {
        border-color: #0e3802;
        outline: none;
    }

    .btn-submit {
        background: #0e3802;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1.1rem;
        cursor: pointer;
        width: 100%;
    }

    .btn-submit:hover {
        background: #085f02;
    }

    .contact-info {
        margin-top: 40px;
        text-align: center;
    }

    .contact-info h3 {
        color: #0e3802;
    }

    .contact-info p {
        font-size: 1rem;
        color: #555;
    }

    .social-icons a {
        font-size: 1.5rem;
        color: #0e3802;
        margin: 0 10px;
    }

    .social-icons a:hover {
        color: #085f02;
    }
</style>

<x-app>
    @section('title', 'যোগাযোগ')

    <div class="container mt-4">
        <!-- Contact Header -->
        <div class="contact-header">
            <h2>যোগাযোগ করুন</h2>
            <p>যেকোনো প্রশ্ন বা অনুসন্ধানের জন্য আমাদের সাথে যোগাযোগ করুন।</p>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <form action="/submit-contact-form" method="POST">
                <div class="form-group">
                    <label for="name">আপনার নামঃ</label>
                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="আপনার নাম লিখুন">
                </div>

                <div class="form-group">
                    <label for="email">ইমেইলঃ</label>
                    <input type="email" class="form-control" id="email" name="email" required
                        placeholder="আপনার ইমেল লিখুন">
                </div>

                <div class="form-group">
                    <label for="message">বার্তাঃ</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required placeholder="আপনার বার্তা লিখুন"></textarea>
                </div>

                <button type="submit" class="btn-submit">প্রেরণ করুন</button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="contact-info mb-3">
            <h3>সরাসরি যোগাযোগের ঠিকানা</h3>
            <p><strong>ফোন নম্বর:</strong> +880 123 456 789</p>
            <p><strong>ঠিকানা:</strong> 123, প্রধান সড়ক, ঢাকা, বাংলাদেশ</p>

            <!-- Social Media Links -->
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank" class="fab fa-facebook"></a>
                <a href="https://twitter.com" target="_blank" class="fab fa-twitter"></a>
                <a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a>
                <a href="https://linkedin.com" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
</x-app>
