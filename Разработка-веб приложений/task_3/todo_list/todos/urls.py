# -*- coding: utf-8 -*-
from django.urls import path
from todos.views import (
    create_todos, 
    delete_todos, 
    update_todos,
    show_todos
)

urlpatterns = [
    path("create/", create_todos),
    path("delete/", delete_todos),
    path("update/", update_todos),
    path("show/", show_todos),
]

