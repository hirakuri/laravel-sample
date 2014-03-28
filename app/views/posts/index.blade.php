<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel on eXcale</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>All Posts</h1>

    {{ Form::open(array('url' => 'posts/create', 'method' => 'GET', 'role' => 'form')) }}
    <div class="form-group">
      {{ Form::submit('Add post', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}

    @if (count($posts) > 0)
      <table class="table">
        @foreach ($posts as $post)
          <tr>
            <td>{{{ $post->title }}}</td>
            <td>{{{ $post->body }}}</td>
            <td>
              {{ Form::open(array('url' => 'posts/'. $post->id, 'method' => 'DELETE')) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      </table>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
