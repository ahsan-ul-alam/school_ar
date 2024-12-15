<x-app>
    <div class="container py-5">
        <h1 class="text-center mb-4">Student Result</h1>

        <!-- Exam Selection Section -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <select id="exam-select" class="form-select">
                    <option value="" selected disabled>Select Exam</option>
                    <option value="exam1">Half-Yearly Exam</option>
                    <option value="exam2">Final Exam</option>
                </select>
            </div>
        </div>

        <!-- Result Details Section -->
        <div id="result-details" class="d-none">
            <!-- Student Information Section -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/student.png') }}" alt="Student Photo" class="rounded-circle mb-3"
                                style="width: 120px; height: 120px;">
                            <h4 class="mb-0">আহসান</h4>
                            <p class="text-muted">রোল: ১ | ক্লাস: ১০ম</p>
                        </div>
                    </div>
                </div>

                <!-- Result Summary Section -->
                <div class="col-md-8 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h4 class="card-title">Result Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <h5 class="text-muted">Total Marks</h5>
                                    <h3 id="total-marks" class="text-primary"></h3>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5 class="text-muted">Marks Obtained</h5>
                                    <h3 id="marks-obtained" class="text-success"></h3>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5 class="text-muted">Grade</h5>
                                    <h3 id="grade" class="text-warning"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Marks Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h4 class="card-title">Detailed Marks</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Subject</th>
                                        <th>Full Marks</th>
                                        <th>Marks Obtained</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody id="detailed-marks">
                                    <!-- Dynamic Rows -->
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th>Total</th>
                                        <th id="total-full-marks"></th>
                                        <th id="total-obtained-marks"></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dummy Data Script -->
    <script>
        const dummyData = {
            exam1: {
                totalMarks: 700,
                marksObtained: 650,
                grade: "A+",
                subjects: [{
                        name: "বাংলা",
                        full: 100,
                        obtained: 95,
                        grade: "A+"
                    },
                    {
                        name: "ইংরেজি",
                        full: 100,
                        obtained: 90,
                        grade: "A+"
                    },
                    {
                        name: "গণিত",
                        full: 100,
                        obtained: 92,
                        grade: "A+"
                    },
                    {
                        name: "বিজ্ঞান",
                        full: 100,
                        obtained: 85,
                        grade: "A"
                    },
                    {
                        name: "ইসলাম শিক্ষা",
                        full: 100,
                        obtained: 88,
                        grade: "A+"
                    },
                    {
                        name: "ইতিহাস",
                        full: 100,
                        obtained: 90,
                        grade: "A+"
                    },
                    {
                        name: "শারীরিক শিক্ষা",
                        full: 100,
                        obtained: 80,
                        grade: "A"
                    },
                ],
            },
            exam2: {
                totalMarks: 700,
                marksObtained: 630,
                grade: "A",
                subjects: [{
                        name: "বাংলা",
                        full: 100,
                        obtained: 90,
                        grade: "A+"
                    },
                    {
                        name: "ইংরেজি",
                        full: 100,
                        obtained: 85,
                        grade: "A"
                    },
                    {
                        name: "গণিত",
                        full: 100,
                        obtained: 88,
                        grade: "A+"
                    },
                    {
                        name: "বিজ্ঞান",
                        full: 100,
                        obtained: 80,
                        grade: "A"
                    },
                    {
                        name: "ইসলাম শিক্ষা",
                        full: 100,
                        obtained: 86,
                        grade: "A+"
                    },
                    {
                        name: "ইতিহাস",
                        full: 100,
                        obtained: 85,
                        grade: "A"
                    },
                    {
                        name: "শারীরিক শিক্ষা",
                        full: 100,
                        obtained: 76,
                        grade: "B+"
                    },
                ],
            },
        };

        document.getElementById("exam-select").addEventListener("change", function() {
            const selectedExam = this.value;
            const resultDetails = document.getElementById("result-details");

            if (dummyData[selectedExam]) {
                const data = dummyData[selectedExam];

                // Update Summary
                document.getElementById("total-marks").textContent = data.totalMarks;
                document.getElementById("marks-obtained").textContent = data.marksObtained;
                document.getElementById("grade").textContent = data.grade;

                // Update Detailed Marks
                const tbody = document.getElementById("detailed-marks");
                tbody.innerHTML = ""; // Clear previous rows
                data.subjects.forEach((subject) => {
                    const row = `
                            <tr>
                                <td>${subject.name}</td>
                                <td>${subject.full}</td>
                                <td>${subject.obtained}</td>
                                <td>${subject.grade}</td>
                            </tr>
                        `;
                    tbody.innerHTML += row;
                });

                // Update Footer
                document.getElementById("total-full-marks").textContent = data.totalMarks;
                document.getElementById("total-obtained-marks").textContent = data.marksObtained;

                // Show Result Details
                resultDetails.classList.remove("d-none");
            }
        });
    </script>
</x-app>
