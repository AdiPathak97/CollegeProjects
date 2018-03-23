#include<SoftwareSerial.h>

#define rx 2
#define tx 3
SoftwareSerial newSerial = SoftwareSerial(rx, tx);

int s1 = A1;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  newSerial.begin(19200);
  pinMode(tx, OUTPUT);
  pinMode(rx, INPUT);


}

void loop() {
  // put your main code here, to run repeatedly:
  if (newSerial.available() > 0){
  int incomingByte = newSerial.read();
  //String input = newSerial.readString();
    if (incomingByte == '1') {
      //analogWrite(analogPin, 100);
      Serial.println("Miner 1 Detected at Station 1.");
      delay(500);

      
      //Serial.println(analogRead(A3));
    }
  }
  
  /*if ( newSerial.read == 100 )
    Serial.println("Miner 1 Detected at Station 1.");
  else if (analogRead(A1) == 0)
    Serial.print("No input detected : ");
  /*
  if ( analogRead(A1) == 100 )
    Serial.println("Miner 1 Detected at Station 1.");
  else if (analogRead(A1) == 0)
    Serial.print("No input detected : ");
   
    //Serial.println(analogRead(A1));
    /*else if ( analogRead(s1) == 2 ) 
      Serial.println("Miner 2 Detected at Station 1.");
    else if ( analogRead(s1) == 3 ) 
      Serial.println("Miner 3 Detected at Station 1.");
    else if ( analogRead(s1) == 4 ) 
      Serial.println("Miner 4 Detected at Station 1.");
  */

  /*while( analogRead(s2) ) {
    if ( analogRead(s2) == 1 ){
      Serial.println("Miner 1 Detected at Station 2.");
    }
    /*else if ( analogRead(s2) == 2 ) {
      Serial.println("Miner 2 Detected at Station 2.");
    }
    else if ( analogRead(s2) == 3 ) {
      Serial.println("Miner 3 Detected at Station 2.");
    }
    else if ( analogRead(s2) == 4 ) {
      Serial.println("Miner 4 Detected at Station 2.");
    }
  }*/


}
