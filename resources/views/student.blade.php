<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>รหัสนักศึกษา</th>
            <th>ชื่อสกุล</th>
        </tr>
    </thead>
    <tbody>
        @php
        $students = json_decode(file_get_contents('https://raw.githubusercontent.com/arc6828/laravel8/main/public/json/students.json'));
        @endphp
        @foreach ($students as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>