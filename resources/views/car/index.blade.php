<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Car</h2>  
    <div class="text-end">
        <a href="{{route('cars.create')}}" class="btn btn-success">create</a>    
    </div>    
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>opt</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($data123 as $key=>$value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>
                <a href="{{route('cars.edit', ['car' => $value['id']])}}" class="btn btn-warning btn-sm">edit</a> 
            </td>
        </tr>
    @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>