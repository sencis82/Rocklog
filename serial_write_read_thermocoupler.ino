#include "max6675.h"

int thermoDO = 3;
int thermoCS = 4;
int thermoCLK = 5;

MAX6675 thermocouple(thermoCLK, thermoCS, thermoDO);
int vccPin = 3;
int gndPin = 2;

float temp_out1 = 0.0; // Temperature output varible
float temp_out2 = 0.0; // Temperature output varible
float temp_out3 = 0.0; // Temperature output varible
float temp_out4 = 0.0; // Temperature output varible
float temp_out5 = 0.0; // Temperature output varible

const int ledPin = 13;

// the setup function runs once when you press reset or power the board
void setup() {
  // initialize digital pin 13 as an output.
  pinMode(ledPin, OUTPUT);
  
  Serial.begin(9600);
  // use Arduino pins 
  pinMode(vccPin, OUTPUT); digitalWrite(vccPin, HIGH);
  pinMode(gndPin, OUTPUT); digitalWrite(gndPin, LOW);
  
  //Serial.println("MAX6675 test");
  // wait for MAX chip to stabilize
  delay(500);
}

// the loop function runs over and over again forever
void loop() {
  if (Serial.available())  {
     light(Serial.read() - '0');
  }
  delay(5000);              // wait for a second

  temp_out1 = thermocouple.readCelsius();
  temp_out2 = thermocouple.readCelsius();
  temp_out3 = thermocouple.readCelsius();
  temp_out4 = thermocouple.readCelsius();
  temp_out5 = thermocouple.readCelsius();

  // basic readout test, just print the current temp (average 5 readings)
  Serial.println((temp_out1+temp_out2+temp_out3+temp_out4+temp_out5)/5);
}

void light(int n){
  for (int i = 0; i < n; i++)  {
    digitalWrite(ledPin, HIGH);
    delay(100);
    digitalWrite(ledPin, LOW);
    delay(100);
  }
}
