<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Upload and Edit</title>
</head>

<body>
    <form action="/" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" multiple>
        <button type="submit">Submit</button>
    </form>
    {% for element in data %}
    <img src="/static/{{element}}" alt="" srcset="" height="100">
    {{element }} <br>
    {% endfor %}

</body>

</html>