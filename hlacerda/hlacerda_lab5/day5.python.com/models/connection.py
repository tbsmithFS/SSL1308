class DBConnector():
	def __init__(self):
		self.db = mysql.connector.connect(host="127.0.0.1", port = 8889, user= root, passwd = "root", db = "ADB")
										

	def add_user(self, persistentID='', Album='', Artist='', Size='', Kind='', Year='', Playercount=''):

		slq = "insert into iTunes (PersistentID, Album, Artist, Size, Kind, Year, Playercount) values (%(persistentID), %(Album), %(Artist), %(Size), %(Kind), %(Year), %(Playercount))"

	user_info = {
		'persistentID' : persistentID,
		'Album'	: Album,
		'Artist' : Artist,
		'Size' : Size,
		'Kind' : Kind,
		'Year' : Year,
		'Playercount' : Playercount
		}

	cursor = self.db.cursor()
	cursor.execute(sql, user_info)
	self.db.comit()
	cursor.close()
	self.db.close()