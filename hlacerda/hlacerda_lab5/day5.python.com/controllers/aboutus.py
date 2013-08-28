#!/usr/bin/python

# from models.view import View

class Aboutus():
	def get(self, pairs, data={}):
		
		print("test working")
		
		if 'action' not in pairs:
			action = 'aboutus'
			print("not in pairs")
		else:
			action = pairs.getvalue('action')
			print("else in pairs")
			
		view_model = View()
		view_model.print_header()
		view_model.get_view("header", data)
		view_model.get_view("navbar", data)
		
		if action == 'aboutus':
			view_model.get_view('aboutus',data)
		elif action == 'contact':
			view_model.get_view('contact', data)