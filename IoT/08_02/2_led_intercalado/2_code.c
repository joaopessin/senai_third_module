int ledPinRed = 13;
int ledPinBlue = 12;

void setup() {
  // put your setup code here, to run once:
  pinMode(ledPinRed, OUTPUT);
  pinMode(ledPinBlue, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(ledPinRed, HIGH);
  delay(500);

  digitalWrite(ledPinRed, LOW);
  delay(500);

  digitalWrite(ledPinBlue, HIGH);
  delay(500);

  digitalWrite(ledPinBlue, LOW);
  delay(500);
}
