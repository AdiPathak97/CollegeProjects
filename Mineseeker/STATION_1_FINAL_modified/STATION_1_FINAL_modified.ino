
#include<SoftwareSerial.h>

#define rx 3
#define tx 2
SoftwareSerial newSerial = SoftwareSerial(rx, tx);

const int ledPin = 13; // the pin that the LED is attached to
int incomingByte;      // a variable to read incoming serial data into
int flag = 0;
int data = 0;

const int analogPin = 3;

void setup() {
  // initialize serial communication:
  Serial.begin(9600);
  newSerial.begin(19200);
  // initialize the LED pin as an output:
  pinMode(ledPin, OUTPUT);
  pinMode(tx, OUTPUT);
  pinMode(rx, INPUT);

}

void loop() {
  // see if there's incoming serial data:
  if (Serial.available() > 0) {
    // read the oldest byte in the serial buffer:
    incomingByte = Serial.read();
    // if it's a capital H (ASCII 72), turn on the LED:
    if (incomingByte == '1') {
      digitalWrite(ledPin, HIGH);
      //analogWrite(analogPin, 100);
      flag =1;
      delay(500);
      digitalWrite(ledPin, LOW);
    }
  }
  if ((newSerial.available() > 0)&&(flag == 1)){
    newSerial.print('1'); 
  }
}


