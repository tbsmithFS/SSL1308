#!/usr/bin/python

# from models.view import View

class Contacts():
	def get(self, pairs, data={}):
		
		print("test working")
		
		if 'action' not in pairs:
			action = 'contacts'
			print("not in pairs")
		else:
			action = pairs.getvalue('action')
			print("else in pairs")
			
		view_model = View()
		view_model.print_header()
		view_model.get_view("header", data)
		view_model.get_view("navbar", data)
		
		if action == 'contacts':
			view_model.get_view('contacts',data)
		elif action == 'contact':
			view_model.get_view('contact', data)