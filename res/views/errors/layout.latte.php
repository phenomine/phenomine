<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{include text}</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            min-height: 100vh;
        }
        .text-large {
            font-size: 1.25rem;
        }
        .d-flex {
            display: flex;
        }
        .justify-content-center {
            justify-content: center;
        }
        .me-1 {
            margin-right: 0.25rem;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 1rem;
        }
        .text-muted {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <p class="text-muted text-large">
            <span class="me-1"><b>{include code}</b></span>
            <span>{include text}</span>
        </p>
    </div>
</body>

</html>