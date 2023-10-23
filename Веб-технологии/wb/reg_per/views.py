import json

from django.shortcuts import render
from django.views.generic.base import TemplateView

from reg_per.models import VisiterForum
from django.http import JsonResponse
from django.core import serializers

# Create your views here.

class HomePageView(TemplateView):
    template_name = "my_index.html"


def reg_save(request):

    body = json.loads(request.body)
    first_name = body.get('first_name')
    last_name = body.get('last_name')
    middle_name = body.get('middle_name')
    birth_date = body.get('birth_date')
    is_report = True if body.get('is_report') == 'on' else False
    phone = body.get('phone')
    email = body.get('email')
    visitor = {
    "first_name": first_name,
    "last_name": last_name,
    "middle_name": middle_name,
    "birth_date": birth_date,
    "is_report": is_report,
    "phone": phone,
    "email": email,

    }

    VisiterForum.objects.create(**visitor)
    return JsonResponse({"status":"ok"})

def reg_list(request):
    all_visit = serializers.serialize("json", VisiterForum.objects.all())
    return JsonResponse({"list":all_visit})