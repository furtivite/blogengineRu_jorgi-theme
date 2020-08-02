# Тема Ёрги для ЭГЕИ
Почти* готовая к использованию тема на ЭГЕЮ Ильи Бирмана

## Вступление
Тема предназначена для движка [[https://blogengine.ru/ ЭГЕЯ Ильи Бирмана]]. Вам необходимо будет его скачать и установить на вашем хостинге. 

### Примечания к установке движка
[[https://blogengine.ru/help/ В разделе "Помощь" на сайте проекта указано:]]
- "На хостинге должен быть разрешён локальный .htaccess"
- Вам потребуется PHP 5.4 и выше. Рекомендуется PHP 7 с модулями php_mbstring, php_gd.
- Вам потребуется база MySQL.

## Как установить тему
- В директории проекта находите раздел `/themes`
- Помещаете тему туда
- Заходите в админ-панель на сайте, и включаете нужную тему. Она будет называться Ёрги (ru), Jorgi (en) или Йоргi (ua)

## Особенности темы
- Поддержка тёмной темы

(https://raw.githubusercontent.com/furtivite/blogengineRu_jorgi-theme/develop/img/2020-08-03_01-10-42.png?token=AL77WWRYDXIYZPXOGXQAFI27GB26U)

Ниже изменения относительно стандартной темы:

- Текстовый блок под заголовком показывается всегда (В стандартной теме, он скрывается в записях)
- Увеличена ширина текстового блока
- Увеличен размер шрифта (для мобильной версии задан рассчитываемый меньший размер)
- Удалены переменные цветов в `src/styles/variables.scss` - "сборщик" отказывался их понимать, правка цветов происходит в `:root{}` в том же файле ниже
- Изменены шрифты
    - У текстов на (PT Astra Sansby Paratype)[https://www.paratype.ru/fonts/pt/pt-astra-sans], которую они сделали для Astra Linux. (Гарнитура подготовлена к выпуску компанией ПараТайп в 2016 году и распространяется на условиях открытой пользовательской лицензии SIL OPEN FONT LICENSE (OFL)). Альтернатива `serif`. Пакет находится в `src/styles/components/fonts`
    - У заголовков `h1`, движковых блоков: поля ввода, теги - установлены "дефолтные" `sans-serif`-шрифты для вашей системы: `-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;`
    - У блоков кода уменьшен размер шрифта, относительно основного текста
- Конец каждой записи отбивается пунктиром
- Заголовок записи выделяется изображением (кроме первой записи после заголовка на первой странице)
- Увеличено расстояние между записями
- Возвращены стандартные обозначения ненумерованных списков (форматирование изменено)
- Добавлено уникальное форматирование под задачи автора
    - Сделаны выноски (callouts): `<span class="my-callout"></span>`
    - Для отображения инфраструктуры добавлены изображения файлов `<span class="my-folder"></span>` и папок `<span class="my-file"></span>`
    - Для отображения тегов в строке `<span class="my-code"></span>`
- В подвал добавлена ссылка на телеграм

## Как пользоваться
Если вы хотите пользоваться тем, что есть, учитывайте, что ЭГЕЯ поддерживает HTML, поэтому вы можете при написании вашей записи просто вставить нужный `span` прямо в текст. Если стиль уже есть в системе, он применится.

### Донастройки
Перед началом использования вам потребуется:

- Зайти в файл `templates/layout-tmlp.php` в любом редакторе, найти там текст `<a class="e2-rss-button" target="_blank" rel="noopener noreferrer nofollow" href="#">Telegram</a>` и заменить решетку на адрес своего телеграма
- Заменить картинку у заголовков статей (по-умолчанию: лимон (лого ЭГЕИ)) на ваше лицо или другую картинку
    - Если вы умеете пользоваться SASS или прочитали раздел "Как улучшить" ниже, нужно заменить значение переменной `--articleTitlePic` и сгенерируйте новый CSS-файл
    - Если вам достаточно поправить CSS, найдите в `styles/main.css` 39 строку - `--articleTitlePic: url(#);` и замените то, что находится между скобок на адрес вашей картинки

Не забудьте "закинуть" файл после изменений к вам на сервер и обновить страницу.

## Как улучшить
Чтобы улучшить тему, пожалуйста, сделайте "fork" и делайте то, что хотели. 

Вам понадобится. 

- Установленный Node.js и NPM (идёт в комплекте). Если их нет:
    - Установите Node.js
        - На Windows или Mac - https://nodejs.org/ru/
        - На Linux (Debian-like) - `$ sudo apt install nodejs`
    - Установите NPM (если вдруг его не оказалось в комплекте)
        - На Linux (Debian-like) - `$ sudo apt install npm`
- Установленный SASS
    - Установите SASS
        - Приложением (платным или бесплатным) [[https://sass-scss.ru/install/ список]]
        - Через NPM - `$ npm i -g sass` (установится в систему, если не хотите, меняйте флаг `-g` на другой)
    - Воспользуйтесь компилятором SASS для сборки SCSS-файлов в CSS-файлы
        - Приложением (смотри инструкции на сайтах разработчиков)
        - Терминалом - `$ sass --watch themes/jorgi/src/styles/main.scss:themes/jorgi/styles/main.css` (вы должны находиться в папке проекта)
        Ваш CSS-файл будет компилироваться при любом изменении SCSS-файла, и попадать в финальный CSS-файл. Вам останется просто кинуть папку с темой в нужное место на хостинге. 

## Планы
- [ ] - сделать дефолтную картинку у заголовков статей равной картинке-логотипу
- [ ] - написать Илье о новой теме
    - [ ] - предложить перенести [[https://blogengine.ru/help/ документацию]] в гитбук
    - [ ] - добавить в админку возможность добавления новых ссылок рядом с РСС на социальные сети, и возможность управления ими (чтобы не править layout.tmpl.php)
