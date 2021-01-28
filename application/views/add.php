<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Example-add</title>
    <style>
    .container{
      display:block;
      width:70%;
      margin:70px auto;
      font-size:1.5em;
    }
    .form-group{
      padding:10px 10px;
    }

    .btn-info{
      margin: 10px 18px;
      width:15%;
      height:60px;
      font-weight:bold;
    }

    .form-control{
      height:50px;
    }
    label{
      font-weight:bold;
    }
   
    </style>
</head>

<body>
    <div class="container">
    <h1 class="bg-info text-center">ADD DATA</h1>
        <form action="index.php/main/add" method="post" style="border:2px solid gray;">
            <div class="form-group">
                <label for="exampleInputEmail1">UserName</label>
                <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp"
                    placeholder="Enter Name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Email">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp"
                    placeholder="Enter Phone">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" aria-describedby="">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="4">
                </textarea>

            </div>

            <button type="submit" class="btn btn-info" name="submit">Submit</button>
            <button type="reset" class="btn btn-info" name="submit">Clear</button>
        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>