<h2>Сотрудники</h2>

<div class=" d-flex flex-wrap">
</div>
<div class="bd-example" bis_skin_checked="1">

        <div class="row g-3">

            <div class="col-md-4" bis_skin_checked="1">
                <label for="state" class="form-label">Подразделение</label>
                <select class="form-select" name="gender" id="state" required="">
                    <option value="">-</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="col-md-4" bis_skin_checked="1">
                <label for="state" class="form-label">Состав</label>
                <select class="form-select" name="gender" id="state" required="">
                    <option value="">-</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="col-md-4 d-flex justify-content-start align-items-end">
                <button style="height: 37px; font-size: 17px; padding-top: 5px;" class="w-100 btn btn-outline-warning btn-lg" type="submit">Применить</button>
            </div>
        </div>
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
                echo '<td>' . $employee->id_subdivision . '</td>';
                echo '</tr>';
            }
            ?>


        </tbody>
    </table>
    <?php
    if (app()->auth::user()->name === 'admin'):
        ?>
        <a class="w-100 btn btn-lg btn-warning" type="submit" href="add_employees">Добавить</a>
    <?php
    endif;
    ?>


</div>


