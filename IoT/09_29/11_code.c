int buzzer = 2;
int time = 300;

void setup() {
  pinMode(buzzer, OUTPUT);
}

void loop() {
  // DO
  tone(buzzer, 262, 200);
  delay(time);

  // RE
  tone(buzzer, 294, 300);
  delay(time);

  // MI
  tone(buzzer, 330, 300);
  delay(time);

  // FA
  tone(buzzer, 349, 300);
  delay(time);

  // SOL
  tone(buzzer, 392, 300);
  delay(time);

  // LA
  tone(buzzer, 440, 300);
  delay(time);

  // SI
  tone(buzzer, 494, 300);
  delay(time);

  // DO
  tone(buzzer, 528, 300);
  delay(time);
}
