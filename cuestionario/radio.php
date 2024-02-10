<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .card2 {
            border: 1px solid #f7f7f7;
            background-color: #f7f7f7;
            border-radius: 25px;
        }

        .card3 {
            border: 1px solid #816ff7;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .card3 .btn-done {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #000;
            background: transparent url("img/done.svg") center/1em auto no-repeat;
            border: 0;
            border-radius: 50%;
            background-color: #816ff7;
        }

        .card2 .btn-done {
            box-sizing: content-box;
            width: 14px;
            height: 14px;
            padding: 0.25em 0.25em;
            color: #000;
            border: 0;
            border-radius: 50%;
            opacity: 0.5;
            border: 2px solid #5f6368;
        }

        .btn-nil {
            box-sizing: content-box;
            width: 14px;
            height: 14px;
            padding: 0.25em 0.25em;
            color: #000;
            border: 0;
            border-radius: 50%;
            opacity: 0.5;
        }

        .btn-text {
            box-sizing: content-box;
            width: 50px;
            height: 16px;
            padding: 0.25em 0.25em;
            color: #000;
            border: 0;
            border-radius: 50%;
            font-weight: bold;
        }



        .logo {
            padding: 0.25em 0.25em 0.25em 0.25em;
        }

        .btn {
            border-radius: 10px;
        }
        input[type="radio"]
        {
            visibility: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="me-2">
                        <img src="img/arrow_left.svg" class="logo">
                    </div>
                    <div class="btn-text">19/25</div>
                </div>
            </div>
            <hr>
            <div class="col-12 text-center">
                <h2>¿Por que?</h2>
                <p>Selecciona una opción</p>
            </div>
            <div class="col-12">

                <div class="card card2 mt-3" id="item1" onclick="btnclick(1)">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="me-2">
                            <img src="icon40/ico_w_e1493-40.png" class="logo">
                            <input type="radio" id="radio1" name="Item" value="5" />
                        </div>
                        <div class="col"> Perder sueño <br>otro</div>
                        <div>
                            <div class="btn-done"></div>
                        </div>
                    </div>
                </div>
                <div class="card card2 mt-3" id="item2" onclick="btnclick(2)">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="me-2">
                            <img src="icon40/ico_w_e1546-40.png" class="logo">
                            <input type="radio" id="radio2" name="Item" value="4" />
                        </div>
                        <div class="col"> Perder sueño</div>
                        <div>
                            <div class="btn-done"></div>
                        </div>
                    </div>
                </div>
                <div class="card card2 mt-3" id="item3" onclick="btnclick(3)">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="me-2">
                            <img src="icon40/ico_w_e1497-40.png" class="logo">
                            <input type="radio" id="radio3" name="Item" value="3" />
                        </div>
                        <div class="col"> Perder sueño</div>
                        <div>
                            <div class="btn-done"></div>
                        </div>
                    </div>
                </div>
                <div class="card card2 mt-3" id="item4" onclick="btnclick(4)">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="me-2">
                            <img src="icon40/ico_w_e1545-40.png" class="logo">
                            <input type="radio" id="radio4" name="Item" value="2" />
                        </div>
                        <div class="col"> Perder sueño</div>
                        <div>
                            <div class="btn-done"></div>
                        </div>
                    </div>
                </div>
                <div class="card card2 mt-3" id="item5" onclick="btnclick(5)">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="me-2">
                            <img src="icon40/ico_w_e1523-40.png" class="logo">
                            <input type="radio" id="radio5" name="Item" value="1" />
                        </div>
                        <div class="col"> Perder sueño</div>
                        <div>
                            <div class="btn-done"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-3 mb-3 d-grid">
                    <button class="btn btn-primary" type="button" onclick="btn()">Continuar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        function radio() {
            var radioButtons = $("input[type='radio']");

            // Deselect all radio buttons
            radioButtons.each(function() {
                this.checked = false;
            });
        }

        function btnclick(id) {
            $(".card").removeClass("card3");
            $(".card").removeClass("card2");
            $(".card").addClass("card2");

            $("#item"+ id).removeClass("card2");
            $("#item"+ id).addClass("card3");
            radio();
            $("#radio"+ id).prop('checked',true);
        }

        function btn() {
            radio();
        }
    </script>
</body>

</html>