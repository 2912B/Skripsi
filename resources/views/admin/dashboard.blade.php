<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/css/admin/dashboard.css')
    @vite('resources/js/admin/dashboard.js')
    @vite('resources/js/error.js')
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <ul class="nav">
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="{{ route('alogout') }}">Logout</a></li>
            </ul>
        </aside>

        <main class="content">
            <div class="courses-grid">
                @if (count($userData) > 0)
                    @foreach ($userData as $userName => $count)
                        <a href="{{ route('admin.submission', ['username' => $userName]) }}" class="course-card-link"> <div class="course-card">
                            <div class="course-title">{{ $userName }}</div>
                            <div class="course-counts">
                                <div>Submitted: {{ $count }}</div>
                            </div>
                        </div></a>
                    @endforeach
                @else
                    <div class="no-data">No submissions found.</div>
                @endif
            </div>
        </main>
    </div>
</body>
</html>
