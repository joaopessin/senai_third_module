int ledPins[] = { 12, 11, 10, 9, 8, 7, 6, 5, 4, 3 };

void setup() {
  for(int i=0; i<10; i++) { pinMode(ledPins[i], OUTPUT); }
}

void loop() {
  int i=0;
  int j=9;

  while (i<=8) {
    digitalWrite(ledPins[i], HIGH);
    digitalWrite(ledPins[j], HIGH);
    delay(150);
    digitalWrite(ledPins[i], LOW);
    digitalWrite(ledPins[j], LOW);
    delay(50);

    i++;
    j--;
  }
}
