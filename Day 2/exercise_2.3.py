import requests
import json
import pandas as pd

key = '170de447736accf8df9adc707e570109'
pwd = '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'
hos = 'hoangnguyen99'
ver = '2021-04'
res = 'customers'
url = 'https://{key}:{pwd}@{hos}.myshopify.com/admin/api/{ver}/{res}.json'.format(key=key, pwd=pwd, hos=hos, ver=ver, res=res)

x = requests.get(url)
# print(x.text)

y = json.loads(x.text)
df = pd.DataFrame()
for customer in y['customers']:
    del customer['addresses']
    temp = pd.json_normalize(customer)
    df = df.append(temp)
# print(df)

df = pd.DataFrame(df)
df.to_csv('D:/Hoang/day 2/my_customers.csv', index=False)

# c = pd.read_json(x.text)
# with open('D:/Hoang/day 2/my_customers.csv','w') as f:
#     for key in (c['customers'][0]).keys():
#         f.write(str(key) + ',')
#     f.write('\n')
#     for val in c['customers']:
#         for i in val.values():
#             f.write(str(i) + ',')
#         f.write('\n')
#     f.close()
# print(c)