#!/usr/bin/python

# from models.view import View

class Register():
	def get(self, pairs, data={}):

		view_model = View()
		view_model.print_header()
		view_model.get_view('register',data)
		
		
		# stuff I added
		
		view_model.get_view("header", data)
		view_model.get_view("navbar", data)
		
		if action == 'home':
			view_model.get_view('home',data)
		elif action == 'contact':
			view_model.get_view('contact', data)