import requests
import json
import matplotlib.pyplot as plt
fig, ax = plt.subplots()

response = requests.get('http://127.0.0.1:81/TecXoticInventory/services/readobject_category.php').text

response = json.loads(response)
dato = int(response[-1][2])
print(dato)
ax.scatter(x = [1, 2, 3], y = [dato, 2, 1])
plt.show()







