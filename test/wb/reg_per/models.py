from django.db import models


class VisiterForum(models.Model):
    id = models.fields.AutoField(primary_key=True)
    first_name = models.TextField(null=False)
    last_name = models.TextField(null=False)
    middle_name = models.TextField(null=False)
    birth_date = models.DateField(null=True)
    is_report = models.BooleanField()
    report_theme = models.TextField(null=True)
    phone = models.TextField(null=False)
    email = models.TextField(null=False)
