<?php
if ( app()->auth::user()->name === 'admin'):
?>


<div class="col-md-7 col-lg-8" bis_skin_checked="1">
    <h2 class="mb-3">Добавить сотрудника</h2>
    <form class="needs-validation" method="post">
        <div class="row g-3">

            <hr class="">
            <div class="col-sm-6" bis_skin_checked="1">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="" required="">
            </div>

            <div class="col-sm-6" bis_skin_checked="1">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" name="surname" class="form-control" id="lastName" placeholder="" value=""
                       required="">
            </div>


            <div class="col-sm-6" bis_skin_checked="1">
                <label for="patronymic" class="form-label">Отчество</label>
                <input type="text" name="patronymic" class="form-control" id="lastName" placeholder="" value=""
                       required="">
            </div>

            <div class="col-sm-6" bis_skin_checked="1">
                <label for="patronymic" class="form-label">Дата рождения</label>
                <input type="date" name="date" class="form-control" id="lastName" placeholder="" value="" required="">
            </div>


            <div class="col-12" bis_skin_checked="1">
                <label for="address" class="form-label">Адрес</label>
                <input type="text" name="address" class="form-control" id="address"
                       placeholder="Пушкина дом колотушкина" required="">
            </div>

            <div class="col-md-4" bis_skin_checked="1">
                <label for="state" class="form-label">Пол</label>
                <select class="form-select" name="gender" id="state" required="">
                    <option value="">Выбирете пол...</option>
                    <option>Ж</option>
                    <option>М</option>
                </select>
            </div>
            <div class="col-md-4" bis_skin_checked="1">
                <label for="state" class="form-label">Должность</label>
                <select class="form-select" name="id_position" id="state" required="">
                    <option value="">Выбирете должность...</option>


                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="col-md-4" bis_skin_checked="1">
                <label for="state" class="form-label">Подразделение</label>
                <select class="form-select" name="id_subdivision" id="state" required="">
                    <option value="">Выбирете подразделение...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-outline-warning btn-lg" >Добавить</button>
        </div>
    </form>
</div>
<?php
else:
    ?>
<h3>Вы не имеете прав для добавления сотрудника</h3>

<?php
endif;
?>
