#!/usr/bin/python

# print "Content-type: text/html\n"

# print "Python script is running"

# import settings.db
# 

import cgi

pairs = cgi.FieldStorage()

from models.view import View

view_model = View()

view_model.print_header()

# data = {"site_title" : "My Python Web Site",
# 		"logo_title" : "My Web Site Logo",
# 		"body_text" : "this is my main body text",
# 		"copyright_info" : "Full Sail university 2013" }

if 'controller' not in pairs:
	con = 'home'
else:
	con = pairs.getvalue('controller')
	# print(con)
	#print("test")

if con == 'home':
	from controllers.home import Home
	Home().get(pairs)
	print("home")
elif con == 'aboutus':
	print("aboutus")
	from controllers.news import Aboutus
	Aboutus().get(pairs)
elif con == 'user':
	print("contacts")
	from controllers.user import Contacts
	Contacts().get(pairs)
elif con == 'register':
	from controllers.register import Register
	Register().get(pairs)
else:
	# default
	from controllers.home import Home
	Home().get(pairs)

# print "My name is {} and I live at {}" .format(data[])

#view_model.get_view("header", data)
#view_model.get_view("body", data)
#view_model.get_view("footer", data)