<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex items-center justify-between p-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div class="space-x-4 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
