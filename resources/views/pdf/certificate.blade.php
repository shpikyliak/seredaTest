<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        {{file_get_contents("https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css")}}
        body { font-family: DejaVu Sans }
    </style>

</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="number">Номер сертифіката</label>
                <input type="text" value="{{$certificateDTO->number}}">
            </div>
            <div class="form-group">
                <label for="title">Назва курсу</label>
                <input type="text" value="{{$certificateDTO->title}}">
            </div>
            <div class="form-group">
                <label for="student_name">Ім'я учня</label>
                <input type="text" value="{{$certificateDTO->student_name}}">
            </div>
            <div class="form-group">
                <label for="finish_date">Дата завершення курсу</label>
                <input type="date" value="{{$certificateDTO->finish_date}}">
            </div>

            <img src="data:image/png;base64,{{ $qrCode }}">
        </div>
    </div>
</div>
</body>
</html>
