# Start

! Проект на DJANGO(python 3.10. 

1. активировать виртуальное окружение, которое лежит в webt/bin/activate
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


! Файл с логикой по заданию лежит в `wb/reg_per/custom_static/my_index.html` 
