<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counting Animation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="text-center">
    <div class="relative inline-block">
        <div class="w-16 h-16 text-4xl font-bold text-gray-700">
            <span id="count">0</span>
        </div>
        <div class="w-16 h-16 absolute inset-0 flex items-center justify-center text-gray-700">
            <div id="progress" class="w-full h-full transform rotate-90 origin-center">
                <svg class="animate-spin-slow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
    const countElement = document.getElementById('count');
    const progressElement = document.getElementById('progress');

    const targetCount = 50;
    const animationDuration = 2000; // 2 seconds

    let currentCount = 0;
    let startTime = null;

    function animateCount(timestamp) {
        if (!startTime) {
            startTime = timestamp;
        }

        const elapsedTime = timestamp - startTime;
        const progress = Math.min(1, elapsedTime / animationDuration);
        currentCount = Math.round(progress * targetCount);

        countElement.innerText = currentCount;

        if (progress < 1) {
            requestAnimationFrame(animateCount);
        }
    }

    requestAnimationFrame(animateCount);
</script>

</body>
</html>
