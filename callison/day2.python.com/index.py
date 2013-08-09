#!/usr/bin/python

import cgi

pairs = cgi.FieldStorage()

if 'con' not in pairs:
	con = 'home'
else:
	con = pairs.getvalue('con')
	
if con == 'home':
	from controllers.home import Home
	Home().get(pairs)
elif con == 'blog':
	from controllers.blog import Blog
	Blog().get(pairs)
elif con == 'login':
	from controllers.login import Login
	Login().get(pairs)
else:
	from controllers.home import Home
	Home().get(pairs)