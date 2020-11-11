<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<div class="container proba">
    <form action="add_situation.php" method="POST">
        <p>Телефон:*</p>
        <input type="text" name="phone" placeholder="Введите телефон" style="display: block">
        <br/>

        <p>E-Mail:</p>
        <input type="text" name="email" placeholder="Введите e-mail" style="display: block">
        <br/>

        <p>Коротко опишите ситуацию:*</p>
        <textarea name="content" cols="40" rows="10"></textarea>
        <br/>

        <!--            <input type="submit" value="Отправить">-->
        <button class="btn btn-success" type="submit">Бесплатная консультация</button>
    </form>
</div>
