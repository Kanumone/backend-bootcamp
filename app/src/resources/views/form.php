<link rel="stylesheet" href="/css/form.css">

<form id="feedback-form" method="post">
    <div class="name-container">
        <label class="form__data-label">Имя</label>
        <input required type="text" name="name" class="feedback-form__data-input" value="<?= $pageData['name'] ?>">
    </div>
    <div class="email-container">
        <label class="form__data-label" >Email</label>
        <input required type="email" name="email" class="feedback-form__data-input" value="<?= $pageData['email'] ?>">
    </div>
    <label for="birthday" class="form__data-label">Дата рождения</label>
    <input type="date" name="birthday" value="<?= $pageData['birthday'] ?>">
    <div class="sex-container" style="margin-top: 20px;">
        <input type="radio" name="sex" id="male" value="male"
            <?php if ($pageData['sex'] == 'male') echo "checked" ?>
        ><label for="male">Male</label>
        <input type="radio" name="sex" id="female" value="female"
            <?php if ($pageData['sex'] == 'female') echo "checked" ?>
        ><label for="female">Female</label>
    </div>
    <label for="subject" class="form__data-label">Тема обращения</label>
    <input required type="text" name="subject">
    <label for="comment" class="form__data-label">Комментарий</label>
    <textarea required name="comment"></textarea>
    <div>
        <input required type="checkbox" id="rules" name="rules" class="form__data-label">
        <label class="feedback-form__checkbox-label" for="rules">С правилами ознакомлен</label>
    </div>
    <button type="submit" class="feedback-form__button">Отправить</button>
</form>