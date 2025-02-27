<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Data</title>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="{{ asset("/assets/css/plugins/fontawesome.min.css") }}">

    <style>
        /* Custom CSS */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 1rem;
        }
        .header {
            background-color: #f8f9fa; /* Light background for header */
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dee2e6;
        }
        .header .logo {
            height: 50px;
        }
        .back-button {
            font-size: 1.125rem;
            font-weight: 500;
            color: #1d4ed8; /* Tailwind's blue-700 */
        }
        .back-button:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #f8f9fa; /* Light background for footer */
            padding: 1rem;
            border-top: 1px solid #dee2e6;
            text-align: center;
        }
        .footer .back-button {
            display: inline-block;
            font-size: 1.125rem;
            font-weight: 500;
            color: #1d4ed8; /* Tailwind's blue-700 */
        }
        .footer .back-button:hover {
            text-decoration: underline;
        }
        .header-image {
            width: 100%;
            height: auto;
        }
        .rts-section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1d4ed8; /* Tailwind's blue-700 */
            margin-bottom: 1rem;
        }
        .table-theme thead {
            background-color: #1d4ed8; /* Tailwind's blue-700 */
            color: white;
        }
        .table-theme th, .table-theme td {
            padding: 0.75rem;
            text-align: left;
        }
        .table-theme tfoot th {
            background-color: #f1f5f9; /* Tailwind's gray-100 */
        }
        .table-theme tfoot select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
        }
        @media (max-width: 768px) {
            .header, .footer {
                flex-direction: column;
                text-align: center;
            }
            .header .logo {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <picture>
            <source srcset="{{ asset('/assets/images/logo_tran.svg') }}" type="image/svg+xml">
            <img src="{{ asset('/assets/images/logo_tran.svg') }}" alt="logo" class="logo">
        </picture>
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </header>

    <div class="container mt-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Students Achievements</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ ucfirst(str_replace('-', ' ', request()->input('department'))) }}</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="admission-content-top">
            <div class="application-deadline">
                <h5 class="rts-section-title animated fadeIn">Students Achivements</h5>
                <div class="application-deadline__content mt-5">
                    <div class="application-deadline__content--table">
                        @include('components.templates.student-achievements-table', ['StudentAchievements' => $StudentAchievements])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </footer>

    <!-- Include DataTables CSS and JS -->
    <script>
        $(document).ready(function() {
            var table = initializeDataTable('#studentsTable');
            setupCustomFilters(table);
        });

        function initializeDataTable(selector) {
            return $(selector).DataTable({
                "bAutoWidth": false,
                "scrollX": true,
                "paging": true, // Enables pagination
                "ordering": true, // Enables multi-column ordering
                "searching": true, // Enables instant search
                "language": {
                    "paginate": {
                        "previous": "Previous",
                        "next": "Next",
                        "first": "First",
                        "last": "Last"
                    }
                }
            });
        }

        function setupCustomFilters(table) {
            $('#academicYearFilter').on('change', function() {
                var selectedValue = $(this).val();
                table.column(0).search(selectedValue ? '^' + selectedValue + '$' : '', true, false).draw();
            });

            $('#eventNameFilter').on('change', function() {
                var selectedValue = $(this).val();
                table.column(1).search(selectedValue ? '^' + selectedValue + '$' : '', true, false).draw();
            });

            $('#institutionNameFilter').on('change', function() {
                var selectedValue = $(this).val();
                table.column(5).search(selectedValue ? '^' + selectedValue + '$' : '', true, false).draw();
            });
        }
    </script>
</body>
</html>
