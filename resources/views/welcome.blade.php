<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style> </style>
    </head>
    <body class="antialiased">
        <div style="margin: 250px">
            <form action="{{ route('home') }}" method="POST">
                @csrf
                <label for="">Select an option:</label>
                <select id="my-select" name="my-select">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
