import cv2
import requests
url = "http://127.0.0.1/projeto/upload.php"
def send_file():
    r = requests.post(url, files=files)
    if r.status_code == 200 :
        print ("POST realizado")
        print (r.status_code)
    else :
        print ("Não foi possível realizar o pedido")
        print (r.status_code)

try:
    camera = cv2.VideoCapture('https://video-auth1.iol.pt/beachcam/bcsaopedromoel/playlist.m3u8') 
    ret, image = camera.read()
    cv2.imwrite('webcam.png', image)
    files = {'imagem': ('webcam.png', open('webcam.png', 'rb'), 'upload/jpeg')}
    send_file(files)
    camera.release()
    cv2.destroyAllWindows()
finally:
    print("Fim")