<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Abstrak dengan Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Gaya khusus untuk desain abstrak */
        .abstract-design {
            background: linear-gradient(135deg, #3498db, #e74c3c, #f39c12);
            height: 400px;
            position: relative;
        }

        .abstract-shape {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .shape-1 {
            top: 100px;
            left: 50px;
        }

        .shape-2 {
            top: 250px;
            left: 300px;
        }

        .shape-3 {
            top: 50px;
            right: 100px;
        }

        .shape-4 {
            top: 200px;
            right: 50px;
        }

        .shape-5 {
            bottom: 50px;
            left: 200px;
        }

        .shape-6 {
            bottom: 100px;
            right: 200px;
        }

        .text-container {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .text {
            color: #fff;
            font-size: 36px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-md-12 abstract-design">
            <div class="shape-1 abstract-shape"></div>
            <div class="shape-2 abstract-shape"></div>
            <div class="shape-3 abstract-shape"></div>
            <div class="shape-4 abstract-shape"></div>
            <div class="shape-5 abstract-shape"></div>
            <div class="shape-6 abstract-shape"></div>
            <div class="text-container">
                <h1 class="text">Desain Abstrak Bootstrap</h1>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
