<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Example</title>

    <style>
    * {
        box-sizing: border-box;
    }

    #main {
        width: 100%;
        margin: 200px auto;

    }

    table {
        text-align: center;
        font-size: 1rem;
        width: 100%;
    }

    table tr {
        border: 4px solid white;
    }

    table tr td {
        border: 4px solid white;
        width: 200px;
    }
    #second{
        width:80%;
        margin:0px auto;
    }
    </style>
</head>

<body>
    <div class="container" id="main">
        <!-- On rows -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Country</th>
                    <th scope="col">User IP</th>
                    <th scope="col" colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach($contacts->result() as $row){
    echo '<tr>
    <td>'.$row->id.'</td>
    <td>'.$row->Name.'</td>
    <td>'.$row->Email.'</td>
    <td>'.$row->Subject.'</td>
    <td>'.$row->Message.'</td>
    <td>'.$row->Phone.'</td>
    <td>'.$row->Country.'</td>
    <td>'.$row->User_ip.'</td>
    
    <td><a href="'.base_url().'index.php/demo/update_data/'.$row->id.'" class="btn btn-secondary btn-lg" tabindex="-1" role="button" aria-disabled="true">Edit</a>
    </td>
    <td><a href="#" class="btn btn-secondary btn-lg delete" tabindex="-1" id="'.$row->id.'" role="button" aria-disabled="true">Delete</a>
    </td>
  </tr>';
}
?>
</tbody>
</table>
    </div>
    <div class="container" id="second">
    <button type="button" class="btn btn-secondary btn-lg" tabindex="-1" role="button" aria-disabled="true"
                    data-toggle="modal" data-target="#exampleModalCenter">Add</button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo validation_errors(); ?>

                                <form action="<?php echo base_url();?>index.php/demo/add" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="text" class="form-control" id="uname" name="uname"
                                            aria-describedby="emailHelp" placeholder="Enter Name">
                                        <?php echo form_error('uname', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" placeholder="Enter Email">
                                        <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            aria-describedby="emailHelp" placeholder="Enter Phone">
                                        <?php echo form_error('phone', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            aria-describedby="">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="msg"
                                            rows="4">
                                    </textarea>

                                    </div>

                                    <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-info" name="submit">Clear</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
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

<script>
                $(document).ready(function() {
                    $('.delete').click(function() {
                        var id = $(this).attr("id");
                        if (confirm("Are you sure you want to delete this?")) {
                            window.location=
                                "<?php echo base_url()?>example/index.php/demo/delete_data/" +
                                id;
                        } else {
                            return false;
                        }
                    })
                });
                </script>
</body>

</html>