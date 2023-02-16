import requests
from time import strftime, gmtime
from msvcrt import kbhit, getch
import sys  

#obtem a data corrente
def datahora():
    return strftime("%d/%m/%Y %H:%M:%S", gmtime())

#função para fazer post
def send_to_api(data):
    r = requests.post("http://127.0.0.1/projeto/api/api.php", data=data)
    if r.status_code == 200:
        print(r.status_code)
        print("OK: Post realizado")
    else:
        print(r.status_code)
        print("Erro, não foi posivel realizar o post")

try:
    while 1:
        if kbhit():
            key = getch()
            if key == b'0':
                #caso prima tecla 0 ,o valor do sensor de Dioxido de carbono muda para Não detetado
                send_to_api({"nome":"DioxidoCarbono", "valor": "Não Detetado", "hora": datahora()})
                print("\nO Sensor não está a detetar fumo")
            elif key == b'1':
                #caso prima tecla 1 ,o valor do sensor de Dioxido de carbono muda para detetado
                send_to_api({"nome":"DioxidoCarbono", "valor": "Detetado", "hora": datahora()})
                print("\nO Sensor está a detetar fumo")
            else:
                print(f"Opção {key} inválida")
except KeyboardInterrupt:
    print("Programa terminado pelo utilizador")
except:
    print("erro: ", sys.exc_info()[0])