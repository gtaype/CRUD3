<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista de credenciales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Lista servidores:</h3>

                <div class="records_content"></div>
            </div>
        </div>
    </div>
    <!-- /Content Section -->

    <!-- Bootstrap Modals -->
    <!-- Modal - Add New Record/User -->
    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="hostname">Hostname</label>
                    <input type="text" id="hostname" placeholder="Hostname" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="ip">Ip</label>
                    <input type="text" id="ip" placeholder="Ip" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="user_so">User SO</label>
                    <input type="text" id="user_so" placeholder="User SO" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="text" id="pass" placeholder="Password" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="so">So</label>
                    <input type="text" id="so" placeholder="So" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="obser">Observaciones</label>
                    <input type="text" id="obser" placeholder="Observaciones" class="form-control"/>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>




