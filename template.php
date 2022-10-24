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

                <form action="/insert.php" class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Имя</label>
                        <input required type="text" class="form-control" name="name">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Фамилия</label>
                        <input required type="text" class="form-control" name="second_name">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Имя</label>
                        <input required type="number" class="form-control" name="year">
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label">Курс</label>
                        <input required type="text" class="form-control" name="course">
                    </div>

                    <button type="submit" class="btn btn-warning">
                        Добавить запись
                    </button>
                </form>

            </div>
            <div class="col-6">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Год рождения</th>
                                <th scope="col">Курс</th>
                                <th scope="col">Удаление</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $student) { ?>}
                            <tr>
                                <th scope="row"><?= $student['name'] ?></th>
                                <td><?= $student['second_name'] ?></td>
                                <td><?= $student['year'] ?></td>
                                <td><?= $student['course'] ?></td>
                                <td><a class="btndelete"href="delete.php?id=<?= $student['id'] ?>">Удалить</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    <script>
        function check(id) {
            if (confirm('Уверены, что хотите удалить?')) {
                window.location = "delete.php?id=" + id;
            }
        }

        document.querySelector('.btndelete').addEventListener('click', check(<?= $student['id'] ?>);

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>