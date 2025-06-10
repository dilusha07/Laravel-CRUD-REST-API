<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h3>Daily Tasks</h3>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role='alert">
                        {{$error}}
                    </div>
                    @endforeach
                  <form method="post" action="/saveTask">
                    {{csrf_field()}}
                  <input type='text' class="form-control" name='task' placeholder='Enter your task name' />

                    <br>
                      <input type = 'submit' class='btn btn-primary' value='SAVE'>
                      <input type = 'button' class='btn btn-warning' value='CLEAR'>
                      <br>
                      <br>
                  </form>
                    <table class='table table-dark' >
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        @foreach($tasks as $task)
                            <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                                @if($task->isCompleted)
                                <button class="btn btn-success">Completed</button>
                                @else
                                <button class="btn btn-warning">Not Completed</button>
                            </td>
                            </tr>
                        @endforeach
                        <!-- <tr>
                        <td>1</td>
                        <td>I have to learn latavel today</td>
                        <td>Not yet</td>
                        </tr> -->
                            

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>