<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>ToDo List Using Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">ToDo List<a href="#" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a></h3>
                            </div>
                            <div class="panel-body">
                                    <ul class="list-group">
                                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Cras justo odio</li>
                                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Dapibus ac facilisis in</li>
                                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Morbi leo risus</li>
                                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Porta ac consectetur ac</li>
                                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Vestibulum at eros</li>
                                          </ul>
                            </div>
                          </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="title">Add New Item</h4>
                </div>
                <div class="modal-body">
                  <p><input type="text" name="" id="addItem" class="form-control" placeholder="Type new item here"></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="display:none" id="delete">Delete</button>
                  <button type="button" class="btn btn-primary" style="display:none" id="saveChange">Save changes</button>
                  <button type="button" class="btn btn-primary" id="addnew">Add Item</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('.ourItem').each(function(){

        $(this).click(function(event){
            var contents = $(this).text();
            $('#addItem').val(contents);
            $('#title').text('Edit Item');
            $('#delete').show(400);
            $('#saveChange').show(400);
            $('#addnew').hide(400);
            console.log(contents);

        })
    })
})
</script>
</body>
</html>