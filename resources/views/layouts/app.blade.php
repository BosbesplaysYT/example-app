<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Project Manager')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <a href="{{ route('projects.index') }}">Project Manager</a>
            </h1>
            <ul class="flex space-x-6">
                <li><a href="{{ route('projects.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Projecten</a></li>
                <li><a href="{{ route('tasks.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Taken</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

</body>

</html>