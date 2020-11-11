<?php include_once 'header2.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<h2 class="zagolovok_h2">
    Test form
</h2>
<br/>

<div class="container proba">
    <div class="container mt-4">
        <h1>Форма регистрации</h1>
        <form action="addmessage.php" method="POST">
            <p>Name:</p>
            <input type="text" class="form-control" name="name"
                   id="name" placeholder="Введите имя" style="display: block"><br/>

            <p>Message:</p>
            <textarea name="content" cols="40" rows="10"></textarea>
            <br/>
<!--            <input type="submit" value="Отправить">-->

            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
</div>

<? include_once 'footer2.php' ?>
