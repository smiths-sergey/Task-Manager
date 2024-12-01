<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 85%;
            padding: 10px;
            font-size: 1rem;
        }
        button {
            padding: 10px 15px;
            font-size: 1rem;
            border: none;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Получение погоды</h1>


    <form action="{{ route('weather.get') }}" method="POST">
        @csrf
        <input type="text" name="city" placeholder="Введите город" value="{{ old('city') }}" required>
        <button type="submit">Узнать</button>
    </form>


    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @isset($weather)
        <h2>Погода в {{ $city }}</h2>
        <h3>{{ $weather['weather'][0]['description'] }}</h3>
        <h2>Температура: {{ $weather['main']['temp'] }}°C</h2>
        <p>Ощущается как: {{ $weather['main']['feels_like'] }}°C</p>
        <p>Влажность: {{ $weather['main']['humidity'] }}%</p>
        <p>Скорость ветра: {{ $weather['wind']['speed'] }} м/с</p>
    @endisset
</div>
</body>
</html>
