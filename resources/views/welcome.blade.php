<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Library</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Prevent scrolling */
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('http://127.0.0.1:8000/rural_library.jpg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(5px); /* Apply blur to the background image */
            z-index: -1; /* Place it behind other elements */
        }
        .centered-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Shadow for popping effect */
        }
        .centered-message h1 {
            font-family: 'Times New Roman', Times, serif; /* Set the font to Times New Roman */
            font-weight: bold; /* Make it bold */
            font-size: 4em; /* Increase font size */
        }
        .centered-message small {
            font-size: 1.5em; /* Adjust font size of the tagline */
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    @include('includes.header')

    <div class="background"></div>

    <div class="centered-message">
        <h1>Welcome to the Rural Library</h1><br>
        <small>A library is not a luxury but one of the necessities of life.</small>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
