<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <form action="" class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" name="second_name">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Имя</label>
                        <input type="number" class="form-control" name="year">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Курс</label>
                        <input type="text" class="form-control" name="course">
                    </div>

                    <button type="submit" class="btn btn-warning">
                        Добавить запись
                    </button>
                </form>

            </div>
            <div class="col-6">
            <?php foreach($result as $s) { ?>
                
            <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>