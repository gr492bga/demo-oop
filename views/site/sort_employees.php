<h2>Сотрудники</h2>

<div class=" d-flex flex-wrap">
</div>
<div class="bd-example" bis_skin_checked="1">
    <div class="d-flex">
        <a class="nav-link px-2 text-black" href="/employees">Показать все</a>
        <span class="d-flex align-items-center">|</span>
        <a class="nav-link px-2 text-black" href="/employees_sort?id_composition=1">Фильтровать по составу</a>
    </div>
    <div class="row g-3">
        <form action="sort_employees">

            <div class="col-md-4" bis_skin_checked="1">
                <h4 for="state" class="form-label">Подразделение</h4>
                <select class="form-select" name="id_subdivision" id="state" required="">
                    <option value=""></option>
                    <?php
                    foreach ($subdivisions as $subdivision) {
                        echo '<option value="'.$subdivision->id_subdivision.'"> '.$subdivision->title.'-'.$subdivision->id_subdivision.'</option>';
                    }
                    ?>
                </select><br>
                <div class="col-md-4 d-flex justify-content-start align-items-end">
                    <button style="width:140px; height: 37px; font-size: 17px; padding-top: 5px;" class=" btn btn-outline-warning btn-lg" type="submit">Применить</button>
                </div>
            </div>
        </form>


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


