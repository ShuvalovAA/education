# HOW INSTALL
---
## ! Требования
* PHP 8.1
* XAMPP
* WINDOWS 11
---
1. Загрузите на локаль директорию task_2
2. Запустите XAMPP
3. Активируйте APACHE и  MySQL
4. Перейдите в панель администратора - http://localhost/phpmyadmin/index.php?
5. Выполните миграцию
```SQL
CREATE DATABASE SDO_2023;
CREATE TABLE `SDO_2023`.`users` (`id` BIGINT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL, `password` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `SDO_2023`.`ad` (`id` BIGINT NOT NULL AUTO_INCREMENT , `description` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
6. Перенестие директорию task_2 в директорию ***\xampp\htdocs, где `***` - часть пути до директории приложения XAMPP
## Сценарий использования
- http://localhost/task_2/reg.php - регистрация
- http://localhost/task_2/sigin.php - авторизация
- http://localhost/task_2/tasks.php - добавление объявлений

*страница добавления объявлений доступна если Вы авторизовались или зарегистрировались*
