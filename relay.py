import RPi.GPIO as GPIO
from time import sleep
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
GPIO.setup(14, GPIO.OUT, initial=GPIO.Low)

While true:
GPIO.output(14, High)
sleep(10)
GPIO.output(14, Low)
sleep(10)
