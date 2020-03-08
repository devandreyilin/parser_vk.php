<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body style="display: flex;
      flex-direction: column;
      align-items: center;">
<div>
   <label for="url">Введите ссылку на видео:</label>
   <input id="url" type="text" name="url">
   <input class="btn-submit" type="submit" value="Получить ссылку">
</div>
<div id="response">
   <div class="temp" style="display: none;"></div>
   <div class="out"></div>
</div>


<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="parser.js"></script>
</body>
</html>