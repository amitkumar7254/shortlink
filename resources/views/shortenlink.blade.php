<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Shorten Link</title>
  </head>
  <body>
    <div class="container mt-5">

        <h2>  Laravel - Create URL Short</h2>
        @if (session('success'))
            
        
        <div class="alert alert-success">{{ (session('success')) }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <form method="post" action="{{ route('generate.shorten.link') }}">
                @csrf
                <div class="input-group mb-5">
                    <input type="text" name="link" class="from-control" placeholder="Enter Url">
                    
                    <div class="input-group-addon">
                        <button class="btn btn-success">Generate Shorten Link</button>
                    </div>
                    <br>
                </div>
                @error('link') {{$message}}<p class="m-0 p-0 text text-danger"></p>@enderror
                </form>
            
        </div> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Short Link</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shortLinks as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                    <td>{{$row->link}}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>