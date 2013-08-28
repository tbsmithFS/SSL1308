#!/usr/bin/python

from models.view import View

class Home():
	def dispatch(self, pairs, data={}):		
		if 'action' not in pairs:
			action = 'home'
			#print("not in pairs")
		else:
			action = pairs.getvalue('action')
			#print("else in pairs")
			
		data ={'username': 'Guest',
			'controller' : 'home'
		}
			
		view_model = View()
		view_model.print_header()
		view_model.get_view("header", data)
		view_model.get_view("navbar", data)
		
		if action == 'home':
			view_model.get_view("body",data)
		elif action == 'contact':
			view_model.get_view("contact", data)
		else:
			view_model.get_view("home", data)
		
		view_model.get_view("footer", data)