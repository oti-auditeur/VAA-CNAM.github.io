<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles pour la pirogue */
        .pirogue1, .pirogue3, .pirogue6 {
            width: 170px;
            height: 50px;
            background-color: #1E88E5;
            margin: 10px;
            position: relative;
            clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 20% 100%);
        }
        
        .pirogue3 {
            width: 250px;
        }

        .pirogue6 {
            width: 550px;
        }

        /* Styles pour les places dans la pirogue */
        .place {
            width: 30px;
            height: 30px;
            background-color: #FFC107;
            position: absolute;
        }

        .pirogue1 .place {
            left: calc(50% - 15px);
            top: 10px;
        }

        .pirogue3 .place:nth-child(1) {
            left: calc(30% - 15px);
            top: 10px;
        }

        .pirogue3 .place:nth-child(2) {
            left: calc(50% - 15px);
            top: 10px;
        }

        .pirogue3 .place:nth-child(3) {
            left: calc(70% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(1) {
            left: calc(25% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(2) {
            left: calc(35% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(3) {
            left: calc(45% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(4) {
            left: calc(55% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(5) {
            left: calc(65% - 15px);
            top: 10px;
        }

        .pirogue6 .place:nth-child(6) {
            left: calc(75% - 15px);
            top: 10px;
        }
    </style>
</head>
<body>

    <div class="pirogue1" id="pirogue1">
        <div class="place"></div>
    </div>

    <div class="pirogue3" id="pirogue3">
        <div class="place"></div>
        <div class="place"></div>
        <div class="place"></div>
    </div>

    <div class="pirogue6" id="pirogue6">
        <div class="place"></div>
        <div class="place"></div>
        <div class="place"></div>
        <div class="place"></div>
        <div class="place"></div>
        <div class="place"></div>
    </div>

    <script>
        // Vous pouvez ajouter des fonctionnalités JavaScript ici si nécessaire
    </script>
</body>
</html>
