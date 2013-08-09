#!/usr/bin/python

#import settings.db

from models.view import View

view_model = View()

view_model.print_header()

data = {"site_title" : "My Python Web Site",
		"logo_title" : "My Web Site Logo",
		"body_text" : "This is my main body text",
		"copyright_info" : "Full Sail University 2013"}

view_model.get_view("header", data)
view_model.get_view("body", data)
view_model.get_view("footer", data)
