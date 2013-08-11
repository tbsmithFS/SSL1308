#!/usr/bin/python

#print "Content-type: text/html\n\n"

from models.view import View

view_model = View()
view_model.print_header()

data = {
    "site_title": "My website title",
    "logo_title": "My website logo",
    "main_body_text": "My website body",
    "copyright_info": "My website copyright"
}

view_model.get_view("header", data)
view_model.get_view("body", data)
view_model.get_view("footer", data)

