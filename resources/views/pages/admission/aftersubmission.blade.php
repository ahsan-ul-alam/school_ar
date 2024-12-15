<style>
    .confirmation-container {
        padding: 30px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        text-align: center;
    }

    .confirmation-container h2 {
        color: #0e3802;
        font-size: 2rem;
    }

    .confirmation-message {
        background: #d4edda;
        color: #155724;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        font-size: 1.1rem;
    }

    .btn-home {
        background: #0e3802;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 1.1rem;
        margin-top: 30px;
    }

    .btn-home:hover {
        background: #085f02;
    }

    /* Styling for the copy button */
    .copy-btn {
        background-color: #0e3802;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        margin-left: 10px;
    }

    .copy-btn:hover {
        background-color: #085f02;
    }

    .copy-btn:focus {
        outline: none;
    }

    .admission {
        background: #0e3802 !important;
        border-radius: 5px;
    }
</style>

<x-app>
    @section('title', 'অ্যাডমিশন সফল')

    <div class="container mt-4">
        <div class="confirmation-container">
            <h2>ভর্তি আবেদন সফল হয়েছে</h2>
            <div class="confirmation-message">
                <p>আপনার আবেদন সফলভাবে জমা দেয়া হয়েছে। </p>
                <strong class="text-danger">আপনার আবেদন আইডি টি সংরক্ষন করুন *** </strong>
                <div>
                    <p>
                        Admission ID: <span id="admission-id"
                            class="py-1 px-2 bg-light text-dark rounded">{{ 'arwa-' . rand(1, 999999) . 'ar' }}</span>
                        <button class="copy-btn" onclick="copyAdmissionID()">কপি করুন</button>
                    </p>
                </div>
                <p>আপনার আবেদন পর্যালোচনা করে শীঘ্রই যোগাযোগ করা হবে।</p>
            </div>
            <br>
            <a href="/" class="btn btn-success">হোমপেজে ফিরে যান</a>
        </div>
    </div>

    <script>
        // Function to copy Admission ID to clipboard
        function copyAdmissionID() {
            var admissionID = document.getElementById("admission-id").innerText;
            navigator.clipboard.writeText(admissionID).then(function() {
                alert("Admission ID copied to clipboard: " + admissionID);
            }).catch(function(err) {
                console.error("Failed to copy text: ", err);
            });
        }
    </script>
</x-app>
