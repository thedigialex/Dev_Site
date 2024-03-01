<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alejandro Martinez</title>
   
    <style>
        .menu {
            padding: 20px;
            text-align: center;
        }

        .links-container {
            display: inline-flex;
            background-color: #007bff;
            border-radius: 10px;
            padding: 10px;
            gap: 20px;
        }

        .links-container a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }

        .footer {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        .entrance {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .container {
            display: flex;
            align-items: center;
        }

        .image {
            width: 33%;
            height: auto;
        }

        .text {
            width: 67%;
            padding-left: 20px;
        }


        .basic-text,
        .four-text-section {
            padding: 20px;
        }

        .four-text-section .row {
            display: flex;
            justify-content: space-between;
        }

        .four-text-section .column {
            width: 48%;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="menu">
        <div class="links-container">
            <a href="#link1">Link 1</a>
            <a href="#link2">Link 2</a>
            <a href="#link3">Link 3</a>
            <a href="#link4">Link 4</a>
        </div>
    </div>


    <div class="entrance">
        <h1>Title</h1>
        <div class="container">
            <img src="{{ asset('images/website_logo.png') }}" alt="Image of Alex" class="image">
            <div class="text">
                Your text goes here. This can be any length, and it will be displayed right next to the image.
            </div>
        </div>

    </div>

    <div class="basic-text">
        <p>This is a basic text section.</p>
    </div>

    <div class="four-text-section">
        <div class="row">
            <div class="column">
                <p>Text Block 1</p>
            </div>
            <div class="column">
                <p>Text Block 2</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <p>Text Block 3</p>
            </div>
            <div class="column">
                <p>Text Block 4</p>
            </div>
        </div>
    </div>

    <div class="basic-text">
        <p>This is another basic text section.</p>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>

</body>

</html>