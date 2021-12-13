# Новостной сайт.

Данный сайт предназначен для ведения новостей, где любой пользователь может прочитать новость, а админ может управлять статьями (добавлять, удалять, изменять).

## Языки которые использованы.
1. PHP, MySQL, Javascript, HTML, CSS, Объектно-ориентированное программирование PHP.

- #### Front-end разработка
    - HTML 5
    - CSS 3
    - Javascript

- #### Back End langusges
    - PHP
    - MySQL
    - AngularJS

- #### ICON Libraries
    - [FONTAWESOME](https://fontawesome.com/)
    - likely (пока что выключен, нужен для репоста статей)

## Установка сайта на Open Server 5.4.0
1. Используем **PHP 8.0** или выше, также используем **MariaDB-10.5 (PhpMyAdmin)**
2. Устанавливаем **Open Server**.
3. Копируем этот репозиторий (github repo) в папку с сервером.
4. Заходим в панель **phpmyadmin**, и импортируем **name.sql**, который назодится в корне сайта. /news.sql
5. Меняем пароль для админки в директории **/admin/.htpasswd**
6. Запускаем сервер и заходим на сайт, с любого браузера.
7. Проверяем работоспособность сайта.

## Также требуется улучшения на сайте
1. Админ палнель
2. Рефакторинг кода
3. Добаление секции с комментариями

## Какие есть фичи на сайте
- Админ Панель
- Удобный пользовательский интерфейс
- Есть пагинация
- Angular Rich Text Editor, удобный интерфейс для написания статей

## Предварительный просмотр

Live версия сайта здесь: http://techwars.space.swtest.ru/ 

Домашняя страница
![image](https://user-images.githubusercontent.com/38429687/145822456-a26d6353-a151-4bdc-8cbb-8e0a589da917.png)

Страница статьи
![image](https://user-images.githubusercontent.com/38429687/145822883-4ffba654-8b83-46f4-8cc0-b960636bc02c.png)

Страница всех статей
![image](https://user-images.githubusercontent.com/38429687/145823526-7cf799fa-dcee-4e57-adbf-680cd96985ca.png)

### Лог

1. [x] Разработан дизайн
- [x] Подключение к базе данных
- [x] Вывод на главную страницу всех элементов, через sql
- [x] Добавлены категории
- [x] Добавлен Main Aside, с последними статьями из каждой категирии
- [x] Разработан вывод статей по списку
- [x] Разработан вывод статьи, по id статьи
- [x] Разработана пагинация (для категорий, админки, всех постов)
- [x] Разработана Админ Панель
- [x] Добавлено изменение статей
- [x] Добавлено добавление статей
- [x] Добавлено удаление статей
- [x] Добавлен Angular Text Editor, для удобного написания статей.
- [x] Добавлен способ вход в админку, через .htaccess (Конфигурационный файл веб-сервера Apache, позволяющий управлять работой веб-сервера и настройками сайта с помощью различных параметров)
- [x] Все посты выводятся по убыванию (по дате)
