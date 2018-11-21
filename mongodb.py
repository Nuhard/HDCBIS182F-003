# File : pythonlogionmongodb.py



from pymongo import MongoClient
client = MongoClient()
dB=Client["user"]

usern = input("ENTER USERNAME")
passw = input("ENTER PASSWORD")

users = dB.users.find($and:[{'username':usern},{'password':passw}])

if users:
	print("Login Successful")
else:
	print("Login Failed ,USERNAME or PASSWORD is Incorrect")