##### Way 1 (requests)

# import requests
# from bs4 import BeautifulSoup

# url = 'http://45.79.43.178/source_carts/wordpress/wp-login.php'
# log = {'log': 'admin', 'pwd': '123456aA'}
# r = requests.post(url, data=log)
# #print(r.text)

# soup = BeautifulSoup(r.text, 'html.parser')
# #print(soup.prettify())
# print(soup.find('span', 'display-name').string)


##### Way 2 (selenium)
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

user_name = 'admin'
password = '123456aA'
driver = webdriver.Chrome(executable_path=r'C:\Users\Lite\Downloads\chromedriver_win32 (1)\chromedriver.exe')
driver.get('http://45.79.43.178/source_carts/wordpress/wp-login.php')

element = driver.find_element_by_id("user_login")
element.send_keys(user_name)
element = driver.find_element_by_id("user_pass")
element.send_keys(password)
element.send_keys(Keys.RETURN)

user = driver.find_element_by_class_name('display-name').text
print(user)
driver.close()