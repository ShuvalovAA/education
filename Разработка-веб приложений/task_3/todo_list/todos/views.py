from django.shortcuts import render
from django.core import serializers
from django.http import HttpResponse
from todos.models import ToDo
import json


def create_todos(request):
    name = request.GET.get('name')
    desctiption = request.GET.get('desctiption')

    not_found_args = any([not name, not desctiption])
    if not_found_args:
        return HttpResponse('need: name, desctiption')

    ToDo.objects.create(name=name, desctiption=desctiption)

    return HttpResponse('create')

def delete_todos(request):
    id = request.GET.get('id')
    if not id:
        return HttpResponse('need id')

    try:
        todo = ToDo.objects.get(pk=id)
    except ToDo.DoesNotExist:
        return HttpResponse(f'ERROR: not found: id: {id}')
    
    todo.delete()
    return HttpResponse(f'delete: id: {id}')

def update_todos(request):
    id = request.GET.get('id')
    desctiption = request.GET.get('desctiption')
    not_found_args = any([not id, not desctiption])
    if not_found_args:
        return HttpResponse('need: id, desctiption')

    try:
        todo =  ToDo.objects.get(pk=id)
    except ToDo.DoesNotExist:
        return HttpResponse(f'ERROR: not found: id: {id}')


    return HttpResponse('update')

def show_todos(request):
    start_date = request.GET.get('start_date')
    end_date = request.GET.get('end_date')
    not_found_args = any([not end_date, not start_date])
    if not_found_args:
        return HttpResponse('need: start_date, end_date')


    
    todos = ToDo.objects.filter(date__range=[start_date, end_date])
    todos_json = serializers.serialize('json',todos)
    todos_dicts = json.loads(todos_json)
    for i in todos_dicts:
        i['id'] = i['pk']

        del i['model']
        del i['pk']

    context = json.dumps(todos_dicts)

    return HttpResponse(context)