<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Create a Project</h1>
<form method="POST" action="/projects">
    @csrf
    <div class="field">
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>

    <div class="field">
        <label for="description">description</label>
        <textarea name="description"></textarea>
    </div>

    <button type="submit">Create Project</button>
</form>
</body>
</html>
