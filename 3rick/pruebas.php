<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">1</div>
            <div class="col-3">2</div>
            <div class="col-3">3</div>
            <div class="col-3">4</div>
        </div>
        <div class="row">
            <div class="col">
                <pre>
                hola
                juan
                hola
            </pre>
            </div>
            <div class="col">2</div>
            <div class="col">
                <div class="alert alert-success">
                    <strong>Succes!</strong>
                </div>
            </div>
            <div class="col">4</div>
            <div class="col"><pre>
            <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit.  -->
        </pre></div>
            
        </div>
        <div class="row">
            <div class="col d-grid">
                <button class="btn btn-danger" type="button" onclick="mymodal()"> Enviar </button>
            </div>
            <div class="col">x</div>
        </div>

        <div class="modal" tabindex="-1" id="nuevoModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">MODAL TITLE</h5>
                        <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"=""></button>
                    </div>
                    <div class="modal-body">
                        <p>Make a modal</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="salir()" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script>
            function mymodal() {
                $("#nuevoModal").modal("show");
            }
            function salir() {
                $("#nuevoModal").modal("hide");
            }
        </script>
    </div>

</body>

</html>