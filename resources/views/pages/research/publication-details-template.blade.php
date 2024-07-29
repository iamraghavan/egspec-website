<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Data</title>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- fontawesome 6.4.2 -->
<link rel="stylesheet" href="{{ asset("/assets/css/plugins/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <style>
        /* Custom CSS */
        .container {
            max-width: 1200px;
            margin: auto;
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
            height: 40px;
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
        }
        .footer .back-button {
            display: block;
            text-align: center;
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
    </style>
</head>
<body class="bg-gray-100">
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
        <!-- Main Content -->

        <div class="admission-content-top">
            <div class="application-deadline">
               <h5 class="rts-section-title animated fadeIn">Publication Details - {{ $departmentName }}</h5>
               <div class="application-deadline__content mt-5">
                  <div class="application-deadline__content--table">


        @if (!empty($ConsultancyProjects) && is_array($ConsultancyProjects))
            <table id="projectsTable" class="table table-striped table-hover table-bordered">
                <thead class="table-theme">
                    <tr>
                        <td>Academic Year</td>
                        <td>Project Title</td>
                        <td>Company</td>
                        <td>Duration</td>
                        <td>Budget</td>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>
                            <select id="academicYearFilter" class="form-select">
                                <option value="">Select Academic Year</option>
                                @foreach (array_unique(array_column($ConsultancyProjects, 'AcademicYear')) as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th colspan="4"></th> <!-- Add empty columns for alignment -->
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($ConsultancyProjects as $project)
                        <tr data-academic-year="{{ $project['AcademicYear'] }}">
                            <td>{{ $project['AcademicYear'] }}</td>
                            <td>{{ $project['ProjectTitle'] }}</td>
                            <td>{{ $project['Company'] }}</td>
                            <td>{{ $project['Duration'] ?? $project['Period'] }}</td>
                            <td>{{ $project['Budget'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center mt-4">No data found.</p>
        @endif
    </div>

    <!-- Footer -->
    <footer class="footer">
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </footer>

    <!-- Include DataTables CSS and JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#projectsTable').DataTable({
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

            // Custom filter for the Academic Year column
            $('#academicYearFilter').on('change', function() {
                var selectedValue = $(this).val();
                table.column(0).search(selectedValue ? '^' + selectedValue + '$' : '', true, false).draw();
            });
        });
    </script>
</body>
</html>
