from django.shortcuts import render
from django.views.generic.base import TemplateView

# Create your views here.

class HomePageView(TemplateView):
    template_name = "my_index.html"


def reg_save():
    return 1

def reg_list():
    return 1