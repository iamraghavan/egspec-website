@if (!empty($StudentAchievements) && is_array($StudentAchievements))
    <table id="studentsTable" class="table table-theme table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Name of the Students</th>
                <th>Event Name</th>
                <th>Event Category</th>
                <th>Duration</th>
                <th>No of Days</th>
                <th>Institution Name</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>
                    <select id="eventNameFilter" class="form-select">
                        <option value="">Event Name</option>
                        @foreach (array_unique(array_column($StudentAchievements, 'Event Name')) as $eventName)
                            <option value="{{ $eventName }}">{{ $eventName }}</option>
                        @endforeach
                    </select>
                </th>
                <th>
                    <select id="institutionNameFilter" class="form-select">
                        <option value="">Institution Name</option>
                        @foreach (array_unique(array_column($StudentAchievements, 'Institution Name')) as $institutionName)
                            <option value="{{ $institutionName }}">{{ $institutionName }}</option>
                        @endforeach
                    </select>
                </th>
                <!-- Add empty columns for alignment -->
            </tr>
        </tfoot>
        <tbody>
            @foreach ($StudentAchievements as $student)
                <tr>
                    <td>{{ $student['Name of the Students'] }}</td>
                    <td>{{ $student['Event Name'] }}</td>
                    <td>{{ $student['Event Category'] }}</td>
                    <td>{{ $student['Duration'] }}</td>
                    <td>{{ $student['No of Days'] }}</td>
                    <td>{{ $student['Institution Name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-center mt-4">No data found.</p>
@endif
