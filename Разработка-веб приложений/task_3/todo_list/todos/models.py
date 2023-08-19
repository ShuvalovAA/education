from django.db import models
from datetime import datetime

# Create your models here.

class ToDo(models.Model):
    id = models.fields.BigAutoField(primary_key=True, null=False)
    name = models.fields.TextField(null=False)
    date = models.fields.DateField(auto_now=datetime.now(), null=False)
    desctiption =models.fields.TextField(null=False)