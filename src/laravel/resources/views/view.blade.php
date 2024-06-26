<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Create Post</title>
</head>
<body>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
	<form method="POST" action="/post" enctype="multipart/form-data">

		{{ csrf_field() }}

    <div>
      <label for="title">name:</label>
    </div>
    <div>
      <input id="title" type="text" name="title" value="">
    </div>

    <div>
      <label for="body">body:</label>
    </div>
    <div>
      <textarea id="body" name="body" cols="25" rows="5"></textarea>
    </div>

    <button type="submit">登録する</button>
	</form>
</body>
</html>