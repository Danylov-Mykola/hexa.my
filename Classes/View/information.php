<h1>This is a sample work uses external package.</h1>
<h2>Description</h2>
<p>
    Реализация показывает две возможности: продемонстрировать использование композер-пакета
    и показать, с чего можно начать написание собственного PHP фреймворка.<br>
    Микро-приложение (каркас) состоит из индексного файла в корне, и других файлов в папке
    Classes.<br>
    В каркасе я не реализовывал роутинг и контроллеры, только несколько вью и пример модели.
    Этот каркас можно доработать до полноценного MVC.<br>
    <br>
    Точка запуска приложения - файл "Application.php".
    В методе "run" вызывается метод модели, и из полученного результата запускается рендеринг
    страницы.
    <br>
    В файле "Classes\Model\Example.php" показано, как использовать подключаемый пакет:
    инициализация домена, добавление страниц домена, из которых нужно скачать картинки,
    и получение списка скачанных файлов для формирования прямых ссылок для html страницы приложения.
    <br>
    Разработанный отдельно композер-пакет устанавливается и подключается к данному приложению
    через composer install.
    <br>
    С уважением, Николай Данилов.
</p>
<hr>