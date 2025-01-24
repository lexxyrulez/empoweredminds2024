<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light background color */
            color: #343a40; /* Dark text for contrast */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .thank-you-container {
            text-align: center;
            padding: 40px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .thank-you-header {
            font-size: 2.5rem;
            color: #d57176; /* Main accent color */
            margin-bottom: 20px;
        }
        .thank-you-message {
            font-size: 1.2rem;
            color: #6c757d; /* Subtle secondary text */
            margin-bottom: 30px;
        }
        .thank-you-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: #ffffff;
            background-color: #d57176; /* Button color */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .thank-you-btn:hover {
            background-color: #b0595d; /* Darker hover effect */
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1 class="thank-you-header">Thank You!</h1>
        <p class="thank-you-message">
            Your submission has been received successfully. We appreciate your effort and will get back to you soon.
        </p>
        <a href="/" class="thank-you-btn">Back to Home</a>
    </div>
</body>
</html>
