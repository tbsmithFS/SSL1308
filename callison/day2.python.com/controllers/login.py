#!/usr/bin/python

from models.view import View

class Login():
	def get(self, pairs, data={}):
    
            if 'action' not in pairs:
                action = 'home'
            else:
                action = pairs.getvalue('action')
            
        view_model = View()
        view_model.print_header()
        
        data = {'site_title' : "My Python website title - login",
            	'logo_title' : "My Python logo",
            	'main_body_text' : "Welcome to the login page",
            	'copyright_info' : "Callisonification &copy; 2013",}
        
        view_model.get_view("header", data);
        view_model.get_view("nav", data);
        view_model.get_view("body", data);
        view_model.get_view("footer", data);