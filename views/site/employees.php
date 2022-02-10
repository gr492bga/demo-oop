<h2>Сотрудники</h2>

    <div class=" d-flex flex-wrap">
    </div>
<div class="bd-example" bis_skin_checked="1">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Отчество</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Адрес</th>
            <th scope="col">Пол</th>
            <th scope="col">Должность</th>
            <th scope="col">Подразделение</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            foreach ($employees as $employee) {
                echo '<tr>';
                echo '<th scope="row">' . $employee->id . '</th>';
                echo '<td>' . $employee->name . '</td>';
                echo '<td>' . $employee->surname . '</td>';
                echo '<td>' . $employee->patronymic . '</td>';
                echo '<td>' . $employee->date . '</td>';
                echo '<td>' . $employee->address . '</td>';
                echo '<td>' . $employee->gender . '</td>';
                echo '<td>' . $employee->id_position . '</td>';
                echo '<td>' . $employee->subdivision . '</td>';
                echo '</tr>';
            }
            ?>


        </tbody>
    </table>
    <a class="w-100 btn btn-lg btn-warning" type="submit" href="add_employees">Добавить</a>
</div>