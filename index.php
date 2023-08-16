<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>GuestBook</title>
        <link rel="stylesheet" href="styles/custom.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="scripts/main.js"></script>
    </head>
    <body>
    <div class="main">
        <div class="createData">
            <h2>Создание записи</h2>
                <form method="post" encType="multipart/form-data" id="createForm" >
                    <div class="form-group">
                        <label htmlFor="name">Имя</label>
                        <input id="name" name="name" type="text" class="name form-control" />
                    </div>
                    <div class="form-group">
                        <label htmlFor="message">Сообщение</label>
                        <textarea id="message" name="message" type="text" class="message form-control"></textarea>
                    </div>
                <button type="submit" class="btn btn-success"> Добавить запись! </button>
                </form>
        </div>
        <div class="content">
            <table class="table table-striped table-bordered">
                <tr>
                    <th scope="col" style="width:20%">Имя</th>
                    <th scope="col">Сообщение</th>
                    <th scope="col" style="width:20%" >Дата</th>
                </tr>
            </table>
        </div>
    </div>    
    </body>   
</html>