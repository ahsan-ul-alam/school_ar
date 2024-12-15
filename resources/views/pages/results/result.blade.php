<style>
    .result {
        background: #0e3802 !important;
        border-radius: 5px;
    }

    .result-container {
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .result-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        margin-bottom: 20px;
        padding: 15px;
    }

    .result-card h5 {
        font-size: 1.3rem;
        color: #0e3802;
        margin: 0;
    }

    .result-card select,
    .result-card input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .result-card button {
        background: #0e3802;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        margin-top: 15px;
    }

    .result-card button:hover {
        background: #085f02;
    }

    .modal-content {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
    }

    .modal-body {
        font-size: 1.1rem;
    }
</style>

<x-app>
    @section('title', 'ফলাফল')

    <div class="container mt-4">
        <div class="result-container">
            <!-- Class-Based Result -->
            <div class="result-card">
                <h5>ক্লাস ভিত্তিক ফলাফল</h5>
                <form id="classResultForm">
                    <select id="classSelect">
                        <option value="" disabled selected>ক্লাস নির্বাচন করুন</option>
                        <option value="grade1">গ্রেড ১</option>
                        <option value="grade2">গ্রেড ২</option>
                        <option value="grade3">গ্রেড ৩</option>
                        <!-- Add more classes as needed -->
                    </select>
                    <select id="classSelect">
                        <option value="" disabled selected>পরিক্ষা নির্বাচন করুন</option>
                        <option value="grade1">মাসিক পরিক্ষা</option>
                        <option value="grade3">সাময়িক পরিক্ষা</option>
                        <option value="grade2">বার্ষিক পরিক্ষা</option>
                        <!-- Add more classes as needed -->
                    </select>

                    <button type="submit" class="mt-3">ফলাফল দেখুন</button>
                </form>
            </div>

            <!-- Student-Based Result -->
            <div class="result-card">
                <h5>স্টুডেন্ট ভিত্তিক ফলাফল</h5>
                <form id="studentResultForm">
                    <input type="text" id="rollNumber" placeholder="রোল নম্বর লিখুন" required>
                    <button type="submit" class="mt-3">ফলাফল দেখুন</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Showing Result -->
    <div class="modal" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">ফলাফল</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="resultContent">
                    <!-- Results will be inserted here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Modal functionality -->
    <script>
        // Function to open the modal and display the results
        function openResultModal(resultText) {
            document.getElementById('resultContent').innerHTML = resultText;
            var myModal = new bootstrap.Modal(document.getElementById('resultModal'));
            myModal.show();
        }

        // Class-Based Result Form Submission
        document.getElementById('classResultForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var selectedClass = document.getElementById('classSelect').value;
            var resultText = selectedClass + " ক্লাসের ফলাফল নিচে দেয়া হলোঃ";
            openResultModal(resultText);
        });

        // Student-Based Result Form Submission
        document.getElementById('studentResultForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var rollNumber = document.getElementById('rollNumber').value;
            var resultText = "রোল ঃ" + rollNumber + "<br> Marks : 984/1000 <br> Grade : A+";
            openResultModal(resultText);
        });
    </script>
</x-app>
