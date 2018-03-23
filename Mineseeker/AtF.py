import serial
import time
import requests
import json
from firebase import firebase

firebase = firebase.FirebaseApplication('https://miney-e278f.firebaseio.com/')
firebase_url = 'https://miney-e278f.firebaseio.com/'

#Connect to Serial Port for communication
ser = serial.Serial('COM3', 9600, timeout=0)

#Setup a loop to send Miner detections at fixed intervals
fixed_interval = 1

while 1:
	try:         
		Input = ser.readline()
		serialInput = 'No input detected'
		
		#current time and date
		time_hhmmss = time.strftime('%H:%M:%S')
		date_ddmmyyyy = time.strftime('%d/%m/%Y')
		stationId = 'Station_1'
		minerId = 'Miner_1'
		
		#Clean Input received from serial port
		serialInput = str(Input).replace("\\r\\n'", "")
		serialInput = serialInput[2:]
		
		#if serialInput.find("Station 1") != -1:
			#stationId = 'Station 1' 
		
		if "Station 1" in str(serialInput):
			stationId = 'Station_1'
		elif "Station 2" in str(serialInput):
			stationId = 'Station_2'
			
		if "Miner 1" in str(serialInput):
			minerId = 'Miner_1'
		elif "Miner 2" in str(serialInput):
			minerId = 'Miner_2'
			
		print (str(serialInput) + ', ' + str(time_hhmmss) + ', ' + str(date_ddmmyyyy)) 
	
		#insert record
		#data = {'Miner status':str(serialInput),'Date':str(date_ddmmyyyy),'Time':str(time_hhmmss)}
		result = firebase.put( stationId, minerId, {'Miner_status':str(serialInput),'Status_date':str(date_ddmmyyyy),'Status_time':str(time_hhmmss)} )
		#result = requests.post(firebase_url + '/' + stationId + '/' + minerId + '.json', data = json.dumps(data))


		time.sleep(fixed_interval)
		
	except IOError:
		print('Error! Something went wrong.')
		
	time.sleep(fixed_interval)