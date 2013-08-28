#!/usr/bin/python

import cgitb
cgitb.enable()

print "Content-type: text/html\n\n"

from models.connection import DBConnector

def get_random_artist(self):
	sql = "select Artist, Album, Size, Kind, Year,	Playercount from iTunes order by rand() limit 1"
	
	print("{} came out with their album {} that's {} large and is in a {} format. The album hit ales in {}  and has been payed {} times")
cursor.close()
self.db.close()