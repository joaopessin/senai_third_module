int LED = 2;
int BOTAO = 3;

int ESTADO_BOTAO = 0;
int VAR1 = 0;
int VAR2 = 0;

void setup() {
  pinMode(LED, OUTPUT);
  pinMode(BOTAO, INPUT);
}

void loop() {
  VAR1 = digitalRead(BOTAO);

  if(VAR1 == 1 && VAR2 == 0) {
    ESTADO_BOTAO = 1 - ESTADO_BOTAO;
    delay(50);
  }

  VAR2 = VAR1;

  if(ESTADO_BOTAO == 1) {
    digitalWrite(LED, 1);
  } else{
    digitalWrite(LED, 0);
  }
}
