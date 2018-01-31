<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
            <div align="center" style="margin-left: 300px; margin-right: 300px; margin-top: 200px;">
                <div class="card">
                    <div class="card-header ">
                        Inicio de Sesion
                    </div>
                    <div class="card-block">
                        <form>
                            <div class="row">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="usuario">

                            </div>
                            <br>
                            <div class="row">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                            </div>

                        </form>
                        <br>
                        <div align="right">
                            <button type="submit" class="btn btn-default" id="boton">Iniciar Sesion </button>
                        </div>
                    </div>
                </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
            <script src="{{asset("/js/Login.js")}}"> </script>
    </body>
</htm>