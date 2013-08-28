#!/usr/bin/python

# print "Content-type: text/html\n\n"

# print "Python script is running"

# import settings.db
# 
from models.view import View

view_model = View()

view_model.print_header()

data = {"site_title" : "My Python Web Site",
		"logo_title" : "My Web Site Logo",
		"body_test" : "this is my main body text",
		"copyright_info" : "Full Sail university 2013" }

view_model.get_view("header", data)
view_model.get_view("body", data)
view_model.get_view("footer", data)
