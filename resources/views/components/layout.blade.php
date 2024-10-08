<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
    <style>
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }

        .animate-blink {
            animation: blink 1s step-start infinite;
        }
    </style>
</head>
<body class="bg-gray-950 min-h-screen flex flex-col">
    {{$slot}}

    <footer class="text-white mt-auto">

        <div class=" ml-auto w-1/4 text-right font-semibold text-sm">
             <span>&#169;</span>Mayokun laoshe-lawal 2024
        </div>
       
        
    </footer>

</body>
</html>