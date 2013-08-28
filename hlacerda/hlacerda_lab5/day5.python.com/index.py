#!/usr/bin/python


# attempt 2


print "Content-type: text/html"

import cgi

pairs = cgi.FieldStorage()

if 'controller' not in pairs:
	con = 'home'
else:
	con = pairs.getvalue('controller')

if  con == 'home':
	from controllers.home import Home
	Home().dispatch(pairs)
elif con == 'user':
	from controllers.user import User
	User().dispatch(pairs)
else:
    from controllers.home import Home
    Home().dispatch(pairs)








# import cgi
# 
# pairs = cgi.FieldStorage()
# 
# from models.view import View
# 
# view_model = View()
# 
# view_model.print_header()
# 
# if 'controller' not in pairs:
# 	con = 'home'
# else:
# 	con = pairs.getvalue('controller')
# if con == 'home':
# 	from controllers.home import Home
# 	Home().get(pairs)
# 	print("home")
# elif con == 'aboutus':
# 	print("aboutus")
# 	from controllers.news import Aboutus
# 	Aboutus().get(pairs)
# elif con == 'user':
# 	print("contacts")
# 	from controllers.user import Contacts
# 	Contacts().get(pairs)
# elif con == 'register':
# 	from controllers.register import Register
# 	Register().get(pairs)
# else:
# 		from controllers.home import Home
# 	Home().get(pairs)