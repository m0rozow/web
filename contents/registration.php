<section>
<h1>Регистрация</h1>
<div class="error" id="error"><?=$info ?? ""?></div>
<form method="post" id="form">
    <div class="reg-wrapper">
        <div class="string">
            <label>Фамилия</label>
            <input data-desc="Фамилия" type="text" name="surname" required>
        </div>
        <div class="string">
            <label>Имя</label>
            <input data-desc="Имя" type="text" name="name" required>
        </div>
        <div class="string">
            <label>Отчество</label>
            <input data-desc="Отчество" type="text" name="patronymic" required>
        </div>
        <div class="string">
            <label>Дата рождения</label>
            <input data-desc="Дата рождения" type="date" name="data" required>
        </div>
        <div class="string">
            <label for="">Пол</label>
            <div>
                <input type="radio" id="genderChoice"  name="gender" value="Мужчина">
                <label for="genderChoice">Мужчина</label>
                <input type="radio" id="genderChoice"  name="gender" value="Женщина">
                <label for="genderChoice">Женщина</label>
            </div>
        </div>
        <div class="string">
            <label for="">Вид деятельности</label>
            <select activity>
                <option activity>Студент</option>
                <option activity>Работающий</option>
                <option activity>Не работающий</option>
                <option activity>Пенсионер</option>
            </select>
        </div>
        <div class="string">
            <label>Логин</label>
            <input data-desc="Пол" type="text" name="login" required>
        </div>
        <div class="string">
            <label>Пароль</label>
            <input data-desc="Пароль" type="password" id="pass" name="password" required>
        </div>
        <div class="string">
            <label>Пароль ещё раз</label>
            <input data-desc="Пароль ещё раз" type="password" id="pass2" name="one_more_pass" required>
        </div>
        <div class="string">
            <label>E-mail</label>
            <input data-desc="E-mail" type="email" pattern=".+@gmail.com" placeholder="example@gmail.com" name="email" required>
        </div>
        <div class="agreement">
            <label for="">Соглашение</label>
            <input  data-desc="Cоглашение" type="checkbox"  id="agreement" name="agreement" required>
        </div>
        <div class="string buttons">
            <input type="reset" value="Очистить">
            <button id="send"  name ="send" disabled>Отправить</button>
        </div>
    <div>
</form>
</section>