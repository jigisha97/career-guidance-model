import requests

url = 'http://localhost:5000/predict_api'
r = requests.post(url,json={'maths':89, 'comp':90, 'ba':60,'states':65,'chemistry':45,'physics':55,'history':48,'politics':0,'economics':50,'biology':56})

print(r.json())
