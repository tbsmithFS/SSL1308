#!/usr/bin/python

from os.path import isfile
from string import Template

class View:
	
	def __int__(self):
		self.base_path = "/Applications/MAMP/htdocs/SSL/day1.python.com/views/"
		
	def print_header(self):
	
		print "content-type: text/html\n\n"
	
	def get_view(self, file, date={}):
	
		full_path_to_view = self.base_path + str(file) + ".py"
		
		if isfile(full_path_to_view):
	
			#open file for reading
			file_handle = open(full_path_to_view, 'r')
			
			# loop through each line in the file
			for line in file_handle:
			
				print Template(line).substitute(data) 