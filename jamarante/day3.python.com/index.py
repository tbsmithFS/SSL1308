#!/usr/bin/python

import cgi
import cgitb
import re
from models.view import View

cgitb.enable()

messages = {
    "start": "Please fill all the fields.",
    "empty": "Please fill all the fields correctly",
    "email": "Email is not valid.",
    "pass_length": "Password must be at least 8 characters long.",
    "pass_match": "Passwords must match."
}

view_model = View()
view_model.print_header()
view_model.get_view("header")
view_model.get_view("form")
view_model.get_view("footer")

form = cgi.FieldStorage()

if not (form):
    view_model.get_view("start", messages)
elif not (form.has_key("full_name")):
    view_model.get_view("empty", messages)
elif not (form.has_key("email")):
    view_model.get_view("empty", messages)
if (form.has_key("email")):
    if (re.search("^\w+@(\w+\.)+\w+$", form["email"].value) == None):
        view_model.get_view("email", messages)
elif (form.has_key("password")):
    if (form.has_key("confirm_password")):
        if (len(form["password"].value) < 8):
            view_model.get_view("passlength", messages)
        elif (form["password"].value != form["confirm_password"].value):
            view_model.get_view("passmatch", messages)