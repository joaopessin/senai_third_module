int ledPinRed = 13;

void setup() {
  // put your setup code here, to run once:
  pinMode(ledPinRed, OUTPUT); // saída de energia do LED
}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(ledPinRed, HIGH);  // acendendo
  delay(100); // Tempo de 100 ms (0,1s)

  digitalWrite(ledPinRed, LOW); // apagando
  delay(500);
}
