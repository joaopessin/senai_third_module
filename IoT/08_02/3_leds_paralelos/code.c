int ledPinOrange = 13;
int ledPinPink = 12;

void setup() {
  // put your setup code here, to run once:
  pinMode(ledPinOrange, OUTPUT);
  pinMode(ledPinPink, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(ledPinOrange, HIGH);
  digitalWrite(ledPinPink, HIGH);
  delay(500);

  digitalWrite(ledPinOrange, LOW);
  digitalWrite(ledPinPink, LOW);
  delay(500);
}
