<style>
    .notice {
        background: #0e3802 !important;
        border-radius: 5px;
    }

    .notice-container {
        background: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .notice-header {
        color: #0e3802;
        font-size: 1.8rem;
        font-weight: bold;
    }

    .notice-description {
        font-size: 1.1rem;
        color: #555;
        margin-top: 15px;
    }

    .pdf-viewer {
        width: 100%;
        height: 600px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-container {
        margin-top: 20px;
    }

    .btn-success {
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>

<x-app>
    @section('title', 'Notice Details')
    <div class="container">
        <div class="notice-container">
            <h1 class="notice-header">Important School Notice</h1>
            <p class="notice-description">
                This notice is to inform all students and parents that the annual sports day event has been scheduled
                for
                January 15th, 2024. Please ensure your participation and bring along the required documents for
                registration.
                For any queries, contact the administration office.
            </p>

            {{-- PDF or image Viewer --}}
            <iframe src="{{ asset('uploads/pdf/mypdf.pdf') }}" class="pdf-viewer"></iframe>

            {{-- Button Section --}}
            <div class="btn-container">
                <a href="{{ asset('uploads/pdf/mypdf.pdf') }}" class="btn btn-success" download>
                    Download Notice
                </a>
            </div>
        </div>
    </div>
</x-app>
