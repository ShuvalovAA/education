from django.contrib import admin
from django.urls import path

from reg_per import views as rp
from msg import views as m


urlpatterns = [
    path("admin/", admin.site.urls),
    path("registration_page/", rp.HomePageView.as_view()),
    path("registration_page/save_form_info", rp.save_form_info),
    path("registration_page/list_info", rp.list_info),
]
