#!/usr/bin/python

from os.path import isfile
from string import Template

class View:

	def __init__(self):
		self.base_path = "/Users/callison5/Sites/ssl1308/day1.python.com/views/"

	def print_header(self):
		print "Content-type: text/html\n\n"

	def get_view(self, file, data={}):
		full_path_to_view = self.base_path + str(file) + ".py"

		if isfile(full_path_to_view):

			#open file for reading
			file_handle = open(full_path_to_view, 'r')

			#loop throgh each line in file
			for line in file_handle:

				print Template(line).substitute(data)
