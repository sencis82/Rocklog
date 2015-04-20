import time
import datetime
import pycps
import serial

port =serial.Serial(
    "/dev/ttyACM0",
    baudrate=9600,
    parity=serial.PARITY_NONE,
    stopbits=serial.STOPBITS_ONE,
    bytesize=serial.EIGHTBITS,
    writeTimeout = 0,
    timeout = 10,
    rtscts=False,
    dsrdtr=False,
    xonxoff=False)

port.write("9")

# Create a connection to a Clusterpoint database.
con = pycps.Connection('tcp://00.00.00.00:9007', 'DB', 'user@mail.com', 'password', 'ID')

while 1:
        try:
            # red
            tempfile = open("/sys/bus/w1/devices/28-000005581b13/w1_slave")
            thetext = tempfile.read()
            tempfile.close()
            tempdata = thetext.split("\n")[1].split(" ")[9]
            temperature = float(tempdata[2:])
            temperature = temperature / 1000
            # print temperature
            ts = time.time()
            st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
            doc = {'host': '192.168.0.1', 'location': 'inside', 'type': 'temperature', 'time': st, 'value': str(temperature)}
            # print int(ts)
            #print doc
            con.insert({str(int(ts))+"red": doc})
        except pycps.APIError as e:
            print(e)

        try:
            # blue
            tempfile = open("/sys/bus/w1/devices/28-000005552f7d/w1_slave")
            thetext = tempfile.read()
            tempfile.close()
            tempdata = thetext.split("\n")[1].split(" ")[9]
            temperature = float(tempdata[2:])
            temperature = temperature / 1000
            # print temperature
            ts = time.time()
            st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
            doc = {'host': '192.168.0.1', 'location': 'coldstream', 'type': 'temperature', 'time': st, 'value': str(temperature)}
            # print int(ts)
            #print doc
            con.insert({str(int(ts))+"blue": doc})
        except pycps.APIError as e:
            print(e)

        try:
            # black
            tempfile = open("/sys/bus/w1/devices/28-00000554a7a8/w1_slave")
            thetext = tempfile.read()
            tempfile.close()
            tempdata = thetext.split("\n")[1].split(" ")[9]
            temperature = float(tempdata[2:])
            temperature = temperature / 1000
            # print temperature
            ts = time.time()
            st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
            doc = {'host': '192.168.0.1', 'location': 'hotstream', 'type': 'temperature', 'time': st, 'value': str(temperature)}
            # print int(ts)
            #print doc
            con.insert({str(int(ts))+"black": doc})
        except pycps.APIError as e:
            print(e)

        try:
            # orange
            tempfile = open("/sys/bus/w1/devices/28-0000054e1c9d/w1_slave")
            thetext = tempfile.read()
            tempfile.close()
            tempdata = thetext.split("\n")[1].split(" ")[9]
            temperature = float(tempdata[2:])
            temperature = temperature / 1000
            # print temperature
            ts = time.time()
            st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
            doc = {'host': '192.168.0.1', 'location': 'outside', 'type': 'temperature', 'time': st, 'value': str(temperature)}
            # print int(ts)
            #print doc
            con.insert({str(int(ts))+"orange": doc})
        except pycps.APIError as e:
            print(e)

        # wait 2 sec for unique IDs
        #time.sleep(2)

        try:
            response=port.readline()
            ts = time.time()
            st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
            doc = {'host': '192.168.0.1', 'location': 'misc', 'type': 'atmega', 'time': st, 'value': response}
            #print doc
            con.insert({str(int(ts))+"white": doc})
        except pycps.APIError as e:
            print(e)

        time.sleep(300)
