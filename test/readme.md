# Start

! Проект на DJANGO(python 3.10. 

1. активировать виртуальное окружение, которое лежит в webt/bin/activate(из директории проекта)
```bash
source webt/bin/activate
#перейти в директорию проекта cd *путь на вашей машине*/wb
pip install -r requirements.txt
```
2. выполнить миграцию в проекте, перейдя в директорию в файлом `manage.py`
```bash
./manage.py makemigrations
./manage.py migrate
```
3. запустить сервер
 ```bash
 ./manage.py runserver
 ```
4. доступыне ссылки
```
    * admin/ - вход в панель администратора
    * registration_page/ - страница регистрации
    * registration_page/save_form_info - открытый метод API для отправки данных из заполненной формы
    * registration_page/list_info - открытый метод API для возврата списка отправителей формы
```


! Файл с логикой по заданию лежит в `wb/reg_per/custom_static/my_index.html` 
