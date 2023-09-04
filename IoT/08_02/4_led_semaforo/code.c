int ledPinGreen = 13;
int ledPinYellow = 12;
int ledPinRed = 11;

void setup() {
  // put your setup code here, to run once:
  pinMode(ledPinGreen, OUTPUT);
  pinMode(ledPinYellow, OUTPUT);
  pinMode(ledPinRed, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(ledPinRed, HIGH);
  delay(2000);
  digitalWrite(ledPinRed, LOW);
  delay(100);

  digitalWrite(ledPinGreen, HIGH);
  delay(2500);
  digitalWrite(ledPinGreen, LOW);
  delay(100);

  digitalWrite(ledPinYellow, HIGH);
  delay(1250);

  digitalWrite(ledPinYellow, LOW);
  delay(100);
}
