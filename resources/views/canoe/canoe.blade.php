<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polynesian Outrigger Canoe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js">
    <style>
        /* Add your styling for the canoe here */
        .canoe {
            width: 200px;
            height: 50px;
            background-color: #3498db;
            position: relative;
        }

        .seat {
            width: 30px;
            height: 30px;
            background-color: #e74c3c;
            position: absolute;
        }
    </style>
</head>
<body x-data="{ seats: 6 }">
    <h1>Polynesian Outrigger Canoe</h1>

    <div x-init="() => {
            // Code to initialize the canoe or perform other setup
        }" class="canoe">
        <template x-for="seat in Array.from({ length: seats })" :key="seat">
            <div :style="{ left: seat * 30 + 'px' }" class="seat"></div>
        </template>
    </div>

    <label for="seatCount">Number of Seats:</label>
    <input id="seatCount" type="number" x-model="seats" min="1" max="10">

    <p>Adjust the number of seats using the input field.</p>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
