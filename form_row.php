<form action="add_client.php" method="POST">
    <div class="form-row">
        <div class="col">
            <input type="text" id="name" name="name" class="form-control" placeholder="Введите Ваше Имя"
                   style="border:1.5px solid red;" required>
        </div>
        <div class="col">
            <input type="tel" name="phone" id="phone" class="form-control bfh-phone"
                   style="border:1.5px solid red;" placeholder="+7 (495) 755 69 83" required>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary btn-m btn-block"
                    style="width: 330px; height: 40px; text-align: center;"><b>Получить бесплатную консультацию</b>
            </button>
        </div>
    </div>
</form>