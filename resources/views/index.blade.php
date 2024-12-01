<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAP API Demo</title>
</head>
<body>
<h1>SOAP API: Число словами</h1>


@if ($errors->any())
    <div style="color: red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


<form action="{{ route('soap.convert') }}" method="POST">
    @csrf
    <label for="number">Введите число для преобразования:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Отправить</button>
</form>


@if (isset($result))
    <h2>Результат:</h2>
    <p>Число <strong>{{ $number }}</strong> преобразовано в: <strong>{{ $result }}</strong></p>
@endif
</body>
</html>
