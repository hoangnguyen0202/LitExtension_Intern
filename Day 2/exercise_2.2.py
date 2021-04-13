import pymysql
import pandas as pd
from sqlalchemy import create_engine
engine = create_engine('mysql+pymysql://{user}:{password}@localhost/{database}'.format(user='root', password='', database='customer'), echo=False)

csv = pd.read_csv('D:\Hoang\day 2\customer.csv')
#print(csv)
csv.to_sql('customers', engine, if_exists='replace', index_label=None)

con = pymysql.connect(host='localhost', user='root', password='', database='customer')
cursor = con.cursor()

#cursor.execute('show databases')
#cursor.execute('show tables')
#cursor.execute("select * from customers where customerid='69906'")

con.commit()
con.close()
print(cursor.fetchall())